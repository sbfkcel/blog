$(function(){
    from.tips();
    //前台右上角下拉菜单
    $("dl.account_drop").hover(function(){
        $(this).parent().find("dd").show();
        $(this).find("dt").addClass('current');
    },function(){
        $(this).parent().find("dd").hide();
        $(this).find("dt").removeClass('current');
    });
    
    //首页幻灯片
    /*
    $(".home_banner").cycle({ 
        fx:'fade',
        pager:'.home_btn',
        pagerAnchorBuilder: function(idx, slide) {
            return '<a href="#"></a>'; 
        },
        before:onBefore,
        after:onAfter 
    });
    */
    $(".home_banner").cycle({ 
        fx:'fade',
        pager:'.home_btn',
        timeout:8000,
        pagerAnchorBuilder: function(idx, slide) {
            return '<a></a>'; 
        },
        before:ui.onBefore,
        after:ui.onAfter
    });
    
    //常见问题
    $(".faq_list h4").click(function(){
        if($(this).nextAll().is(":hidden")){ 
            $(this).parents(".faq_list").find("li").removeClass('current');
            $(this).parents(".faq_list").find(".a").hide();
            $(this).nextAll().slideDown();
            $(this).parents("li").addClass('current');
        }else{
            $(this).nextAll().slideUp();
            $(this).parents("li").removeClass('current');
        };
    });
    
    //搜索表单动画
    $(".searchfrom > .search_txt").focus(function(){
        $(this).animate({width:230+'px'},"slow")
    }).focusout(function(){
        $(this).animate({width:150+'px'},"slow")
    });
    
    //首页微博分析数据展示
    var scrtime;
    $(".rolling_data").hover(function() {
        clearInterval(scrtime);
    },function() {
        scrtime = setInterval(function() {
            var $ul = $(".rolling_data");
            var liHeight = $ul.find("li:last").outerHeight(true);
            $ul.animate({
                marginTop: liHeight + "px"
            },1000,
            function() {
                $ul.find("li:last").prependTo($ul); 
                $ul.find("li:first").hide();
                $ul.css({
                    marginTop:0
                });
                $ul.find("li:first").fadeIn();
            });
        },5000);
    }).trigger("mouseleave");
    
    //前台侧边栏&返回顶部箭头
    var side_t;
    var side_l;
    if($("#reside").length != 0){
        side_t = $("#reside").offset().top;
        side_l = $("#reside").offset().left;
    };
    $(window).scroll(function(){
        var page_t = $(document).scrollTop();
        if(page_t > 200){
            if($(".scrollTop").length==0){
                $("<div class='scrollTop fixed_bottom' onclick='ui.scrollTop();'></div>").appendTo("body").css({
                    'left':[$(window).width()-960]/2+959+'px',
                    'bottom':'50px'
                }).animate({
                    'opacity':'1',
                    'bottom':'120px'
                },100);
            };
        }else{
            $(".scrollTop").remove();
        };
       if(page_t >= side_t){
            if($.browser.msie&&$.browser.version<7){
                $("#reside").addClass("fixed_top");
            }else{
              $("#reside").css({
                    'position':'fixed',
                    'top':'0px'
                });  
            };   
        }else{
             $("#reside").removeClass("fixed_top").removeAttr("style");
        };
    });
});
var ui={
  scrollTop:function(){
      $("html,body").animate({scrollTop:0});
  },
  pop_xy:function(){
      $(".popbox").css({
          'left':($(window).width()-$(".popbox").outerWidth())/2+'px',
          'top':($(window).height()-$(".popbox").outerHeight())/2+'px'
      });
  },
  pop_bj:function(){
    $("<div class='popbj'></div>").appendTo("body");  
  },
  pop_feedback_show:function(){
    ui.pop_bj();
    $("<dl class='popbox'><dt><span class='title'>反馈建议</span><a href='javascript://'onclick='ui.cose_pop();'class='cosepop'></a></dt><dd class='pop_cc'><div class='pop_explain'>欢迎您提出产品的使用感受和建议！</div><ul class='pop_from'><li class='fixed'><label class='input_label'for=''>标题：</label><input class='input_txt'type='text'name=''id=''style='width:250px;'/><span class='Validform_checktip'></span></li><li class='fixed'><label class='input_label'for=''>反馈内容：</label><textarea class='textarea_a'name=''id=''cols='35'rows='5'style='width:250px;'></textarea><span class='Validform_checktip'>详细说明</span></li><li class='fixed'><label class='input_label'for=''>联系邮箱：</label><input class='input_txt'type='text'name=''id=''style='width:250px;'/><span class='Validform_checktip'>*以便与您联系</span></li></ul></dd><dd class='pop_submit fixed'><button class='aid_b button'onclick='ui.cose_pop();'>取消</button><button class='submit_b button' onclick=''>确定</button></dd></dl>").appendTo("body").fadeIn('fast');
    ui.pop_xy();
  },
  cose_pop:function(){
      $(".popbox,.popbj").hide().remove();
  },
  onBefore:function(){
      if($.browser.version && $.browser.version<9){          
      }else{
          $("span.img").each(function(){
              var cln = $(this).index();
              $(this).removeClass("img_load"+cln);
          });
      };
  },
  onAfter:function(){
      if($.browser.version && $.browser.version<9){      
      }else{
          $("span.img").each(function(){
              var cln = $(this).index();
              $(this).addClass("img_load"+cln);
          });
      };
      ui.rtj();
  },
  rtj:function(){
      var bannerval = $("#banner_val").val();
      for(var i=0;i<bannerval.length;i++){
          $(".usernumber li").eq(i).find("em").animate({
              'top':'-'+52*bannerval.charAt(i)+'px'
          },1200);
      };
  }
};

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
        
        //IE浏览器表单焦点提示处理
        if($.browser.msie){
            $("input:text, textarea, input:password").focus(function(){
                $(this).addClass("input_focus"); 
            }).focusout(function(){
                $(this).removeClass("input_focus"); 
            }); 
        };

    }

};
