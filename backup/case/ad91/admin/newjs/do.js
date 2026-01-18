//初始设置
var data={};
var tt;
$(document).ready(function(){
    Do.setAjaxLink();
    //回车搜索
    $("#keyword").keydown(function(){
    	if(event.keyCode==13)
    		Do.search();
    });
});

/*
 *操作
 */
var Do={
    setAjaxLink:function(parent){
        parent=parent||"";
        $(parent+" .ajaxlink").click(function(){
            if(this.href.indexOf("#")>-1) return false;
            if($(this).attr("confirm"))
                if(!confirm($(this).attr("confirm"))) return false;
            $.ajax({
                url:this.href,
                type:"get",
                error:function(){
                    Do.setAjaxLink();
                },
                success:function(d){
                    eval(d);
                }
            });
            return false;
        });
    },
    //ajax加载URL到指定对象
    loadTo:function(url,box,d){
        data=d||data;
        if(box=="#main_cc"){
            $("#main_cc table.dblist_table").html("");
            ui.loadingTips();
            //只有微博资源列表与选择博主列表时才执行
            //table.initial_weibo_list();
        };
        $.ajax({
            url:url,
            type:d?"POST":"GET",
            data:d||null,
            error:function(){
                Do.loadTo(url, box);
            },
            success:function(r){
                $(box).html(r);
                Do.setAjaxLink(box+" ");
                if(box=="#main_cc"){
                	table.tr_hover_click();
    				ui.dblist_table_title_w();
    				ui.menu();
                    ui.dblist_null();
                    ui.loadingTipsHide();

                    ui.page_backtop_fixed();
                    ui.page_void();

    			}
    			if(box=="#box"){
    				from.formCheck("#box ");
    				ui.popxy();
                    ui.pop_tabmenu();
    				ui.input_associate();
    			}
            }
        });
    },
    //取客户的余额
    getBalance:function(customer){
        $.ajax({
            url:"/my_ajax_planManage/?act=getBalance",
            type:"post",
            data:"key="+customer,
            success:function(r){
                $("#balance").html("&#165;"+r);
            }
        });
    },
	selectSearch:function(){
		$(".monospaced_drop_down .options a").click(function(){
            tt = $(this).attr("v");
            name = $(this).parent().siblings().find("a").attr("id");
            data[name]=tt;
            Do.search();
        });
	},
    //搜索
    search:function(){
        var key={};
        //下拉取值
        $(".value").each(function(idx,e){
            var o=$(e);
            key[o.attr("id")]=o.find("span").attr("v");
        });
        $(".list_value").each(function(){
        	var k=$(this).attr("f");
        	var v=eval($(this).attr("sc"));
        	ret = "";
        	if (k=='xxxxx') {	//catalog
        		for (var i=0; i<v.length; i++){
        			if (i>0)
        				ret += v[i].value ? "," : "";
        			ret += v[i].value;
        		}
        	} else if (k=='fans' || k=='hard_price') {
        		ret = v[0]?v[0].value:'';
        	} else {
        		ret = v[0]?"='"+v[0].value+"'":'';
        	}
        	key[k]=ret;
        });
        //复选框值
        $(".check").each(function(idx,e){
            var o=$(e);
            key[o.attr("name")]=o.attr("checked")?o.attr("v"):"";
        });
        //开始结束日期值
        var dstr=$(".inputDate").val();
        if(dstr && dstr!="不限时间"){
            var dArr=dstr.split(" 至 ");
            var sd=dArr[0];
            key["sdate"]=sd;
            var ed=dArr[1];
            key["edate"]=ed;
        }else{
            key["sdate"]="";
            key["edate"]="";
        }
        if(sd || ed)
            key["dkey"]=$(".inputDate").attr("f");
        //关键字取值
        var k=$("#keyword").val();
        if(k==$("#keyword").attr("title"))
            k="";
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
        var t = $('#type').val();
        var urls={
        	"newplan":"/my_ajax_planManage/?act=newPlanList&type="+t,
        	"log":"/my_ajax_logManage/?act=logList",
        	"weibo":"/my_ajax_weiboManage/?act=weiboList",
        	"urlList":"/my_ajax_activityManage/?act=urlList",
        	"urlanalyse":"/my_ajax_weiboManage/?act=urlanalyse",
        	"bill":"/my_ajax_billManage/?act=billList",
        	"partner":"/my_ajax_partnerManage/?act=partnerList",
        	"purview":"/my_ajax_userManage/?act=sysUserList",
        	"daihao":"/my_ajax_daihaoManage/?act=daihaoList",
        	"score":"/my_ajax_scoreManage/?act=scoreList",
        	"giftexchange":"/my_ajax_scoreManage/?act=giftexchangeList",
        	"gift":"/my_ajax_scoreManage/?act=giftList",
        	"project":"/my_ajax_activityManage/?act=activityList",
        	"articleManage":"/my_ajax_admin_article/?act=articleManageList",
        	"feedback":"/my_ajax_feedbackManage/?act=feedbackList",
        	"user":"/my_ajax_userManage/?act=userList",
        	"eventDetails":"/my_ajax_activityManage/?act=eventDetails",
        	"pm":"/my_ajax_pmManage/?act=pmList",
        	"activitySelectbz":"/my_ajax_activityManage/?act=activitySelectbz",
        	"activitySelectbzAdmin":"/my_ajax_admin_activity/?act=activitySelectbz",
                "neweffect":"/my_ajax_effectManage/?act="+t,
                "task":"/my_ajax_orderManage/?act=taskList",
                "order":"/my_ajax_orderManage/?act=orderList",
                "score":"/my_ajax_scoreManage/?act=scoreList"
        };
        url=urls[url];
        for(var o in key)
            data[o]=key[o];
        Do.loadTo(url, "#main_cc", data);
    },

    //获取所属客户
    getdata:function(name){
        var key ={};
        var dstr=$(".inputDate").val();
        if(dstr){
            var dArr=dstr.split(" 至 ");
            var sd=dArr[0];
            key["sdate"]=sd;
            var ed=dArr[1];
            key["edate"]=ed;
        }else{
            key["sdate"]="";
            key["edate"]="";
        }
        if(sd || ed)
            key["dkey"]=$(".inputDate").attr("f");
        var k=$("#keyword").val();
        if(k==$("#keyword").attr("title"))
            k="";
        key["keyword"]=k;
        for(var o in key)
            data[o]=key[o];
        switch(name){
            case 'customer':
                Do.loadTo('/my_ajax_planManage/?act=getcustomers', "#main_cc", data);
                break;
            case 'geturl':
                Do.loadTo('/my_ajax_planManage/?act=geturldata', "#main_cc", data);
        }
    },
    setuser:function(e){
        $('#customer').val(e.name).focus();
    },
    setlink:function(e){
        $('#links').val(e.name).focus();
    },

    //提交表单
    submit:function(){
    	$("form").submit();
    },

    //设置上传图片表单值
    setUpfile:function(s,o){
        $("#"+o).val(s);
        $("#"+o).change();
    },
    hidebutton:function(){
        $(".drop_down").each(function(){
            if($(this).find(".options a").length==0){
                $(this).find(".options").html("<a href='#'>无操作</a>");
            }
        })
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
    //
    formView:function(){
        $("form *").each(function(idx,elm){
            $(elm).focus(function(){
                Do.setFormView();
            }).click(function(){
                Do.setFormView();
            }).keyup(function(){
                Do.setFormView();
            });
        });
    },
    setFormView:function(){
        $("form *").each(function(idx,elm){
            if(elm.id){
                if(elm.id=="ptype"){
                    var ptypeval = $('#ptype').val();
                    if( ptypeval==1 ){
                    	$('.content_li').show();
                    	$('.request_li').show();
                    	$('.img_li').show();
                    	$('.linkurl_li').hide();
                        $('.forward_li').hide();
                    }else{
                        $('.content_li').hide();
                        $('.request_li').hide();
                        $('.img_li').hide();
                        $('.linkurl_li').show();
                        $('.forward_li').show();
                    }
                }
            }
        });
    },

    activityPay:function(recid,isAdmin){
        if(recid){
        	var url = isAdmin==1?"/my_ajax_admin_activity/?act=activityPay":"/my_ajax_activityManage/?act=activityPay";
            var d={};
            d["recid"]=recid;
            $.ajax({
                url:url,
                type:"post",
                data:d,
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    daihaoPay:function(dhid){
        if(dhid){
            var d={};
            d["dhid"]=dhid;
            $.ajax({
                url:"/my_ajax_daihaoManage/?act=daihaoPay",
                type:"post",
                data:d,
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    getArticle:function(id){
        //alert(text);
        $("#article_list_sh").hide();
        Do.loadTo("/my_ajax_articleManage/?act=getArticle&id="+id, "#ajax_article_main");
    },
    delPartner:function(d){
        if(d){
            da="id="+d;
            $.ajax({
                url:"/my_ajax_partnerManage/?act=delPartner",
                type:"post",
                data:da,
                error:function(){
                    Do.delPartner(d);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    delGift:function(d){
        if(d){
            da="id="+d;
            $.ajax({
                url:"/my_ajax_scoreManage/?act=delGift",
                type:"post",
                data:da,
                error:function(){
                    Do.delGift(d);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    editAccountTwo:function(){
        UI.hideWindow();
        UI.showWindow(450,'修改收款帐号-第二步','','$(\"#box form\").submit()',0);
        Do.loadTo("/my_ajax_userManage/?act=editAccountForm&op=two", "#box");
    },
    actList:function(){
        var key={};
        //下拉取值
        $(".value").each(function(idx,e){
            var o=$(e);
            key[o.attr("id")]=o.find("a").attr("v");
        });
        //开始结束日期值
        var dstr=$(".inputDate").val();
        if(dstr){
            var dArr=dstr.split(" 至 ");
            var sd=dArr[0];
            key["sdate"]=sd;
            var ed=dArr[1];
            key["edate"]=ed;
        }else{
            key["sdate"]="";
            key["edate"]="";
        }
        if(sd || ed)
            key["dkey"]=$(".inputDate").attr("f");
        for(var o in key)
            data[o]=key[o];
        Do.loadTo("/my_ajax_activityManage/?act=actList", "#actList", data);
    },
    innerFeedback:function(url){
        var content = $("#feedback_content").val();
        if(content && content!="请输入反馈内容..."){
            var d={};
            d["content"]=content+" 地址为："+url;
            $.ajax({
                url:"/my_ajax_feedbackManage/?act=innerFeedback",
                type:"post",
                data:d,
                success:function(r){
                    eval(r);
                }
            });
        }else{
            fan_ui.minitips("请输入反馈内容！","error");
        }
        $("#feedback_content").val('');
    },
    addTitle:function(type){
    	var urls={
    		"activity":"/my_ajax_activityManage/?act=addTeam",
    		"weibo":"/my_ajax_weiboManage/?act=addGroup",
    		"article":"/my_ajax_admin_article/?act=addArticleCat",
    		"sysGroup":"/my_ajax_userManage/?act=addSysGroup"
    	};
    	url= urls[type];
        var title = $("#add_title").val();
        if(title){
            var d={};
            d["title"]=title;
            $.ajax({
                url:url,
                type:"post",
                data:d,
                success:function(r){
                    eval(r);
                }
            });
            $("#add_title").val('');
        }
    },
    viewEffect:function(id){
        if(id){
            var d={};
            d["id"]=id;
            $.ajax({
                url:"/my_ajax_clientManage/?act=viewEffect",
                type:"post",
                data:d,
                success:function(r){
                    eval(r);
                }
            });
       }
      $(".effectlist").hide();
    },
    addWeibo:function(){
        var d=Do.readForm();
        location.href="/my_ajax_clientManage/?act=addWeiboToPlatform&p="+d["platform"];
    },
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
    delPM:function(id){
        if(id){
            var d="id="+id;
            $.ajax({
                url:"/my_ajax_pmManage/?act=delPM",
                type:"post",
                data:d,
                error:function(){
                    Do.delPM(id);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    // 增加博主至推广活动
    addWeiboToActivity:function(recid,wid,page){
        if(recid && wid){
            var d={};
            d["recid"]=recid;
            d["wid"]=wid;
            d["page"]=page;
            $.ajax({
                url:"/my_ajax_activityManage/?act=addWeiboToActivity",
                type:"post",
                data:d,
                error:function(){
                    Do.addWeiboToActivity(recid,wid);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    // 追加加博主至推广订单
    appendWeiboToOrder:function(recid,wid,page){
        if(recid && wid){
            var d={};
            d["recid"]=recid;
            d["wid"]=wid;
            d["page"]=page;
            $.ajax({
                url:"/my_ajax_activityManage/?act=appendWeiboToOrder",
                type:"post",
                data:d,
                error:function(){
                    Do.appendWeiboToOrder(recid,wid);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    // 增加博主至带号任务
    addWeiboToDaihao:function(dhid,wid){
        if(dhid && wid){
            var d={};
            d["dhid"]=dhid;
            d["wid"]=wid;
            $.ajax({
                url:"/my_ajax_daihaoManage/?act=addWeiboToDaihao",
                type:"post",
                data:d,
                error:function(){
                    Do.addWeiboToDaihao(dhid,wid);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    //从推广活动中移除博主
    delWeiboFormActivity:function(recid,wid){
        if(recid && wid){
            var d={};
            d["recid"]=recid;
            d["wid"]=wid;
            $.ajax({
                url:"/my_ajax_activityManage/?act=delWeiboFormActivity",
                type:"post",
                data:d,
                error:function(){
                    Do.delWeiboFormActivity(recid,wid);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    //从推广活动中移除追加博主
    delAppendWeiboFormActivity:function(recid,wid){
        if(recid && wid){
            var d={};
            d["recid"]=recid;
            d["wid"]=wid;
            $.ajax({
                url:"/my_ajax_activityManage/?act=delAppendWeiboFormActivity",
                type:"post",
                data:d,
                error:function(){
                    Do.delAppendWeiboFormActivity(recid,wid);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    //从带号任务中移除博主
    delWeiboFormDaihao:function(dhid,wid){
        if(dhid && wid){
            var d={};
            d["dhid"]=dhid;
            d["wid"]=wid;
            $.ajax({
                url:"/my_ajax_daihaoManage/?act=delWeiboFormDaihao",
                type:"post",
                data:d,
                error:function(){
                    Do.delWeiboFormDaihao(dhid,wid);
                },
                success:function(r){
                    eval(r);
                }
            });
        }
    },
    updateWeiboToActivity:function(recid){
        Do.loadTo("/my_ajax_activityManage/?act=updateWeiboToActivity&id="+recid, "#side_preview");
    },
    appendWeiboToActivity:function(recid){
        Do.loadTo("/my_ajax_activityManage/?act=appendWeiboToActivity&id="+recid, "#side_preview");
    },
    updateWeiboToDaihao:function(dhid){
        Do.loadTo("/my_ajax_daihaoManage/?act=updateWeiboToDaihao&id="+dhid, "#side_preview");
    },
    //派单选中博主后确认

    activityAffirm:function(wids,id,isAdmin,op) {
    	if (wids) {
    		var out = $("#outRecbudget").html();
    		if (out > 0) {
    			fan_ui.minitips('已超出预算...','error');
    		} else {
    			if (isAdmin==1)	{
    				location.href='/my_admin_project/?act=affirm&id='+id+'&op='+op;
    			} else {
    				location.href='/my_project/?act=affirm&id='+id;
    			}
    		}
    	} else {
    		fan_ui.minitips('请先选择博主...','error');
    	}
    },
    //提交推广任务订单
    activitySubmit:function(id,isAdmin,op) {
    	wids=$.cookie('activity_'+id);
    	if (wids) {
    		if (isAdmin==1) {
    			location.href='/my_admin_project/?act=submitOrder&id='+id+'&op='+op;
    		} else {
    			location.href='/my_project/?act=submitOrder&id='+id;
    		}
    	} else {
    		fan_ui.minitips('数据有误，请检查...','error');
    	}
    },
    //取建推广任务时选中的博主资源
    getSelectedWids:function(id,wids,op) {
		var d={};
        d["wids"]=wids;
        var isFirst;
        isFirst = $.cookie('isFirst_'+id) > 0 ? $.cookie('isFirst_'+id) : 0;
        d["isFirst"]=isFirst;
        d["recid"]=id;
        d["op"]=op;
        Do.loadTo('/my_ajax_activityManage/?act=getSelectedWids', ".selected_weibo_table", d);

    },
    //设为直发
    setJust:function(id,wid) {
    	$.cookie('isFirst_'+id,wid,{path:'/'});
    	fan_ui.minitips('设置成功...');
    	wids = $.cookie('activity_'+id);
    	Do.getSelectedWids(id,wids,'selectedbz');
    },
    //取消直发
    cancelJust:function(id) {
    	$.cookie('isFirst_'+id,null,{path:'/'});
    	fan_ui.minitips('取消成功...');
    	wids = $.cookie('activity_'+id);
    	Do.getSelectedWids(id,wids,'selectedbz');
    },
    
    copy:function(s){
    	var copyapi=document.getElementById("copy");
    	copyapi.SWFCopy("???");
    }

};

var fan_form=from;