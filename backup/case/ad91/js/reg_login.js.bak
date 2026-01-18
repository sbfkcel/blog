$(function(){
    from.detect();
    from.tips();
    ui.loginTag();
    ui.articleSideMenu();
    ui.homeCase();
   
});

var d="";
var t=null;

var from={
    tips:function(){  
	//站内表单输入框提示文字点击清空
	$("input:text, textarea, input:password").each(function(){
		if(this.value == '')
			this.value = this.title;
		});
	$("input:text, textarea, input:password").focus(function(){
		if(this.value == this.title)
			this.value = '';
		});
	$("input:text, textarea, input:password").blur(function(){
		if(this.value == '')
			this.value = this.title;
		});
	$("input:image, input:button, input:submit").click(function(){
		$(this.form.elements).each(function(){
                    if(this.type =='text' || this.type =='textarea' || this.type =='password' ){
			if(this.value == this.title && this.title != ''){
                            this.value='';
			}
                    }
		});
	});
        $("input:text, textarea, input:password").focus(function(){
            $(this).addClass("input_focus"); 
        }).focusout(function(){
            $(this).removeClass("input_focus"); 
        });
        $(".keyword_txt").focus(function(){
            $(this).animate({width:$(this).width()+100+'px'},"slow")
        });
        $(".keyword_txt").focusout(function(){
            $(this).animate({width:$(this).width()-100+'px'},"slow")
        });


        /*
        $(".password").keyup(function(){
            window.clearTimeout(t);
            var v=this.value;
            if(d.length!=v.length){
                if(v.length>d.length){
                    d+=v.substr(v.length-1,1);
                }else{
                    d=d.substr(0,v.length);
                }
                var tmp="";
                for(var i=0;i<d.length;i++)
                    tmp+=(i+1)<d.length?"*":d.substr(i,1);
                this.value=tmp;
            }
            t=window.setTimeout(ui.hidePassword, 1000);
            $(".hidepass").val(d);
        });
        */
    },
    detect:function(){ 
	$(".validform").Validform({
		tiptype:2,
		ajaxPost:true,
                tipSweep:false,
		callback:function(data){
			//返回数据data是json格式，{"info":"demo info","status":"y"}
			//info: 输出提示信息;
			//status: 返回提交数据的状态,是否提交成功。如可以用"y"表示提交成功，"n"表示提交失败，在ajax_post.html文件返回数据里自定字符，主要用在callback函数里根据该值执行相应的回调操作;
			//你也可以在ajax_post.html文件返回更多信息在这里获取，进行相应操作；
			
			//这里执行回调操作;
			if(data.status=="y"){
				eval(data.info);
			}
		}
	});
           
    },
    selectRegType:function(type){
        if(type==0){
            $(".qq_li").show();
            $(".mobile_li").hide();
            $("#mobile").removeAttr('datatype');
            $("#mobile").removeAttr('nullmsg');
            $("#mobile").removeAttr('errormsg');
            $("#qq").attr('datatype','n');
            $("#qq").attr('nullmsg','请输入QQ号');
            $("#qq").attr('errormsg','输入错误');
        }else{
            $(".qq_li").hide();
            $(".mobile_li").show();
            $("#qq").removeAttr('datatype');
            $("#qq").removeAttr('nullmsg');
            $("#qq").removeAttr('errormsg');
            $("#mobile").attr('datatype','n');
            $("#mobile").attr('nullmsg','请输入手机号');
            $("#mobile").attr('errormsg','输入错误');
        }
    }
};
var ui={
    loginTag:function(){
        $(".login_box").find(".tag_menu").click(function(){
            $(this).parent().addClass("current");
            $(this).parent().siblings().removeClass("current");
            var v=$(".tag_box").eq(0).hasClass("current")?"广告主帐号":"微博主帐号";
            var t=$(".tag_box").eq(0).hasClass("current")?1:0;
            $("#username").attr("title", v).attr("value",v);
            $("#vcode").val(t);
        })
    },
    refreshCode:function(){
        $("#code").attr("src", "/my_code/?"+Math.random());
    },
    hidePassword:function(){
        var o=$(".password");
        var tmp="";
        for(var i=0;i<d.length;i++)
            tmp+="*";
        o.val(tmp);
    },
    checkForm:function(){
        $("input").each(function(){
            if(this.type =='text' || this.type =='textarea' || this.type =='password' ){
                if(this.value == this.title && this.title != ''){
                    this.value='';
                }
            }
        });
        return true;
    },
    articleSideMenu:function(){
        $(".has_children").click(function(){
		$(this).addClass("highlight")			//为当前元素增加highlight类
                    .children(".list").show().end()		//将子节点的.list元素显示出来并重新定位到上次操作的元素
		.siblings().removeClass("highlight")		//获取元素的兄弟元素，并去掉他们的highlight类
                    .children(".list").hide();                  //将兄弟元素下的.list元素隐藏
	});
    },
    homeCase:function(){
        var scrtime;
        $("#side_sponsor").hover(function() {
                clearInterval(scrtime);
        },
        function() {
                scrtime = setInterval(function() {
                        var $ul = $("#side_sponsor");
                        var liHeight = $ul.find("li:last").outerHeight(true);
                        $ul.animate({
                                marginTop: liHeight + "px"
                        },
                        1000,
                        function() {
                                $ul.find("li:last").prependTo($ul); 
                                $ul.find("li:first").hide();
                                $ul.css({
                                        marginTop: 0
                                });
                                $ul.find("li:first").fadeIn(1000);
                        });
                },
                3000);
        }).trigger("mouseleave");
    },
     //背景遮罩层
    showMask:function(){
        $("<div id='float_bj'></div>").appendTo("body");
    },
    //显示窗口 w:宽度 t:标题 html:内容 fn:确定按钮执行函数 h高度
    showWindow:function(w,t,html,fn,h){
        ui.showMask();
        w=w>0?" style='width:"+w+"px'":"";
        h=h>0?" style='height:"+h+"px'":"";
        $("<div class='pop_box'"+w+"><dl><dt><span class='pop_title'>"+t+"</span><a class='pop_cose' href='javascript:ui.hideWindow()'></a></dt><dd id='box' class='pop_cc'"+h+">"+html+"</dd><dd class='pop_submit'><ul class='submit_box'><li><button id='submit' type='button' onclick='"+fn+"' class='submit_b button'>确定</button><button type='button' onclick='ui.hideWindow()' class='aid_b button'>取消</button></li></ul></dd></dl></div>").appendTo("body");
        ui.setWindow();
    },
    //重新定位弹窗位置
    setWindow:function(){
        $(".pop_box").css({
            'left':($(window).width()-$(".pop_box").width())/2+'px',
            'top':($(window).height()-$(".pop_box").height())/2+'px'
        });
    },
    //隐藏窗口
    hideWindow:function(){
        $(".pop_box").remove();
        $("#float_bj").remove();
    },
    //ajax加载URL到指定对象
    loadTo:function(url,box,d){
        var data=d;
        $.ajax({
            url:url,
            type:d?"POST":"GET",
            data:d||null,
            error:function(){
                ui.loadTo(url, box);
            },
            success:function(r){
                $(box).html(r);
            }
        });
    }
};

