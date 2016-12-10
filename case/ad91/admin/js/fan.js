$(function(){	
        fan_ui.setFrame();
        fan_form.tipsEmpty();//表单输入提示
        fan_form.focusHig();//表单焦点高亮
        fan_form.formCheck();//表单验证
	//窗口页面框架	
	$(window).resize(pop_xy);
        $(window).resize(fan_ui.setFrame);
        fan_ui.tr_hover();
        fan_ui.highlight_table();
        fan_ui.click_first(); 
        
        //隐藏与显示侧边栏
        //SetCookies 
        (function(){
        function SetCookie(c_name,value,expiredays){
        var exdate=new Date();
        exdate.setDate(exdate.getDate()+expiredays);
        document.cookie=c_name+"="+escape(value)+((expiredays==null)?"":";expires="+exdate.toGMTString())+";path=/"; 
        //如果你希望每个页面都有个独立的 Cookies 设置的话请去掉+";path=/"，这样的话leeiio.me/xxx/ 和leeiio.me/yyy/ 的侧边栏状态都将是独立的           
        }
        window['RootCookies'] = {};
        window['RootCookies']['SetCookie'] = SetCookie;
        //JavaScript 的命名空间，假使你已有一个 SetCookie 的函数的话将不会与之冲突，通过 RootCookie.SetCookie() 调用
        })();
        
	$("#away_side").click(function(){
		RootCookies.SetCookie('show_sidebar', 'no', 7);  
                $("#side").hide();
		$("#miniside").show();
		fan_ui.setFrame();
	});
	$("div").click(function(){
	$(this).length
	})
	
	$("#start_side").click(function(){
		RootCookies.SetCookie('show_sidebar', 'no', -7); 
                $("#miniside").hide();
		$("#side").show();
		fan_ui.setFrame();
	});
        
        //提交bug表单窗口记录
        $(".away_bugbox").click(function(){
            RootCookies.SetCookie('away_bugbox', 'no', 7);
            $(this).parent("#bug_collect").hide();
            $("#minibug_collect").show();
        });
        $("#minibug_collect").click(function(){
            RootCookies.SetCookie('away_bugbox', 'no', -7);
            $(this).hide();
            $("#bug_collect").show();
        });
        
        
        //Get cookies Value  获取cookies的值
        var cookies = document.cookie.split("; ");
        function GetCookieValue(cookieName) {
            var ret = null;
            for (var i = 0; i < cookies.length; i++) {
                var leeiiocookies = cookies[i].split("=");
                if (cookieName == leeiiocookies[0]) {
                    ret = unescape(decodeURI(leeiiocookies[1]))
                }
            }
            return ret
        }
        //判断cookies的值
        if ('no' == GetCookieValue('show_sidebar')){
            $("#side").hide();
            $("#miniside").show();
            fan_ui.setFrame();
            //让侧边栏隐藏
        };
        //判断提交bug表单窗口cookie
        if ('no' == GetCookieValue('away_bugbox')){
            $("#bug_collect").hide();
            $("#minibug_collect").show();
        };
        
        //列表栏回车响应搜索
        $("input[id='keyword']").focus(function(){
            if (this.addEventListener) {//如果是非IE浏览器
                this.addEventListener("keypress", submitsearch, true);
            }else {
                this.attachEvent("onkeypress", submitsearch);
            }

            function submitsearch(evt){
                //alert("firefox");                
                if (evt.keyCode == 13) {
                    Do.search();//提交查找
                }
            }
        });
		
		
	//筛选栏下拉菜单
	$(".drop_down,.filter_downlist").hover(function(){
			if($(this).find(".options").css("display")=="none"){
				$(this).find(".options").show();
				}
		},function(){
				$(this).find(".options").hide();
			
			
	});
        
	//表格全选下拉菜单定义
	$(".click_select_value").hover(function(){
                    $(this).parents(".click_drop_down").find(".options").show();
		});
	$("ul.options > li").click(function(){
                $(this).parents(".click_drop_down").find(".click_select_value").html($(this).html());
                $(this).parent(".options").hide();
                
	});
        $(document).mouseup(
            function(){
                $(".click_drop_down").find("ul.options").hide();
            }
        );
            


			
	fselect_w();
	function fselect_w(){
		var fselect=$(".drop_down");
		fselect.each(function(){
			var fselect_value=$(this).find(".value");
			var fselect_options=$(this).find(".options");
			if(fselect_value.innerWidth()>fselect_options.innerWidth()==true){
				fselect_options.css({
					'width':fselect_value.innerWidth()+'px'
					
					})
				
				}else{
					fselect_value.css({
						'width':fselect_options.innerWidth()-34+'px'
						})
					}
		});
	};
			
	
	//将点击菜单中值赋予到选项中
	$("ul.options li").click(function(){
		$(this).parents("li").find(".value").html($(this).html());
		$(this).parents("li").find("ul").hide();
		fselect_w();
	});
        
	
	
	//下拉跳转菜单，例如后台右上角的设置选项
	$(".drop").hover(
		function(){
			$(this).find("ul").slideDown("fast");
			$(this).find(".setting").addClass("current");
			},
		function(){
			$(this).find("ul").hide();
			$(this).find(".setting").removeClass("current");
			}
	);
	
	
	//侧边菜单栏菜单控制
	$(".item_list").find(".item").click(function(){
		if($(this).parent().find("ul").css("display")=="none"){
			$(this).parent().find("ul").show();
			$(this).parent().removeClass("away_list");
			}else{
				$(this).parent().find("ul").hide();
				$(this).parent().addClass("away_list");
				}
		
		}
	);
	
        //组数据点击展开表格
        $(".group_datatable").find(".group_name").click(function(){
            if($(this).parent().parent().find("tr").first().nextAll().css("display")=="none"){
                $(this).parent().parent().find("tr").first().nextAll().show();
                $(this).find(".group_ico").addClass("group_away");
                $(this).parents(".group_datatable").siblings().find(".group_ico").removeClass("group_away");
                $(this).parents(".group_datatable").siblings().find(".group_line").hide();
            }else {
                $(this).parent().parent().find("tr").first().nextAll().hide();
                $(this).find(".group_ico").removeClass("group_away");

            }    
        });
	
	//弹窗控制
	pop_xy();
	function pop_xy(){
		$(".pop_box").css({
			'left':($(window).width()-$(".pop_box").width())/2+'px',
			'top':($(window).height()-$(".pop_box").height())/2+'px'
			})
	};
	
       //网银支付显示银行
       $("input:radio[name=payment]").click(function(){
           $(this).attr("id")=="chinabank"?$("#chinabank_box").show():$("#chinabank_box").hide();
       });
       
       $("input:radio[name=payment]").each(function(){
           if($(this).attr("checked") && $(this).attr("id")=="chinabank")
               $("#chinabank_box").show();
       });
       $(".effecta").click(function(){
           var aaw = $(this).parent().parent().width();
           var aal = $(this).parent().parent().offset().lef;
           var aat = $(this).parent().parent().offset().top;
           $(".effectlist").css({
               'width':aaw+'px',
               'left':aal+'px',
               'top':aat+'px'
           });
           $(".effectlist").fadeIn();
           fan_ui.fdownlistwauto();
       });
});


