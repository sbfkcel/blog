var window_h;
var page_t;
var swls_value;
var filter_box_t;

var sidebar_t;

$(function(){
    ui.menu();//下拉菜单处理
    ui.monospaced();//值&title同宽下拉菜单处理
    ui.dblist_table_title_w();//数据表格title宽度处理
    ui.idea_content();//创意文本长度检查
    ui.ider_cc();//判断是否展开填写创意表单
    ui.input_associate();//输入智能提示
    ui.yx();//筛选栏根据已选条件点击处理
    ui.datepicker();//日历
    ui.custom_term();//自定义输入元件

    ui.message_reply_verify();//站内信息提交检查
    ui.dblist_null();//数据列表无结果时处理

    table.tr_hover_click();//表格点击与hover处理

    from.tipsEmpty();//表单值提示
    from.focusHig();//表单焦点亮度提示
    from.formCheck();//表单验证

    if($(".selected_weibo_box").length>0){
        table.initial_weibo_list();
    };


    $("#write_ider").click(function(){
        ui.ider_cc();
    });

    sidebar_t = $(".sidebar_menu").offset().top;

    if($(".filter_box").length>0){
        filter_box_t= $(".filter_box").offset().top;
    };


    window_h = $(window).height();
    page_t = $(document).scrollTop();
    //ui.page_backtop_fixed();

    //网银支付显示银行
    $("input:radio[name=payment]").click(function(){
       $(this).attr("id")=="chinabank"?$("#chinabank_box").show():$("#chinabank_box").hide();
    });

    $("input:radio[name=payment]").each(function(){
       if($(this).attr("checked") && $(this).attr("id")=="chinabank")
           $("#chinabank_box").show();
    });

    $(document).mouseup(function(e){
        var ro = $(".range_options,.associate_tip,.mini_glossary");
        var pointX = e.pageX;
        var pointY = e.pageY;
        if(ro.length>0){
            var rox = ro.offset().left;
            var roy = ro.offset().top;

            if(pointX<rox || pointY<roy){
                ro.remove();
            }else if(pointX>rox+ro.outerWidth() || pointY>roy+ro.outerHeight()){
                ro.remove();
            };
        };

        var ct = $(".custom_term");
        if($(e.target).parents(".custom_term").length<=0){
            ct.find(".request").hide();
        };
    });

    $(window).resize(function(){
        ui.popxy();
        window_h = $(window).height();
        ui.page_backtop_fixed();
        ui.copy_content();
    });

    $(window).scroll(function(){
        $(".mini_glossary").remove();
        //侧边菜单浮动控制
        page_t = $(document).scrollTop();

        if($.browser.msie&&$.browser.version<9){
            //ie6及以下版本不作浮动运算
        }else{
            //侧边栏菜单
            if(page_t>sidebar_t){
                $(".sidebar_menu").css({
                    "position":"fixed",
                    "top":0+"px"
                });
            }else{
                $(".sidebar_menu").removeAttr("style");
            };
            //数据筛选栏浮动控制
            if($(".filter_box").length>0){
                if(page_t>filter_box_t){
                    $(".main_cc").css({
                        "padding-top":$(".filter_box").outerHeight()+"px"
                    });
                    if($.browser.msie&&$.browser.version<7){
                        $(".filter_box").addClass("fixed_top")
                    }else{
                        $(".filter_box").css({
                            "position":"fixed",
                            "top":0
                        })
                    };
                }else{
                    $(".main_cc").css("padding-top","0px");
                    $(".filter_box").removeClass("fixed_top").removeAttr("style");

                };
            };
            //筛选多条件浮动控制
            if($(".item_box").length>0){
                ui.list_item_xy();
            };
            //页面返回顶部箭头
            if(page_t>200){
                if($(".scrollTop").length<1){
                    $("<div class='scrollTop' onclick='ui.scrollTop();'></div>").appendTo("body").css('left',[$(window).width()-960]/2+975+'px');
                    $(".scrollTop").css({
                        'bottom':$("#footer").outerHeight()+20+'px'
                    });
                }
            }else{
                $(".scrollTop").remove();
            };
        }

        //页码浮动
        ui.page_backtop_fixed();
    });

});
var table = {
    //初始化已选博主列表
    initial_weibo_list:function(){
        //清空表格已有数据
        //$(".selected_weibo_table tr.list").remove();
        //var t = $(".selected_weibo_table").attr("swls").split(",");
        //得到推广ID并将ID赋予cookie名称
        swls_value = "activity_"+$("table.dblist_table").attr("spread_id");
        var t;
        //alert(swls)
        if($.cookie(swls_value)==null){
            t="";
        }else{
            t = $.cookie(swls_value);
            if($(".selected_weibo_table").attr("swls")==""){
                $(".selected_weibo_table").attr("swls",t)
            };
        };
        for(var i=0; i<t.split(",").length; i++){
            $("input:checkbox.checkbox_id").each(function(){
                if($(this).attr("value")==t.split(",")[i]){
                    var weiboname = $(this).attr("weiboname");
                    var platform = $(this).attr("platform")+"_ico";
                    var fans = $(this).attr("popular")+" 男"+$(this).attr("p_boy")+" 女"+$(this).attr("p_girl");
                    var price = $(this).attr("price");
                    //$("<tr class='list' listid='"+t[i]+"'><td><a href=''>"+weiboname+"</a><em class='ico "+platform+"'></em></td><td>"+fans+"</td><td>￥<span class='exhibit_prices'>"+price+"</span></td><td><a class='an' onclick='table.se_weibo_recall($(this))'>删除</a><a class='an' href=''>设为指发</a></td></tr>").appendTo(".selected_weibo_table");

                    $(this).attr({
                        disabled:'disabled',
                        checked:true
                    });
                };
            });
        };
        $("input:checkbox.checkbox_id").each(function(){
            var obj = $(this).parents("tr").find("a.direct");
            if($(this).attr("disabled")=="disabled"&&$(this).is(":checked")){
                $(this).parents("tr").addClass("added_tr").removeClass("tr_highlight");

                //IE6不支持动态添加的onclick事件解决方案
                obj.html("取消");
                obj[0].onclick = function(){table.tsweibo_recall($(this));};

                //$(this).parents("tr").find("a.direct").html("取消").attr("onclick","table.tsweibo_recall($(this));");
            }else{
                $(this).parents("tr").removeClass("added_tr");

                //IE6不支持动态添加的onclick事件解决方案
                obj.html("添加");
                obj[0].onclick = function(){table.tsweibo_added($(this));};

                //$(this).parents("tr").find("a.direct").html("添加").attr("onclick","table.tsweibo_added($(this));");
            };
        });

        //计算当前已选博主的数量&价格，只有在选择博列表时才执行
        if($(".selected_weibo_table").length>0){
            ui.exhibit_prices();
        }

    },
    //从已选资源中删除
    se_weibo_recall:function(ts){
        ts.parents("tr").remove();
        var ss =[];
        $(".selected_weibo_table tr.list").each(function(){
            ss.push($(this).attr("listid"));
        });
        $(".selected_weibo_table").attr("swls",ss);
        //记录已选博主列表
       $.cookie(swls_value,ss,{path:'/'});
        $(".dblist_table").find("input:checkbox.checkbox_id").removeAttr("disabled").removeAttr("checked");
        //$(".added_tr").removeClass("added_tr");

		var spread_id = $("table.dblist_table").attr("spread_id");
		Do.getSelectedWids(spread_id,$.cookie('activity_'+spread_id),'selectedbz');

        table.initial_weibo_list();
    },
    //选择资源后赋值并进行处理
    weibo_added:function(){
        $(".selected_weibo_bar .add_to").removeClass("highlight_add_to");
        var ss = [];
        var _ss = [];
        $("input:checkbox.checkbox_id").each(function(){
            if($(this).is(":checked")){
                _ss.push($(this).attr("value"));
            }
        });
        var _swls = [];
        if($(".selected_weibo_table").attr("swls")!=""){
            _swls = $(".selected_weibo_table").attr("swls").split(",");
        };

        for(var i=0; i<_ss.length; i++){
            ss.push(_ss[i])
        };

        var dup;
        for(var i=0; i<_swls.length; i++){
            dup=false;
            for(var _i=0; _i<_ss.length; _i++){
                if(_swls[i]==_ss[_i]){
                    dup=true;
                    break;
                }
            }
            if(!dup){
                ss.push(_swls[i])
            };
        };

        $(".selected_weibo_table").attr("swls",ss);
        //记录已选博主列表
        $.cookie(swls_value,ss,{path:'/'})

        var spread_id = $("table.dblist_table").attr("spread_id");
        Do.getSelectedWids(spread_id,$.cookie('activity_'+spread_id),'selectedbz');
        table.initial_weibo_list();
    },
    //微博资源列表中添加已选
    tsweibo_added:function(ts){
        ts.parents("tr").find("input:checkbox.checkbox_id").attr({
            checked:true,
            disabled:'disabled'
        });
        table.tsweibo_add_del();
    },
    //微博资源列表中取消已选
    tsweibo_recall:function(ts){
        ts.parents("tr").find("input:checkbox.checkbox_id").attr({
            checked:false
        }).removeAttr("disabled");

        var _swls = $(".selected_weibo_table").attr("swls").split(",");//得到当前已选的博主
        var _rel = ts.parents("tr").find("input:checkbox.checkbox_id").attr("value").split(",");//得到需要取消的博主

        //对比并删除掉需要取消的值
        var ss = [];
        var delup;
        for(i=0; i<_swls.length; i++){
            delup=false;
            for(var _i=0; _i<_rel.length; _i++){
                if(_swls[i]==_rel[_i]){
                    delup=true;
                    break;
                }
            }
            if(!delup){
                ss.push(_swls[i]);
            }
        };

        $(".selected_weibo_table").attr("swls",ss);
        //记录已选博主列表
        $.cookie(swls_value,ss,{path:'/'})
        var spread_id = $("table.dblist_table").attr("spread_id");
        Do.getSelectedWids(spread_id,$.cookie('activity_'+spread_id),'selectedbz');
        table.initial_weibo_list();
    },
    //增加单条微博列表后处理
    tsweibo_add_del:function(){
        var ss = [];
        var _ss = [];
        $("input:checkbox.checkbox_id").each(function(){
            if($(this).is(":disabled")){
                _ss.push($(this).attr("value"));
            }
        });

        var _swls = [];
        if($(".selected_weibo_table").attr("swls")!=""){
            _swls = $(".selected_weibo_table").attr("swls").split(",");
        };

        for(var i=0; i<_ss.length; i++){
            ss.push(_ss[i])
        };

        var dup;
        for(var i=0; i<_swls.length; i++){
            dup=false;
            for(var _i=0; _i<_ss.length; _i++){
                if(_swls[i]==_ss[_i]){
                    dup=true;
                    break;
                }
            }
            if(!dup){
                ss.push(_swls[i])
            };
        };

        $(".selected_weibo_table").attr("swls",ss);

        //记录已选博主列表
        $.cookie(swls_value,ss,{path:'/'})

        var spread_id = $("table.dblist_table").attr("spread_id");
        Do.getSelectedWids(spread_id,$.cookie('activity_'+spread_id),'selectedbz');

        table.initial_weibo_list();
    },
    //全选
    checkAll:function(){
        var trcheck_b=$("table tr").find("input:checkbox.checkbox_id");
        trcheck_b.each(function(){
            if($(this).attr("disabled")!="disabled"){
                $(this).attr("checked", true);
            }
        });
        table.tr_selected_highlight();
        ui.add_to_highlight();
    },
    //不选择
    checkNO:function(){
        var trcheck_b=$("table tr").find("input:checkbox.checkbox_id");
        trcheck_b.each(function(){
            if($(this).attr("disabled")!="disabled"){
                $(this).attr("checked", false);
            }
        });
        table.tr_selected_highlight();
        ui.add_to_highlight();
    },
    //反选
    checkOpp:function(){
        var trcheck_b=$("table tr").find("input:checkbox.checkbox_id");
        trcheck_b.each(function() {
            if($(this).attr("disabled")!="disabled"){
                $(this).attr("checked", !$(this).attr("checked"));
            };
            table.tr_selected_highlight();
            ui.add_to_highlight();
        });
    },
    tr_hover_click:function(){
        var obj = $("table tr");
        obj.hover(function(){
            if($(this).hasClass('title')==false&&$(this).parents(".datepickerContainer,.chart_box,.tr_nohover").length==0){
                $(this).addClass('tr_hover');
            }
        },function(){
            $(this).removeClass('tr_hover');
        }).click(function(e){
            //表格中a元素点击时不会选中&取消选中本行
            //console.log(e.target);
            if(e.target.tagName!="A"){
                var tcid = $(this).find("input:checkbox.checkbox_id");
                if(tcid.attr("disabled")!="disabled"){
                    if(tcid.is(":checked")){
                        tcid.attr("checked", false);
                    }else{
                        tcid.attr("checked", true);
                    };
                };
                table.tr_selected_highlight();
                ui.add_to_highlight();
            }
        });

        obj.find("input:checkbox.checkbox_id").click(function(){
            if($(this).is(":checked")){
                $(this).attr("checked", false);
            }else{
                $(this).attr("checked", true);
            };
            table.tr_selected_highlight();
            ui.add_to_highlight();
        });

    },
    tr_selected_highlight:function(){
        $("table tr").find("input:checkbox.checkbox_id").each(function(){
            if($(this).is(":checked")&&$(this).attr("disabled")!="disabled"){
                $(this).parents("tr").addClass("tr_highlight")
            }else{
                $(this).parents("tr").removeClass("tr_highlight")
            }
        });
    }
};
var temp_obj={};
var ui = {
    //拖动slider bar
    slider_bar:function(){
        var obj = $(".bar_box");
        var index; //当前操作的索引

        var bar_w; //bar宽
        var barbox_w; //滑动元素总宽
        var bar_section; //当前元素所分段数
        var bar_leastsection; //当前元素最小段，即最小宽，以段单位来区分
        var section_w; //当前元素每段宽
        var bias; //如果有分段拖动偏差值，默认为现在每段的50%

        var star_x; //得到鼠标第一次点击的坐标
        var move_x; //得到移动坐标

        var bar_a_b; //最终得计算出的bar宽度

        var baronoff; //拖动开关

        //跟距滑动句柄leastsection值初始滑动条的宽
        $(".bar_box").each(function(){
            var s = Number($(this).find(".drag").attr("section"));  //分成N段
            var ls = Number($(this).find(".drag").attr("leastsection"));  //最小段
            var bw = $(this).find(".bar").width();  //当前bar宽
            var lsw = $(this).width()/s*ls;
            if(bw<lsw){
                $(this).find(".bar").css("width",lsw+"px");
            };
        }).mousedown(function(e){
            baronoff = true;
            //star_x = e.pageX;

            //变量重置
            index = $(".bar_box").index(this);
            //bar_w = obj.eq(index).find(".bar").width();
            barbox_w = obj.eq(index).width();
            bar_section = Number(obj.eq(index).find(".drag").attr("section"));
            bar_leastsection = Number(obj.eq(index).find(".drag").attr("leastsection"));
            section_w = barbox_w/bar_section;
            bias = barbox_w/[bar_section*2];

            click_x = e.pageX;
            bar_a_b = click_x-obj.eq(index).offset().left; //bar最终宽等于当前弹起的坐标减去元件的x坐标

            //限定bar的最小宽和最大宽
            if(bar_a_b<0){
                bar_a_b = 0;
            }else if(bar_a_b>barbox_w){
                bar_a_b = barbox_w;
            };

            if(baronoff){
                obj.eq(index).find(".bar").css("width",bar_a_b+"px");
            };
        });

        //拖动句柄调整滑动条的宽
        $(".drag").mousedown(function(e){
            //$(document.body).attr("onselectstart","return false");
            event.preventDefault();
            baronoff = true;
            star_x = e.pageX;

            //变量重置
            index = $(".drag").index(this);
            bar_w = obj.eq(index).find(".bar").width();
            barbox_w = obj.eq(index).width();
            bar_section = Number(obj.eq(index).find(".drag").attr("section"));
            bar_leastsection = Number(obj.eq(index).find(".drag").attr("leastsection"));
            section_w = barbox_w/bar_section;
            bias = barbox_w/[bar_section*2];

            $(document).mousemove(function(e_){
                move_x = e_.pageX;
                bar_a_b = move_x-star_x+bar_w; //bar最终宽等于移动的坐标-点击时记录的坐标+自身本身的宽

                //限定bar的最小宽和最大宽
                if(bar_a_b<0){
                    bar_a_b = 0;
                }else if(bar_a_b>barbox_w){
                    bar_a_b = barbox_w;
                };

                if(baronoff){
                    obj.eq(index).find(".bar").css("width",bar_a_b+"px");
                };
            });
        });
        $(document).mouseup(function(){
            //如果是有分段的bar
            if(bar_section>0){
                for(var i = 1; i<bar_section+1; i++){
                    if(bar_a_b<bias){
                        bar_a_b = 0;
                    }else if(bar_a_b+bias>=section_w*i&&bar_a_b+bias<section_w*[i+1]){
                        //console.log(bar_a_b+">="+section_w+"*"+i+")并且"+bar_a_b+"<"+section_w+"*"+i+"加1)")
                        bar_a_b = section_w*i;
                    };
                };
            };
            //如果有最设定最小段的bar
            if(bar_leastsection>0&&bar_a_b<section_w*bar_leastsection){
                bar_a_b = section_w*bar_leastsection;
            };
            if(baronoff){
                obj.eq(index).find(".bar").css("width",bar_a_b+"px");
            };
            baronoff = false;
            //移除页面禁用选择属性
            $(document.body).removeAttr("onselectstart");
        });
    },
    //判断客户端是否安装flash函数
    flashChecker:function()
    {
     var hasFlash=0;　　　　//是否安装了flash
     var flashVersion=0;　　//flash版本
     if(document.all)
     {
      var swf = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
      if(swf) {
       hasFlash=1;
       VSwf=swf.GetVariable("$version");
       flashVersion=parseInt(VSwf.split(" ")[1].split(",")[0]);
      }
     }else{
      if (navigator.plugins && navigator.plugins.length > 0)
      {
       var swf=navigator.plugins["Shockwave Flash"];
       if (swf)
       {
        hasFlash=1;
        var words = swf.description.split(" ");
        for (var i = 0; i < words.length; ++i)
        {
         if (isNaN(parseInt(words[i]))) continue;
         flashVersion = parseInt(words[i]);
        }
       }
      }
     }
     return {f:hasFlash,v:flashVersion};
    },
    //博主查看任务详细
    bloggers_task_view:function(ts,id){
        var cc = ts.parents("tr").next();
        var th = ts.parents("tr").offset().top;
        var fbh = 0;
        if($(".filter_box").length>0){
            fbh = $(".filter_box").outerHeight(true);
        };

        if(ts.html()=="任务详情"){
            ts.html("关闭查看");
            $.get('/my_ajax_orderManage/?act=taskdetail&id='+id,function(data){
                $(data).insertAfter(ts.parents("tr"));
                ts.parents("tr").next().find(".ud_box").hide().slideDown('',function(){
                    $("html,body").animate({
                        scrollTop:th-fbh
                    });
                    ui.copy_content();
                    ui.page_backtop_fixed();
                });
            });
        }else if(ts.html()=="关闭查看"){
            ts.html("任务详情");
            cc.find(".ud_box").slideUp('',function(){
                cc.remove();
                ui.copy_content();
                ui.page_backtop_fixed();
            });
        };
    },
    //跨浏览器复制内容
    copy_content:function(){
        // var obj = $(".copy_cb");
        // obj.hover(function(){
        //     var copybutton = $(this).attr("id");
        //     var aac = $("#"+$(this).attr("copytarget")).val();

        //     var clip = new ZeroClipboard.Client();
        //     clip.setHandCursor( true );
        //     clip.setText(aac);
        //     clip.glue(copybutton);
        //     clip.setCSSEffects( true );

        //     clip.addEventListener("mouseUp",function(client){
        //         ui.minitips('已成功复制到剪贴板。');
        //         client.hide();
        //     });
        // })
        var fls=ui.flashChecker();
        var s="";
        if(fls.f) {
            //document.write("您安装了flash,当前flash版本为: "+fls.v+".x");
            $(".zeroclipboard_swf").remove();
            var obj = $(".copy_cb");

            for(var i=0;i<obj.length;i++){
                var copybutton = obj.eq(i).attr("id");
                var aa = $("#"+copybutton).attr("copytarget");
                var aac;
                if($("#"+aa)[0].tagName=="A"){
                    aac = $("#"+aa).attr("href");
                }else if($("#"+aa)[0].tagName=="TEXTAREA"||$("#"+aa)[0].tagName=="INPUT"){
                    aac = $("#"+aa).val();
                }else{
                    aac = $("#"+aa).html();
                };

                var clip = new ZeroClipboard.Client();
                clip.setHandCursor( true );
                clip.setText(aac);
                clip.glue(copybutton);
                clip.setCSSEffects( true );

                clip.addEventListener("mouseUp",function(client){
                    ui.minitips('已成功复制到剪贴板。');
                });
            };
        }else{
            var obj = $(".copy_cb");
            obj.click(function(){
                if($("#"+$(this).attr("copytarget"))[0].tagName=="TEXTAREA"||$("#"+$(this).attr("copytarget"))[0].tagName=="INPUT"){
                    $("#"+$(this).attr("copytarget")).select();
                };
                alert("您使用的浏览器不支持直接复制功能，请使用鼠标右键手动复制。");
            });

            //document.write("您没有安装flash");
        };



        // var copybutton = $(this).attr("id");
        // var aac = $("#"+$(this).attr("copytarget")).val();

        // var clip = new ZeroClipboard.Client();
        // clip.setHandCursor( true );
        // clip.setText(aac);
        // clip.glue(copybutton);
        // clip.setCSSEffects( true );

        // clip.addEventListener("mouseUp",function(client){
        //     ui.minitips('已成功复制到剪贴板。');
        //     client.hide();
        // });

    },
    //弹窗标签内容切换
    pop_tabmenu:function(){
        ui.pop_tabmenu_cutover();
        var obj = $("ul.tabmenu_cutover li");
        obj.click(function(){
            obj.removeClass('current');
            $(this).addClass('current');
            ui.pop_tabmenu_cutover();
            ui.popxy();
        });


    },
    pop_tabmenu_cutover:function(){
        var obj = $("ul.tabmenu_cutover li");
        var cti = 0;
        obj.each(function(){
            if($(this).hasClass('current')){
                cti = obj.index(this);
            };
        });
        $(".pop_main_cc").hide().eq(cti).show();
    },
    //提交下拉菜单
    submit_custom_term:function(){
        alert("fdsfd")
    },
    //处理自定义输入下拉菜单
    custom_term:function(){
        $(".custom_term input[type=text]").focus(function(){
            $(".request").hide();
            $(this).parent().find(".request").show();
        })
    },
    //清空下拉菜单内容
    clear_custom_term:function(ts){
        ts.parents(".custom_term").find("input[type=text]").val("").eq(0).focus();
        //$(".request").hide();
    },
    popremove:function(){
    $(".pop_tip").remove();

    },
    //数据为空时处理db_listtitle与提示
    dblist_null:function(){
        var l = $("#main_cc table.dblist_table tr").length;
        if(l==0){
            $(".db_listtitle").hide();
        }else{
            $(".db_listtitle").show();
        };
    },
    //查看信息
    message_view:function(ts,id){
        var cc = ts.parents("tr").next();

        var th = ts.parents("tr").offset().top;
        var fbh = 0;
        if($(".filter_box").length>0){
            fbh = $(".filter_box").outerHeight(true);
        };
        if(ts.html()=="查看信息"){
            ts.html("关闭查看");
            $.get('/my_ajax_pmManage/?act=showPM&id='+id+'&r='+Math.random(),function(data){
                $(data).insertAfter(ts.parents("tr"));
                ts.parents("tr").next().find(".ud_box").hide().slideDown('',function(){
                    $("html,body").animate({
                        scrollTop:th-fbh
                    });
                    ui.page_backtop_fixed();
                });
                from.tipsEmpty();
                from.focusHig();
                ui.message_reply_verify();
                Do.setAjaxLink(".dialog_box");
                //响应回车提交信息
                $(".reply_box input.input_txt").keydown(function(e){
                    if(e.keyCode=="13"){
                        ui.message_reply_submit($(this),id);
                        $(this).val("").focus();
                    };
                });
            });
        }else if(ts.html()=="关闭查看"){
            ts.html("查看信息");
            cc.find(".ud_box").slideUp('',function(){
                cc.remove();
                ui.page_backtop_fixed();
            });
        };
    },
    //站内信息提交回复按钮处理
    message_reply_verify:function(){
        $(".reply_box input.input_txt").bind('keyup mouseup',function(){
            if($(this).val()==$(this).attr('title')||$(this).val()==""){
                $(this).parent().find("a.submit_reply").removeAttr("style");
            }else{
                $(this).parent().find("a.submit_reply").css({
                    'opacity':'1',
                    'filter':'alpha(opacity=50)'
                })
            }
        })
    },
    //站内短信提交处理
    message_reply_submit:function(ts,id){
        var text = ts.parent().find("input.input_txt");
        if(text.val()==text.attr('title')||text.val()==""){
            ui.minitips("回复内容不能为空","error");
        }else{
            $.ajax({
                type:"POST",
                url:"/my_ajax_pmManage/?act=reply&id="+id,
                data:"content="+text.val(),
                success:function(d){
                    var html = $(d);
                    html.insertBefore(ts.parent()).hide().slideDown('',function(){
                        var t =ts.parent().prev().outerHeight(true);
                        //alert(t)
                        $("html,body").animate({
                            scrollTop:page_t+t
                        });
                    });
                    ui.minitips("回复成功");

                }
            })
        }
    },
    add_group:function(tis){
        $("<li><input type='text' id='add_title' class='input_txt' size='20' name='add_title' value=''><a class='from_link' href='javascript:Do.addTitle(\""+tis.attr("t")+"\")'>添加</a></li>").insertBefore(tis.parents("li"));
        tis.parents("ul").find("input[type=text]:last").focus();
        ui.popxy();
    },
    //迷你提示
    minitips:function(s,err){
        if($("#minitips").html()){
            console.log(temp_obj)
            clearTimeout(temp_obj["time"]);
            $("#minitips").html(s).toggleClass(err);
            var top =[$(window).height()-$("#minitips").height()]/2+page_t-100;
            temp_obj["time"]=setTimeout(function(){
                $("#minitips").animate({
                    'top':top-50+'px',
                    'opacity':'0'
                },200,'',ui.removeTips);
            },800);
        }else{
            var minitip = $("<div id='minitips' class='"+err+"'>"+s+"</div>");
            minitip.appendTo("body");
            var top =[$(window).height()-$("#minitips").height()]/2+page_t-100;
            $("#minitips").css({
                'top':top+'px',
                'left':[$(window).width()-$("#minitips").width()]/2+'px',
                'opacity':'0'
            }).animate({
                'top':top+50+'px',
                'opacity':'1'
            });

            temp_obj["time"]=setTimeout(function(){
                $("#minitips").animate({
                    'top':top-50+'px',
                    'opacity':'0'
                },200,'',ui.removeTips);
            },800);
        }
    },
    removeTips:function(){
        $("#minitips").remove();
    },
    //添加至已选按钮高亮显示
    add_to_highlight:function(){
        if($(".selected_weibo_bar").find(".add_to").length>0){
            var an = $(".selected_weibo_bar").find(".add_to");
            if($("table tr").find("input:checkbox.checkbox_id[checked]").length>0){
                an.addClass("highlight_add_to")
            }else{
                an.removeClass("highlight_add_to")
            };
        }
    },
    //计算当前已选博主的数量&价格
    exhibit_prices:function(){
        //var svl = $(".selected_weibo_table").find(".exhibit_prices").length;
		/*
        var svl;
        svl = 0;
        if($(".selected_weibo_table").attr("swls")!=""){
            svl = $(".selected_weibo_table").attr("swls").split(",").length;
            //alert(svl)
        };

        //取得预算价格
        var bp = $(".selected_weibo_box").find(".budget_price").html();

        //计算总价
        var c = 0;
        $(".selected_weibo_table").find(".exhibit_prices").each(function(){
            c+=Number($(this).html());
        });
        //计算预算进度条宽&文字提示处理
        clearTimeout(temp_obj["time"]);
        temp_obj["time"]=setTimeout(function(){
            if(Number(c/bp*100)<=100){
                $(".schedule_bar div").animate({
                    "width":parseInt(c/bp*100)+"%"
                },500).css("background","#8dab6f");
                if(svl<1){
                    $(".show_details").html("已添加 <strong>"+svl+"</strong> 个微博  （预算 <strong>&#165;<span class='budget_price'>"+bp+"</span></strong> ）");
                }else{
                    $(".show_details").html("已添加 <strong>"+svl+"</strong> 个微博  （预算 <strong>&#165;<span class='budget_price'>"+bp+"</span></strong>  /  预计花费 <strong>&#165;<span class='budget_cost'>"+c.toFixed(2)+"</span></strong> ）");
                };

            }else if(Number(c/bp*100)>100){
                $(".schedule_bar div").animate({
                    "width":"100%"
                },500).css("background","#fe6767");
                $(".show_details").html("已添加 <strong>"+svl+"</strong> 个微博  （预算 <strong>&#165;<span class='budget_price'>"+bp+"</span></strong>  /  预花费 <strong>&#165;<span class='budget_cost'>"+c.toFixed(2)+"</span></strong>  /  超出 &#165;<strong id=\"outRecbudget\">"+(c-bp).toFixed(2)+"</strong> ）");
            };
        },500);
		*/
    },
    set_prices:function(s,ps){
    	$(".show_details").html(s);
  		var c=ps<100?"#8dab6f":"#fe6767";
    	$(".schedule_bar div").animate({
            "width":ps+"%"
        },500).css("background",c);
    },
    unfold_selected_weibo:function(ts){
        ts.toggleClass("current");
        if(ts.parents(".selected_weibo_box").find("dd").is(":hidden")==true){

            ts.parents(".selected_weibo_box").find("dd").show();
            if($.browser.msie&&$.browser.version<7){
                $("html,body").scrollTop(page_t+$(".selected_weibo_list").outerHeight());
            }else{
                $("html,body").animate({
                    scrollTop:page_t+$(".selected_weibo_list").outerHeight()
                });
            }

        }else{
            ts.parents(".selected_weibo_box").find("dd").hide();

            //如果拖动到底部时不作滚动调整处理
            var p = $("#footer").offset().top;
            if(page_t+window_h+20<p){
               if($.browser.msie&&$.browser.version<7){
                    $("html,body").scrollTop(page_t-$(".selected_weibo_list").outerHeight());
                }else{
                    $("html,body").animate({
                        scrollTop:page_t-$(".selected_weibo_list").outerHeight()
                    });
                }
            };
            ui.page_backtop_fixed();
        };
        ui.page_backtop_fixed();
    },
    list_item:function(ts,title,cus,pick){
        $(".list_item").removeClass("item_box_mark list_item_current");
        $(".item_box").remove();
        ts.addClass("list_item_current item_box_mark");
        $("<div class='item_box fixed'><a href='javascript://' onclick='ui.empty_item_box()' class='empty' title='清空条件'>清空</a><a href='javascript://' onclick='ui.cose_item_box()' class='cose_itembox' title='关闭选项'></a><ul class='fixed'></ul></div>").appendTo("body");

        //生成选项条数
        //var c = ts.attr("cc").split(",");
        var c=eval(ts.attr("cc"));
        for(var i=0; i<c.length; i++){
            $("<li><a class='picks' v='"+c[i]["value"]+"' href='javascript://'><em class='checkbox_ico'></em><span>"+c[i]["label"]+"</span></a></li>").appendTo(".item_box ul");
        };
        if(cus=="custom"){
            $("<li><a class='' href='javascript://' onclick='ui.item_box_customa(\"/my_ajax_clientManage/?act=fillFilter\")'><em class='custom_ico'></em>自定义</a></li>").appendTo(".item_box ul");
        }else if(cus=="more"){
            $("<li><a class='' class='current' href='javascript://'><em class='more_ico'></em>更多</a></li>").appendTo(".item_box ul");
        };
        ui.list_item_selectedcurrent();
        if(pick=="single"){
            ui.item_box_pick();
        }else{
            ui.item_box_picks();
        };
        ui.list_item_xy();
    },
    //根据当前项目的“sc”已选值给选项添加已选中样式
    list_item_selectedcurrent:function(){
        if($(".item_box_mark").length>0){
            var a = eval($(".item_box_mark").attr("sc"));
            for(var i=0; i<a.length; i++){
                $(".item_box").find("li").find("span").each(function(){
                    if($(this).html()==a[i]["label"]){
                        $(this).parent().addClass("current");
                    };
                });
            };
        };

    },
    list_item_xy:function(){
        var x = $(".filter_box").offset().left;
        var y = $(".item_box_mark").offset().top+$(".item_box_mark").outerHeight();
        $(".item_box").css({
            'left':x+'px',
            'top':y-1+'px'
        });
    },

    //清空已选条件
    empty_selected:function(ts){
        $(".list_item").attr("sc","[]");
        ui.yx();

    },
    //检查已选项
    yx:function(){
        $(".selected_term").find("dd").html("");
        //为有值的选项添加一个样式标记
        $(".list_item").each(function(){
            if($(this).attr("sc")!="[]"){
                $(this).addClass("list_item_hasavalue");
            }else{
                $(this).removeClass("list_item_hasavalue");
            };
        });
        //定义该标记为变量
        var l = $(".list_item_hasavalue");
        for(var i=0; i<l.length; i++){
            //如果当前有选项值并且无selected_term>ul时加入已选条件框架
            if($(".selected_term").find("ul").length==0){
                $("<ul></ul><a onclick='ui.empty_selected($(this))' class='empty' title='清空所有条件'>清空</a>").appendTo($(".selected_term").find("dd"));
            };
            //如果当前有选项值时加入该选项的标题
            $("<li><label>"+l.eq(i).find("span").html()+"：</label></li>").appendTo($(".selected_term").find("ul"));
            //将选项值加入
            //var c = l.eq(i).attr("sc").split(",");
            var c = eval(l.eq(i).attr("sc"));
            for (var ii=0; ii<c.length; ii++){
                $("<span><a href='javascript://' onclick='ui.del_item_box_elected($(this))' title='删除'></a><i v='"+c[ii]["value"]+"'>"+c[ii]["label"]+"</i></span>").appendTo($(".selected_term").find("li").eq(i));
            };
        };

    },
    //多选选择处理
    item_box_picks:function(){
        $(".picks").click(function(){
            //如果当前处于选中状态
            $(this).toggleClass("current");
            var vv = $(this).find("span").html();
            ui.item_box_assignment();
        })
    },
    //单选择处理
    item_box_pick:function(){
        $(".picks").click(function(){
            //如果当前是先中称职选中样式，否则即添加
            if($(this).hasClass('current')){
                $(this).removeClass("current");
            }else{
                $(this).parents("ul").find(".picks").removeClass("current");
                $(this).toggleClass("current");
            };
            var vv = $(this).find("span").html();
            ui.item_box_assignment();
        })
    },
    //删除当前已选条件
    del_item_box_elected:function(ts){
        var iex = (ts.parent().parent().index());
        if(ts.parent().parent().find("span").length==1){
            ts.parent().parent().remove();
            $(".list_item_hasavalue").removeClass("list_item_hasavalue").eq(iex).attr("sc","[]");
        };

        ts.parent().remove();

        var ss=[];
        $(".selected_term").find("li").eq(iex).find("span i").each(function(){
            ss.push("{value:'"+$(this).attr("v")+"',label:'"+$(this).html()+"'}");
        });
        $(".list_item_hasavalue").eq(iex).attr("sc","["+ss.join()+"]");
        if($(".item_box").length>=0){
            $(".item_box").find("li a").removeClass("current");
            ui.list_item_selectedcurrent();
        };
        ui.yx();
    },
    //根据当前的选项框的选项为已选重新赋值
    item_box_assignment:function(){
        var ss=[];
        //var sb="";
        $(".item_box").find("li").find("a.current span").each(function(){
            var tt = $(".item_box").find("li").find("a.current span").length;
            //$(".item_box_mark").attr("v",$(this).parent().attr("v"));
            //console.log($(this).parent().attr("v"));
            ss.push("{value:'"+$(this).parent().attr("v")+"',label:'"+$(this).html()+"'}");
        //sb+=sb?",":"";
        //sb+=$(this).html();
        });
        $(".item_box_mark").attr("sc","["+ss.join()+"]");
        ui.yx();
        Do.search();
    },
    //自定义
    item_box_customa:function(file){
        if($(".item_box .item_custom_box").length==0){
            $.get(file,function(t){
                $(t).appendTo(".item_box ");
            })
        }else{
            $(".item_custom_box").remove();
        };
    },
    //清空已选选项
    empty_item_box:function(){
        $(".item_box ul a").removeClass('current');
        ui.item_box_assignment();
    },
    //关闭多选
    cose_item_box:function(){
        $(".item_box").remove();
        $(".item_box_mark").removeClass('item_box_mark list_item_current');
    },
    //高级筛选
    high_filter_showhide:function(ts){
        if($(".high_filter").length>0){
            ts.toggleClass("current");
            if($(".high_filter").is(":hidden")){
                if($.browser.msie&&$.browser.version<7){
                    $(".high_filter").show('',function(){
                        ui.filter_box_table();
                    });
                }else{
                    $(".high_filter").slideDown('',function(){
                        ui.filter_box_table();
                    });
                };
            }else{
                if($.browser.msie&&$.browser.version<7){
                    $(".high_filter").hide('',function(){
                        ui.filter_box_table();
                    });
                }else{
                    $(".high_filter").slideUp('',function(){
                        ui.filter_box_table();
                    });
                };
            };
        }else{
            $.get("ajax_high_filter.php",function(t){
                if($.browser.msie&&$.browser.version<7){
                    $(t).insertAfter($(".filter li.row").eq(0)).hide().show('',function(){
                        ui.filter_box_table();
                    });
                }else{
                    $(t).insertAfter($(".filter li.row").eq(0)).hide().slideDown('',function(){
                        ui.filter_box_table();
                    });
                };
                ui.menu();
                ui.monospaced();
            });
            ts.addClass("current");
        };
    },
    //高级筛选时当筛选项目处于浮动时表格处理
    filter_box_table:function(){
        if($(".filter_box").css("position")=='fixed'){
            $(".main_cc").animate({
                'padding-top':$(".filter_box").outerHeight()+'px'
            })
        }
    },
    cose_pop:function(){
        $(".pop_box,.pop_bj").remove();
    },
    popbj:function(){
        $("<div class='pop_bj fixed_top'></div>").appendTo("body");
    },
    popxy:function(){
        if($.browser.msie&&$.browser.version<7){
            $(".pop_box").css({
                'left':($(window).width()-$(".pop_box").outerWidth())/2+'px',
                'margin-top':($(window).height()-$(".pop_box").outerHeight())/2+'px'
            });
        }else{
            $(".pop_box").css({
                'left':($(window).width()-$(".pop_box").outerWidth())/2+'px',
                'top':($(window).height()-$(".pop_box").outerHeight())/2+'px',
                'position':'fixed'
            });
        };
        $(".pop_bj").css({
            'width':$(window).width()+'px',
            'height':$(window).height()+'px'
        });
    },
    add_pop:function(title,w,h,content,submit,s){
        ui.popbj();
        url="";
        if(content.indexOf("/")==0 || content.indexOf(".php")>-1){
            url=content;
            content="";
        }
        $("<div class='pop_box fixed_top'><dl><dt><span class='pop_title'>"+title+"</span><a class='pop_cose'href='javascript:ui.cose_pop()'></a></dt><dd id='box' class='pop_cc'>"+content+"</dd></dl></div>").appendTo("body").hide();
        $(".pop_cc").css({
            'width':w+'px',
            'height':h+'px'
        });
        if(s!=0){
            $("<dd class='pop_submit'><ul class='submit_box'><li><button id='submit' type='button' onclick='"+submit+"' class='button blue_an'>确定</button><button type='button' onclick='ui.cose_pop()' class='button'>取消</button></li></ul></dd>").appendTo(".pop_box dl");
        };
        ui.popxy();
        $(".pop_box").show();
        if(url)
            Do.loadTo(url,"#box");

    },
    //输入智能提示
    input_associate:function(){
        $(".input_associate").keyup(function(){
            var key = $(this).val();
            ui.input_associate_run($(this),key);
        //alert(key)
        }).click(function(){
            if($(this).val()!=''){
                var key = $(this).val();
                ui.input_associate_run($(this),key);
            }
        });
    },
    input_associate_run:function(e,key){
    	vkey=$(".input_associate").attr("vkey")||"title";
        $.ajax({
            url:"/my_ajax_planManage/?act=associateUser",
            type:"post",
            data:"key="+key,
            success:function(r){
                var d=eval(r);
                var str="";
                for(var i=0;i<d.length;i++){
                	str += "<li class='associate_val'><a title='"+d[i]["title"]+"' v='"+d[i]["email"]+"'>"+d[i]["email"]+"<br>"+d[i]["nickname"]+"</a></li>";

                };
                $(".associate_mark").removeClass("associate_mark");
                $(".associate_tip").remove();
                $("<ul class='associate_tip'><li class='enter'></li>"+str+"</ul>").appendTo("body");
                e.addClass('associate_mark');
                $(".associate_tip .enter").html(e.val());
                $(".associate_tip").css({
                    'left':e.offset().left+'px',
                    'top':e.offset().top+e.outerHeight()-1+'px'
                });
                $(".associate_tip a").click(function(){
                    $(".associate_mark").val($(this).attr(vkey)).removeClass("associate_mark");
                    $(".associate_tip").remove();
                });
            }
        });

    },
    menu:function(){
        //迷你名词解释
        $(".mini_glossary_ico").click(function(){
            var text = $(this).attr("text");
            var html = $("<div class='mini_glossary'><em class='arrow_ico'></em>"+text+"</div>");

            html.appendTo("body").css({
                'top':$(this).offset().top+28+"px"
            });
            if(html.width()>200){
                html.css("width","200px");
            };
            var x;
            if($(this).offset().left<$(document.body).width()/2){
                x = $(this).offset().left-10;
                html.css("left",x+"px");
                html.find(".arrow_ico").css("left","12px");
            }else{
                x =$(document.body).width()-[$(this).offset().left+$(this).width()+10];
                html.css("right",x+"px");
                html.find(".arrow_ico").css("right","12px");
            }

        });
        //升降序切换
        $(".lifting_sort").click(function(){
            $(this).toggleClass('current_lifting_sort');
            return false();
        });
        //右上角下拉菜单
        $(".account_drop").hover(function(){
            $(this).addClass('current');
            $(this).find("dd").show();
        },function(){
            $(this).removeClass('current');
            $(this).find("dd").hide();
        });

        //内容区通用下拉菜单
        $(".drop_down").hover(function(){
            //城市选择插件
            $(this).find(".city_box").show();
            //判断下拉菜单向左还是向右显示
            var main_y = $("#main").offset().left;
            var this_y = $(this).offset().left;
            if(this_y >= main_y+$("#main").outerWidth()/2){
                $(this).find(".options").css({
                    'right':'0'
                })
            }else{
                $(this).find(".options").css({
                    'left':'0'
                })
            };
            //判断向下显示还是向上显示
            if($(this).offset().top+$(this).outerHeight()+$(this).find(".options").outerHeight()>$(".container").offset().top+$(".container").outerHeight()){
                $(this).find(".title a").css({
                    'border-top':'none',
                    'margin-top':1+'px'
                });
                $(this).find(".options").css({
                    'bottom':24+'px'
                });
            }else{
                if($(this).find(".options a").length>"0"){
                    $(this).find(".title a").css({
                        'border-bottom':'none'
                    });
                };
                $(this).find(".options").css({
                    'top':24+'px'
                });
            };
            $(this).addClass('current_drop_down');
            $(this).find(".options").show();
        },function(){
            $(this).find(".city_box").hide();
            $(this).removeClass('current_drop_down');
            $(this).find(".options").hide().removeAttr('style');
            $(this).find(".title a").removeAttr('style');
            ui.monospaced();
        });

    },
    monospaced:function(){
        //处理等宽下拉菜单与其子元素的宽
        $(".monospaced_drop_down").each(function(){
            var this_title_w = $(this).find(".title a").outerWidth();
            var this_options_w = $(this).find(".options").outerWidth();
            //alert(this_title_w+","+this_options_w);
            if(this_title_w > this_options_w){
                $(this).find(".options").css({
                    'width':this_title_w-2+'px'
                });
                $(this).find(".title a").css({
                    'width':this_title_w-28+'px'
                });
            }else if(this_title_w < this_options_w ){
                $(this).find(".title a").css({
                    'width':this_options_w-28+'px'
                });
                $(this).find(".options").css({
                    'width':this_options_w-2+'px'
                });
            }else{
                $(this).find(".title a").css({
                    'width':this_title_w-28+'px'
                });
                $(this).find(".options").css({
                    'width':this_title_w-2+'px'
                });
            };
        });

        //处理下拉菜单返回值
        $(".monospaced_drop_down .options a").click(function(){
            var this_html = $(this).html();
            var this_value = $(this).attr("v");
            $(this).parents(".drop_down").find(".title a").html("<span v=\""+this_value+"\">"+this_html+"</span><em class='ico'></em>");
            $(this).parent().hide();
        });

        //处理城市下拉菜单
        $(".city_box a").click(function(){
            var this_html = $(this).html();
            var this_value = $(this).attr("v");
            $(this).parents(".drop_down").find(".title a").html("<span v=\""+this_value+"\">"+this_html+"</span><em class='ico'></em>");
            $(this).parents(".city_box").hide();
        });
    },
    scrollTop:function(){
        $("html,body").animate({
            scrollTop:0
        });
    },
    //页码预留浮动空间
    page_void:function(){
        $(".main_cc").css({
            "padding-bottom":$(".b_fixed").outerHeight()+'px'
        })
        //alert($(".b_fixed").outerHeight())
    },
    //页码浮动处理
    page_backtop_fixed:function(){
        var p = $("#footer").offset().top;
        if(page_t+window_h+20<p){
            if($.browser.msie&&$.browser.version<7){
                //ie6兼容处理
                $(".b_fixed").addClass("fixed_bottom").css('margin-bottom','0px');
            }else{
               $(".b_fixed").css({
                    "position":"fixed",
                    "bottom":0+'px'
                });
            }
        }else{
            if($.browser.msie&&$.browser.version<7){
                //ie6兼容处理
                $(".b_fixed").addClass("fixed_bottom").css({
                    "margin-bottom":page_t+window_h-p+20+'px'
                });
                //document.title=page_t+window_h-p+20
            }else{
                $(".b_fixed").css({
                    "position":"fixed",
                    "bottom":page_t+window_h-p+20+'px'
                });
            }
        }

    },
    //处理数据表格的title宽
    dblist_table_title_w:function(){
        var titleobj = $(".dblist_table tr").eq(0).find("td")
        var titlesize = titleobj.size();
        for(var i=0; i<titlesize; i++){
            $(".db_listtitle li.row").eq(i).css({
                'width':titleobj.eq(i).width()+'px'
            });
            //IE下有可能超出宽度，则将最后一个li元素宽度减少到合适
            var a=0;
            var ap=0;
            $(".db_listtitle li.row").each(function(){
                a+=$(this).width();
                ap+=20;
                if(a-[820-ap]>0){
                    $(".db_listtitle li.row:last").css({
                        'width':$(this).width()-[a-(820-ap)]+'px'
                    })
                };
            });
        };



    },
    //载入客户列表
    load_clientlist:function(val,url){
        if(val.parents(".parent_box").next(".next_c").length>0){
            val.parents(".parent_box").next(".next_c").slideDown();
        }
        else{
            $.get(url,function(t){
                $(t).insertAfter(val.parents(".parent_box")).hide().show();
                ui.menu();
                ui.monospaced();
                ui.dblist_table_title_w();
                ui.idea_content();
                ui.ider_cc();
                ui.input_associate();
                ui.yx();

                table.tr_hover_click();
                table.tcid_t_f();

                from.tipsEmpty();
                from.focusHig();
                //from.formCheck();
                ui.datepicker();
            });
        }
    },
    //下拉显示父级指定元素后的指定内容
    slnext_c:function(val){
        val.parent(".parent_box").next(".next_c").show();
    },
    //隐藏父级元素
    parent_hide:function(val){
        val.parents(".parent_box").remove();
    },
    //阵列选项显示
    range_options:function(t,w,row,star,end,unit,step){
        step=step||1;
        var x = t.offset().left;
        var y = t.offset().top;
        var html = $("<ul class='range_options' style=width:"+w*row+"px;left:"+x+"px;top:"+y+"px;></ul>");
        for(var i=star;i<end;i+=step){
            var num=i<10?"0"+i:i;
            $("<li><a onclick='ui.b_val_cose($(this))' style=width:"+w+"px>"+num+unit+"</a></li>").appendTo(html);
        }
        html.appendTo("body");
        $(".range_mark").removeClass("range_mark");
        t.addClass("range_mark");
        var si = $(".range_options li a").length;

        //获取默认值位置
        for(var i=0; i<si; i++){
            if($(".range_options li a").eq(i).html()==t.val()){
                $(".range_options li ").eq(i).addClass('current');
            };
        };
    },
    //点击返回值并关闭阵列本身
    b_val_cose:function(val){
        //vl = val.html();
        $(".range_options").remove();
        $(".range_mark").val(val.html()).removeClass("range_mark");
    },
    //判断是否展开填写创意表单
    ider_cc:function(){
        if($("#write_ider").length>0){
            if($("#write_ider").attr("checked")){
                $(".ider_cc").slideDown();
            }else{
                $(".ider_cc").hide();
            }
        };
    },
    //创意文本长度检查
    idea_content:function(){
        $(".idea_content").bind("keyup mouseup",function(){
            var t = $(this).val();

            //取得字符长度
            function len(s){
                var reg=/[^\x00-\xff]/g,num=0;
                while(x=reg.exec(s)) num++;
                return num*2+s.length-num;
            };
            if(len(t)<=280){
                $(this).parents(".ideabox").find(".word_tip").html("还能输入 <strong>"+parseInt([280-len(t)]/2)+"</strong> 字");
            }else if(len(t)==281){
                $(this).parents(".ideabox").find(".word_tip").html("已超出 <strong>1</strong> 字");
            }else{
                $(this).parents(".ideabox").find(".word_tip").html("已超出 <strong>"+Math.round([len(t)-280]/2)+"</strong> 字");
            };
        });
    },
    //数据加载提示
    loadingTips:function(){
        $(".no_results_tip").hide();
        //loading提示加载
        $("#loadingtips").remove();
        var loadtip = $("<div id='loadingtips'>内容加载中<br>……</div>");
        loadtip.prependTo("#main_cc");

        $("#loadingtips").show();
    },
    //加载完成提示隐藏
    loadingTipsHide:function(){
        $("#loadingtips").remove();
        var l = $("#main_cc table.dblist_table tr").length;
        if(l==0){
            var c = $("<div class='no_results_tip'><strong>Sorry!</strong><br>根据当前设定条件，没找到任何结果！</div>");
            c.insertBefore("table.dblist_table");
            $(".no_results_tip").fadeIn();

        };

    },
    //日历
    datepicker:function(){
        $('.inputDate').DatePicker({
            format:'Y-m-d',
            date: [new Date(now3), new Date(now4)],
            calendars: 3,
            position: 'bottom',
            mode: 'range',
            onBeforeShow: function(){
                var dstr=$(this).val();
                var dArr=dstr.split(" 至 ");
                $('.inputDate').DatePickerSetDate(dArr,false);
                $(this).keyup(function(){
                    var dstr=$(this).val();
                    var dArr=dstr.split(" 至 ");
                    $('.inputDate').DatePickerSetDate(dArr,false);
                });
                $(".datepickerContainer .period a").click(function(){
                    $(this).parents(".datepicker").hide();
                });
            },
            onChange: function(formated){
                $('.inputDate').val(formated.join(' 至 '));
                if(formated[0]!=formated[1]){
                    Do.search();
                    $(this).hide();
                };
            }
        });
        $('.inputDate_a').DatePicker({
            format:'Y-m-d',
            date: [new Date(now3), new Date(now4)],
            calendars: 1,
            position: 'bottom',
            mode: 'single',
            onBeforeShow: function(){
                $('.inputDate_a').DatePickerSetDate($('.inputDate_a').val(), false);
                $('.datepickerContainer .period').hide();
            },
            onChange: function(formated){
                $('.inputDate_a').val(formated);
                $(this).hide();
            }
        });
        var now3 = new Date();
        now3.addDays(-4);
        var now4 = new Date()
    }
};

