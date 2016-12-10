//初始设置
var data={};

$(document).ready(function(){
    $(".ajaxlink").click(function(){
        if(this.href.indexOf("#")>-1) return false;
        $.ajax({
            url:this.href,
            type:"get",
            success:function(d){
                    eval(d);
            }
        });
        return false;
    });
    $(".leftMenu").click(function(){
        var o=this;
        $(".leftMenu").each(function(idx,e){
            $(e).parent("li").removeClass("current");
            if(o==e){
                $(e).parent("li").addClass("current");
            }
        });
    });
});

/*
 *界面显示
 */
var UI={
    //背景遮罩层
    showMask:function(){
        $("<div id='float_bj'></div>").appendTo("body");
    },
    //显示窗口 w:宽度 t:标题 html:内容 fn:确定按钮执行函数 h高度
    showWindow:function(w,t,html,fn,h){
        UI.showMask();
        w=w>0?" style='width:"+w+"px'":"";
        h=h>0?" style='height:"+h+"px'":"";
        $("<div class='pop_box'"+w+"><dl><dt><span class='pop_title'>"+t+"</span><a class='pop_cose' href='javascript:UI.hideWindow()'></a></dt><dd id='box' class='pop_cc'"+h+">"+html+"</dd><dd class='pop_submit'><ul class='submit_box'><li><button id='submit' type='button' onclick='"+fn+"' class='submit_b button'>确定</button><button type='button' onclick='UI.hideWindow()' class='aid_b button'>取消</button></li></ul></dd></dl></div>").appendTo("body");
        UI.setWindow();
    },
    //重新定位弹窗位置
    setWindow:function(){
        $(".pop_box").css({
            'left':($(window).width()-$(".pop_box").width())/2+'px',
            'top':($(window).height()-$(".pop_box").height())/2+'px'
        });
       fan_ui.setFrame();
    },
    //隐藏窗口
    hideWindow:function(){
        $(".pop_box").remove();
        $("#float_bj").remove();
    },
    //表格点击事件
    tableClick:function(){
        var tabletr=$(".data_table").find("tr");
	var trcheck_b=$(this).first().find("td").find("input:checkbox");
	tabletr.hover(function(){
            $(this).addClass("hover");
        },function(){
            $(this).removeClass("hover");
        });
        
        tabletr.first().nextAll().click(function(){
            var trcheck_a=$(this).first().find("td").find("input:checkbox");
            if(trcheck_a.is(":checked")){
                trcheck_a.attr("checked", false);
            }else{
                trcheck_a.attr("checked", true);
            }
            UI.tableHighlight();
	});
		
	trcheck_b.click(function(){
            if($(this).is(":checked")){
                $(this).attr("checked", false);
            }else{
                $(this).attr("checked", true);
            }
            UI.tableHighlight();
	});
    },
    //选中高亮
    tableHighlight:function(){
        $("input[@type=checkbox]:checked").parent().parent().addClass("select");
        $("input[@type=checkbox]:not(:checked)").parent().parent().removeClass("select");
    }
};
/*
 *操作
 */
var Do={
    //ajax加载URL到指定对象
    loadTo:function(url,box,d){
        data=d||data;
        $.ajax({
            url:url,
            type:d?"POST":"GET",
            data:d||null,
            error:function(){
                Do.loadTo(url, box);
            },
            success:function(r){
                $(box).html(r);
                UI.setWindow();
                if(box=="#main_cc")
                    UI.tableClick();
            }
        });
    },
    //读取表单
    readForm:function(){
        var data={};
        $("form *").each(function(){
            if(this.name!=undefined){
                if(this.type=='radio'){
                        if(this.checked)
                                data[this.name]=this.value;
                }else{
                        data[this.name]=this.value;
                }
            }
        });
        return data;
    },
    //读取列表ID
    readID:function(){
        var id="";
        $(".id:input").each(function(){
            if(this.checked){
                if(id!="")
                        id+=",";
                id+=this.value;
            }
        });
        return id;
    },
    //搜索
    search:function(){
        var key={};
        //下拉取值
        $(".value").each(function(idx,e){
            var o=$(e);
            key[o.attr("id")]=o.find("a").attr("v");
        });
        //复选取值
        $(".check").each(function(idx,e){
            var o=$(e);
            key[o.attr("name")]=o.attr("checked")?o.attr("v"):"";
        });
        //开始结束日期值
        var sd=$("#sdate").val();
        if(sd)
            key["sdate"]=sd;
        var ed=$("#edate").val();
        if(ed)
            key["edate"]=ed;
        if(sd || ed)
            key["dkey"]=$("#sdate").attr("f");
        //关键字取值
        var k=$("#keyword").val().replace("请输入关键字...", "");
        if(k)
            key["keyword"]=k;
        var url=location.href;
        if(url.indexOf("_")>-1){
            var uArr=url.split("_");
            url=uArr[1];
            if(url.indexOf("/")>-1){
                uArr=url.split("/");
                url=uArr[0];
            }
        }else{
            url="";
        }
        switch(url){
            case "":
                
                break;
            case "weibo":
                url="/my_ajax_weiboManage/?act=weiboList";
                break;
            case "order":
                url="/my_ajax_orderManage/?act=orderList";
                break;
            case "task":
                url="/my_ajax_orderManage/?act=taskList";
                break;
        }
        for(var o in key)
            data[o]=key[o];
        Do.loadTo(url, "#main_cc", data);
    },
    userForm:function(){
        UI.showWindow(0, "编辑用户", "<div id='box'></div>", "Do.editUser()", 0);
        Do.loadTo("/my_ajax_userManage/?act=editForm&r="+Math.random(), "#box");
    },
    editUser:function(){
        var d=Do.readForm();
        if(d){
            $.ajax({
                url:"/my_ajax_clientManage/?act=editUser",
                type:"post",
                data:d,
                success:function(r){
                    eval(r);
                }
            });
        }
    }
};