//临时变量
var temp_obj={};
var fan_ui={
    //重设框架大小
    setFrame:function(){
        var header_h=$("#header").outerHeight();  //获取header高度
        var window_w=$(window).width();  //获取窗口宽度
        var window_h=$(window).height();  //获取窗口高度
        var body_w=$(document.body).width();
        var side_w=$("#side").outerWidth();  //获取侧边框架宽度
        var footer_h=$("#footer").outerHeight();  //获取底部框架高度
        var miniside_w=$("#miniside").outerWidth();  //获取迷您侧边框架宽度
        var main_h=window_h-header_h-footer_h-10;
        $("#main_top_left").css({
           'width':body_w-side_w-255-30+'px',
           'float':'left'
        });
        $("#float_bj").css({
                'height':window_h+'px'
        });
		
        //取得侧边栏的高度值
        $("#side,#miniside").css({
                'height':window_h-header_h+'px'
        });

        //取得主框架的高度值
        $("#main").css({
                'height':main_h+'px'
        });
			
        //判断迷你侧边栏是否显示，并根据是否显示改变主框架与底部框架的大小
        if ($("#miniside").is(":visible")==false){
            $("#main").css({
                'width':body_w-side_w-20+'px'
            });
            $("#footer").css({
                'width':body_w-side_w-10+'px',
                'left':side_w+'px'
            });
            var main_mclw = $("body").width()-side_w;
        }else{
            $("#main").css({
                'width':body_w-miniside_w-20+'px'
            });
            $("#footer").css({
                'width':body_w-miniside_w-10+'px',
                'left':miniside_w+'px'
            });
            var main_mclw = $("body").width()-miniside_w;
        }
			
        //主框架内容区域高度及位置定义
        var main_top_h=$("#main_top").outerHeight(true);
        var main_bottom_h=$("#main_bottom").outerHeight(true);
        var side_preview_w=$("#side_preview").outerWidth(true);
        var main_top_left_h=$("#main_top_left").outerHeight(true);
        var pagelist_h=$(".pagelist").outerHeight();
        var sude_preview_h=main_h-main_top_h-main_bottom_h-10-22;
        $("#main_cc").css({
            'height':main_h-main_top_h-main_bottom_h-pagelist_h-10+'px'
        });
        
        $(".relativebox").css({
            'height':main_h-main_top_h-main_bottom_h-pagelist_h-10+'px'
        });
        $("#main_cc_left").css({
           'width':main_mclw-side_preview_w-30+'px',
           'height':main_h-main_top_h-main_bottom_h-main_top_left_h-pagelist_h-10+'px',
           'float':'left'
        });
        $("#side_preview").css({
            'height':sude_preview_h+'px'
        });
        $("#side_preview_cc").css({
           'height':sude_preview_h-$("#side_preview_top").outerHeight(true)+'px'
        });
        $("#pagelist_left").css({
            'width':body_w-side_w-side_preview_w-22+'px'
        });
    },
    //查看效果弹窗列表下拉菜单宽度自动调整
    fdownlistwauto:function(){
        var fdownlist =$(".filter_downlist");
        fdownlist.each(function(){
            var fdownlist_value=$(this).find(".value");
            var fdownlist_options=$(this).find(".options");
            if(fdownlist_value.outerWidth()>fdownlist_options.outerWidth()==true){
                fdownlist_options.css({
                    'width':fdownlist_value.outerWidth()-2+'px'
                })
            }else{
                fdownlist_value.css({
                    'width':fdownlist_options.outerWidth()-37+'px'
                })
            }

        });
    },
    coseEffectPop:function(){
      $(".effectlist").hide();
    },
    tr_hover:function(){
        var tabletr=$(".data_table").find("tr");
        tabletr.hover(function(){
                $(this).addClass("hover");
                },function(){
                        $(this).removeClass("hover");
                        }
        );
    },
    highlight_tr:function(){
        $("input[@type=checkbox]:checked").parent().parent().addClass("select");//选中的行加高亮样式
        $("input[@type=checkbox]:not(:checked)").parent().parent().removeClass("select");//未选中的行移除高亮样式
    },
    highlight_table:function(){
        //除了表格的第一行外，点击选择否则反选
        var tabletr=$(".data_table").find("tr");
        tabletr.first().nextAll().click(function(){
                var trcheck_a=$(this).first().find("td").find("input:checkbox");
                if(trcheck_a.is(":checked")){
                        trcheck_a.attr("checked", false);
                        }else{
                                trcheck_a.attr("checked", true);
                                }
                        fan_ui.highlight_tr();
        });    
    },
    loadingTips:function(){
      var loadtip = $("<div id='loadingtips'>数据加载中……</div>");
      loadtip.appendTo("body");
    },
    //加载完成调用隐藏
    loadingTipsHide:function(){
        setTimeout(function(){
         $("#loadingtips").fadeOut();
      },100);
      setTimeout(function(){
          $("#loadingtips").remove();
      },150);
    },
    minitips:function(s,err){
      if($("#minitips").html()){
          clearTimeout(temp_obj["time"]);
          $("#minitips").html(s).toggleClass(err);
          var top =[$(window).height()-$("#minitips").height()]/2-100;
          temp_obj["time"]=setTimeout(function(){
                $("#minitips").animate({'top':top-50+'px','opacity':'0'},200,'',fan_ui.removeTips);
          },800);
      }else{
            var minitip = $("<div id='minitips' class='"+err+"'>"+s+"</div>");
            minitip.appendTo("body");
            var top =[$(window).height()-$("#minitips").height()]/2-100;
            $("#minitips").css({
                'top':top+'px',
                'left':[$(window).width()-$("#minitips").width()]/2+'px',
                'opacity':'0'
            }).animate({'top':top+50+'px','opacity':'1'});

            temp_obj["time"]=setTimeout(function(){
                $("#minitips").animate({'top':top-50+'px','opacity':'0'},200,'',fan_ui.removeTips);
            },800);
      }
    },
    removeTips:function(){
        $("#minitips").remove();
    },
    click_first:function(){
        var trcheck_b=$(".data_table").first().find("td").find("input:checkbox");
        trcheck_b.click(function(){
                if($(this).is(":checked")){
                        $(this).attr("checked", false);
                        }else{
                                $(this).attr("checked", true);
                                }
                        fan_ui.highlight_tr();
        }); 
    },
    checkAll:function(){
        var trcheck_b=$(".data_table").first().find("td").find("input:checkbox");
        trcheck_b.attr("checked", true);
        fan_ui.highlight_tr();
    },
    checkNO:function(){
        var trcheck_b=$(".data_table").first().find("td").find("input:checkbox");
        trcheck_b.attr("checked", false);
        fan_ui.highlight_tr();
    },
    checkOpp:function(){
        var trcheck_b=$(".data_table").first().find("td").find("input:checkbox");
        trcheck_b.each(function() {
                $(this).attr("checked", !$(this).attr("checked"));
                fan_ui.highlight_tr();
        });
    },
    showIndustry:function(){
        $(".industry_list").show();
        fan_ui.setFrame();
    },
    hideIndustry:function(){
        $(".industry_list").hide();
        fan_ui.setFrame();
    }
};