var from = {
    tipsEmpty:function(){
        //重写IE6 textarea不支持value
        $("input:text, input:password, textarea").each(function(){
            if($(this).val()==''){
                $(this).val($(this).attr("title"));
            }
        }).focus(function(){
            if($(this).val()==$(this).attr("title")){
                $(this).val('');
            }
        }).blur(function(){
            if($(this).val()==''){
                $(this).val($(this).attr("title"));
            }
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
    },
    focusHig:function(){
        //表单焦点高亮提示
        if ($.browser.msie){
            $("input:text, textarea, input:password").focus(function(){
                $(this).addClass("input_focus");
            });
            $("input:text, textarea, input:password").blur(function(){
                $(this).removeClass("input_focus");
            });
        }
    },
    formCheck:function(parent){
        //表单验证插件，更多表单验证插件Validform介绍说明见其官网validform.rjboy.cn
        parent=parent||"";
        //console.log($(parent+".validform"));
        $(parent+".validform").Validform({
            tiptype:2,
            ajaxPost:true,
            datatype:{
                "qq":/^[1-9](\d{4,13})$/,
                "weibourl":/^http\:\/\/weibo.com\/\S*$|^http\:\/\/www.weibo.com\/\S*$|^http\:\/\/t.qq.com\/\S*$/,
                "sinaweibo":/^http\:\/\/weibo.com\/\S*$|^http\:\/\/www.weibo.com\/\S*$/,
                "qqweibo":/^http\:\/\/t.qq.com\/\S*$/
            },
            callback:function(data){
                //返回数据data是json格式，{"info":"demo info","status":"y"}
                //info: 输出提示信息;
                //status: 返回提交数据的状态,是否提交成功。如可以用"y"表示提交成功，"n"表示提交失败，在ajax_post.php文件返回数据里自定字符，主要用在callback函数里根据该值执行相应的回调操作;
                //你也可以在ajax_post.php文件返回更多信息在这里获取，进行相应操作；

                //这里执行回调操作;
                if(data.status=="y"){
                    eval(data.info);
                }
            }
        });
    }

};


var fan_ui={

    minitips:function(s,err){
        if($("#minitips").html()){
            clearTimeout(temp_obj["time"]);
            $("#minitips").html(s).toggleClass(err);
            var top =[$(window).height()-$("#minitips").height()]/2-100;
            temp_obj["time"]=setTimeout(function(){
                $("#minitips").animate({
                    'top':top-50+'px',
                    'opacity':'0'
                },200,'',fan_ui.removeTips);
            },800);
        }else{
            var minitip = $("<div id='minitips' class='"+err+"'>"+s+"</div>");
            minitip.appendTo("body");
            var top =[$(window).height()-$("#minitips").height()]/2-100;
            $("#minitips").css({
                'top':top+'px',
                'left':[$(window).width()-$("#minitips").width()]/2+'px',
                'opacity':'0'
            }).animate({
                'top':top+50+'px',
                'opacity':'1'
            });

            temp_obj["time"]=setTimeout(function(){
                $("#minitips").animate({
                    'top':top-50+'px',
                    'opacity':'0'
                },200,'',fan_ui.removeTips);
            },800);
        }
    },
    removeTips:function(){
        $("#minitips").remove();
    }
};

/*兼容*/
var UI={
    //显示窗口 w:宽度 t:标题 html:内容 fn:确定按钮执行函数 h高度
    showWindow:function(w,t,html,fn,h){
    	w=w||400;
    	h=h||"";
        ui.add_pop(t,w,h,html,fn);
    },
    hideWindow:function(){
        ui.cose_pop();
    }
}