var fan_form={
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
        
        $("input:text, textarea, input:password").focus(function(){
            $(this).addClass("input_focus"); 
        }).focusout(function(){
            $(this).removeClass("input_focus"); 
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
    inputTips:function(){
        $(".input_tips").keyup(function(){
            var key=$("#email").val();
            $.ajax({
                url:"/my_ajax_userManage/?act=userListJson",
                type:"post",
                data:"key="+key,
                success:function(r){
                    var d=eval(r);
                    var str="";
                    for(var i=0;i<d.length;i++)
                        str+="<li><a href='javascript:fan_form.setEmail(\""+d[i]["email"]+"\")'>"+d[i]["email"]+"<br />"+d[i]["nickname"]+"</a></li>";
                    $(str).appendTo(".input_tips_box");
                }
            });
            if(!$(".input_tips_box").html()){
                $("<ul class='input_tips_box'><li><span>请选择充入帐户</span></li><li><span>"+key+"</span></li></ul>").appendTo("body");
            }else{
                $(".input_tips_box").html("<li><span>请选择充入帐户</span></li><li><span>"+key+"</span></li>");
            }
            var itbl=$(this).offset().left;
            var itbt=$(this).offset().top+$(this).outerHeight(true)-1;
            $(".input_tips_box").css({
               'left':itbl+'px',
               'top':itbt+'px'
            });
        })
       $(".input_tips").focusout(function(){
          //$(".input_tips_box").remove(); 
       });
       $(document.body).click(function(){
           $(".input_tips_box").remove();
       });
    },
    setEmail:function(o){
        $("#email").val(o);
        $(".input_tips_box").remove();
    },
    formCheck:function(){
        //表单验证插件，更多表单验证插件Validform介绍说明见其官网validform.rjboy.cn
	$(".validform").Validform({
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


    	var initLayout = function() {
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
			},
			onChange: function(formated){
				$('.inputDate').val(formated.join(' 至 '));
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
			},
			onChange: function(formated){
				$('.inputDate_a').val(formated);
                                
			}
		});
		var now3 = new Date();
		now3.addDays(-4);
		var now4 = new Date()
	
	};
	EYE.register(initLayout, 'init'); 