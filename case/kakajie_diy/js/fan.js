var tmp;
//var cookiename = 'show';
var promocookiename = 'promoshow';
var codeprice = 0;

$(function(){
    //如果订单已经有优惠码，修改订单时减去优惠价
    if ($("#codeprice").length > 0){
        codeprice = $("#codeprice").val();
    };
    
    //首页幻灯片
    $("#home_banner").cycle({ 
        fx:'fade',
        pager:'#home_btn',
        pagerAnchorBuilder: function(idx, slide) {
            return '<a href="#"></a>'; 
        },
        before:onBefore,
        after:onAfter 
    });
    
    //微博达人
    $(".weibo_figurebox").cycle({ 
        fx:'scrollUp',
        pager:'.figurebtn_box',
        activePagerClass:'current',
        speed:'600',
        pagerAnchorBuilder: function(idx, slide) {
            return '<a><em></em></a>'; 
        }  
    });
    
    //首页滑动按钮
    $("span.star").hover(function(){
        $(this).animate({
            width:'235'
        },200);
    },function(){
        var staran = $(this);
        setTimeout(function(){
            staran.animate({
                width:'201'
            },50);   
        },0);
    });
    
    //右上角导航菜单
    if($("#my_box ul.drop_box").length>0){
        $("#my_box").hover(function(){
            $(this).addClass("currnet_mybox");
            $(this).find(".drop_box").show();
        },function(){
            $(this).removeClass("currnet_mybox");
            $(this).find(".drop_box").hide();
        });
    };
    
    //确认定制增减订单
    $(".quantity input[value='-']").click(function(){
        var oiz = $(this).parent().find("input[type='text']").val();
        var min_quantity = $(this).parent().find("input.[type='text']").attr("min_quantity");
        oiz--;
        $(this).parent().find("input[type='text']").val(oiz);
        if($(this).parent().find("input.[type='text']").val()<min_quantity){
            $(this).parent().find("input[type='text']").val(min_quantity);
        };
        //配件赠送提示
        againkaktips();
    });
    $(".quantity input[value='+']").click(function(){
        var oiz = $(this).parent().find("input[type='text']").val();
        oiz++;
        $(this).parent().find("input[type='text']").val(oiz);
        //配件赠送提示
        againkaktips();
    });
    $(".quantity input[type='text']").keyup(function(){
        var oiz = $(this).val();
        var min_quantity = $(this).attr("min_quantity");
        if(/[^\d]/.test(this.value)){
           $(this).val(tmp);
        }else if ($(this).val()<min_quantity){
            $(this).val(min_quantity);
        };
        tmp=$(this).val();
        //修改价格
        price_vary($(this));
        totalprice();
        //配件赠送变更
        sendfitting();
        //配件赠送提示
        againkaktips();
    }).focus(function(){
        tmp=$(this).val();
    });
    
    //修改卡卡街数量改变价格
    $(".quantity input[value='-'],.quantity input[value='+']").click(function(){
        //修改价格
        price_vary($(this));
        totalprice();
        //配件赠送变更
        sendfitting();
    });
    
    
    //贺卡显示
    $(".to_give dd").click(function(){
        var i = $(this).index();
        if(i>1){
            $(".reeting_box").show();
            $(".reeting_box").find(".reeting").css({
                'background':'url(/img/reeting'+(i-1)+'.png) no-repeat'
            });
        }else{
            $(".reeting_box").hide();
        };
    });
    
    //快递发送方式
    $(".send_mode dd").click(function(){
        $("input[name='postage']").attr('checked', false);
        if($(this).attr('title')=='货到付款'){
            $("li.no_to_pay").hide();
            $("li.to_pay").show();
            $("input[name='postage'][value='sfmoney']").attr('checked', true);  
        }else{
            $("li.no_to_pay").show();
            $("li.to_pay").hide();
            $("input[name='postage'][value='yt']").attr('checked', true);
        };
        totalprice();
    });

    //支付切换
    $("input[name=payment]").click(function(){
        if($(this).attr('title')=='快捷支付'){
            $("ul.bank_box").show()
        }else{
            $("ul.bank_box").hide()
        };
    });
  
    toggle_menu();
    initializeOrder();
    sendfitting();
    tipsEmpty();
    addtoenvelop();
    fittingshow();
    h_banner();
    
    $(window).scroll(function(){
        promocodexy();
    })
    //窗口改变执行
    $(window).resize(function(){
       //popbox(); 
       h_banner();
       promocodexy();
    });

   totalprice();
   resetpostage();
});
//更改快递计算邮费
function resetpostage(){
    $("input[type='radio'][name='postage']").click(function(){
        totalprice();
    })
};
//diy页离开警告
function escwarn(){
    $(window).bind('beforeunload',function(){
        return '您的修改内容还没有保存，您确定离开吗？';
    });
};
//diy页解除离开警告
function escrwarn(url){
    $(window).unbind('beforeunload');
    if(url) location.href=url;
};
//卡库添加至信封
function addtoenvelop(){  
    $("a.addtoenvelop").click(function(){
        var o=$(this);
        var id=o.attr("v");
        $.ajax({
            url:"/my_setOrder/?act=add&id="+id,
            type:"get",
            success:function(d){
                var trl = o.parents("tr").offset().left;
                var trt = o.parents("tr").offset().top;
                var trw = o.parents("tr").width();
                var i = $("strong.kakaenvelop").html();
                o.parents("tr").css({
                    'background':'white',
                    'position':'absolute',
                    'left':trl+'px',
                    'top':trt+'px',
                    'width':trw+'px'
                }).animate({
                    'opacity':'-=0.9',
                    'width':'-=750',
                    'height':'-=65',
                    'left':'+=650',
                    'top':'120'
                },500);
                setTimeout(function(){
                o.parents("tr").remove();
                },501);
                setTimeout(function(){
                    if($(".order_table tr.list").find("td.korderimg").index()<1){
                        location.href="/my_orderVerify";
                    };
                },502);
                i++;
                $("strong.kakaenvelop").html(i);
            }
        });
    });
};

//表单title提示
function tipsEmpty(){
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
};

//配件赠送计算
function sendfitting(){
    var sfg = $(".order_table tr.list").find("input.kaka_orders")
    var kon = sfg.index();
    var i = 0;  //订单条数
    var kq = 0; //订单数量

    sfg.each(function(){
        if(i<kon){
            kq+=parseInt(sfg.eq(i).val());
        };
        i++;
    });
    
    $("#giftsbag_box").find("strong.quantity").html(kq);
    var boxq;
    //买3免运费+送礼盒
    if(kq>=3){
        boxq = 1;
        if($("li#freeexpress_box").length>0){
        }else{
            $("<li id='freeexpress_box' class='fitting_box'><!--<input type='radio' class='radio_a' name='postage' postage='0' id='freeexpress' />--><label for='freeexpress'>免邮</label><label for='freeexpress'><img src='/img/fitting_yt.png'/></label><label for='freeexpress'>圆通快递（赠品）</label></li>").prependTo("div.handsel ul");
            $("<li id='giftsbox_box' class='fitting_box'><!--<input type='checkbox' class='radio_a' id='giftsbox' />--><label for='giftsbox'>盒子</label><label for='giftsbox'><img src='/img/fitting_02.png'/></label><label for='giftsbox'><strong>卡卡街</strong>创意盒子 <strong class='quantity'>"+boxq+"</strong> 件（赠品）</label></li>").appendTo("div.handsel ul");
        };
        $("input[name='postage'][id='yt']").attr('postage','0').parent().find("span.postage strong").html(0);
    }else{
        $("#freeexpress_box,#giftsbox_box").remove();
        $("input[name='postage'][id='yt']").attr('postage','10').parent().find("span.postage strong").html(10); 
    };
    totalprice();
    //买6盒
    if(kq>=6){
        boxq = 2;
        if($("li#giftsbag_box0").length>0){  
        }else{
            $("<li id='giftsbag_box0' class='fitting_box'><!--<input type='checkbox' class='radio_a' />--><label for='giftsbag_box0'>相册</label><label for='giftsbag_box0'><img src='/img/fitting_03.png'/></label><label for='giftsbag_box0'><strong>卡卡街</strong>创意相册（赠品）</label><select name='gifts[]'><option>红色</option><option>黄色</option><option>绿色</option><option>灰色</option></select></li>").appendTo("div.handsel ul");
        };
    }else{
        $("#giftsbag_box0").remove();
    };
    
    //买10盒
    if(kq>=10){
        boxq = 3;
        if($("li#giftsbag_box1").length>0){  
        }else{
            $("<li id='giftsbag_box1' class='fitting_box'><!--<input type='checkbox' class='radio_a' />--><label for='giftsbag_box0'>相册</label><label for='giftsbag_box0'><img src='/img/fitting_03.png'/></label><label for='giftsbag_box0'><strong>卡卡街</strong>创意相册（赠品）</label><select name='gifts[]'><option>红色</option><option>黄色</option><option>绿色</option><option>灰色</option></select></li>").appendTo("div.handsel ul");
        };
    }else{
        $("#giftsbag_box1").remove();
    };
    
    $("#giftsbox_box").find("strong.quantity").html(boxq);
    
    $("#giftsbag_box").find("strong.quantity").html(kq);
    $(".handsel ul").find("select").click(function(){
        if($(this).val()=='红色'){
            $(this).parent().find("img").attr('src','/img/fitting_03.png');
        }else if($(this).val()=='黄色'){
            $(this).parent().find("img").attr('src','/img/fitting_04.png');
        }else if($(this).val()=='绿色'){
            $(this).parent().find("img").attr('src','/img/fitting_05.png');
        }else if($(this).val()=='灰色'){
            $(this).parent().find("img").attr('src','/img/fitting_06.png');
        };
    });
    
    //更改邮费重新计算
    resetpostage();
    fittingshow();
    
    /*
    var sfg = $(".order_table tr.list").find("input.kaka_orders")
    var kon = sfg.index();
    var i = 0;  //订单条数
    var kq = 0; //订单数量

    sfg.each(function(){
        if(i<kon){
            kq+=parseInt(sfg.eq(i).val());
        };
        i++;
    });
    
    var box = Math.floor(kq/3);
    var bag = kq%3;

    if(box<=0){
        sfg.parents("table.order_table").find("strong.paper_box").html("");
        sfg.parents("table.order_table").find("strong.paper_bag").html("<em class='handsel_ico'></em>"+bag+"+&nbsp;");
    }else if(bag<=0){
        sfg.parents("table.order_table").find("strong.paper_bag").html("");
        sfg.parents("table.order_table").find("strong.paper_box").html("<em class='handsel_ico'></em>"+box+"+&nbsp;");
    }else{
        sfg.parents("table.order_table").find("strong.paper_bag").html("<em class='handsel_ico'></em>"+bag+"+&nbsp;");
        sfg.parents("table.order_table").find("strong.paper_box").html("<em class='handsel_ico'></em>"+box+"+&nbsp;");
    };
    */
};

//删除仓库卡卡街
function del_depotkaka(delo,id){
    if(!confirm("您是否确认删除此碎片？删除后不能恢复！")) return;
    $.ajax({
        url:"/my_setOrder/?act=delOver&id="+id,
        type:"get",
        success:function(d){
            delo.parents("tr.list").find("td").fadeOut('slow');
            delo.parents("tr.list").animate({
                height:0
            },800);
            setTimeout(function(){delo.parents("tr.list").remove()},801);
            //如果kaka仓库删除为0
            setTimeout(function(){
            if($(".order_table tr.list").find("td.korderimg").index()<1){
                $(".order_table tr.list").find("strong.paper_bag").html("");
                $("<tr class='list'><td colspan='5' class='cc'>你的卡卡仓库里面没有任何东东啦！</td></tr>").insertAfter("table.order_table tr.title");
                };
            },1000);
        }
    });
};

//删除订单
function del_order(delo,id){
    $.ajax({
        url:"/my_setOrder/?act=del&id="+id,
        type:"get",
        success:function(d){
            delo.parents("tr.list").find("td").fadeOut('slow');
            delo.parents("tr.list").animate({
                height:0
            },800);
            setTimeout(function(){delo.parents("tr.list").remove()},801);
            setTimeout(function(){totalprice();},802);
            //配件赠送变更
            setTimeout(function(){sendfitting();},803);
            //如果订单删除为0
            setTimeout(function(){
            if($(".order_table tr.list").find("td.korderimg").index()<1){
                $(".order_table tr.list").find("strong.paper_bag").html("");
                location.href="/my_orderNull";
                };
            },1000);
			againkaktips();
        }
    });
};

//总价合计
function totalprice(){
    var i = 0;
    var pi = 0;
    var aa;
    var bb = $("input[type='radio'][name='postage']:checked").attr('postage');

    $("input[type='radio'][name='postage']").click(function(){
        $("input[type='radio'][name='postage']").attr('checked',false);
        $(this).attr('checked', true);
        bb=$(this).attr('postage');
    });
    var trz =$("input[type='text'].quantity").length;
    //var trz =$(".order_table tr.list").find("td").find("strong").index();
    //alert(trz);
    $("input[type='text'].quantity").each(function(){
        if(i<trz){
            var oap = $("strong.order_aunit_price").eq(i).html();
            var oapz = $("input[type='text'].quantity").eq(i).val();
            pi+=oap*oapz;
        };
        i++;
    });
    
    $("span.aa").html(pi);
    $("span.bb").html(bb);
    $("span.cc").html(codeprice);
    $("span.aabbcc").html(parseInt(pi)+parseInt(bb)-codeprice);
};
//初始化订单价格
function initializeOrder(){
  $(".order_table tr.list").find(".order_lump_sum").each(function(){
      var dp = $(this).parents("tr.list").find("strong.order_aunit_price").html()*$(this).parents("tr.list").find("input[type='text']").val();
      $(this).html('￥'+dp);
  })
};
//修改数量价格变化
function price_vary(o){
        var order_aunit_price = o.parents(".list").find("td .order_aunit_price").html();
        var order_quantity = o.parents(".list").find("input[type='text']").val();
        o.parents(".list").find("td .order_lump_sum").html('￥'+order_aunit_price*order_quantity);
};
//滑动菜单
function toggle_menu(){
    //初始第一个样式
    $(".slide_menu").each(function(){
        $(this).find("dt").css({
            'width':$(this).find("dd").eq(0).outerWidth()+'px'
        });
        $(this).find("dd").eq(0).css('color','white');
    });
    //点击切换
    $(".slide_menu dd").click(function(){
       $(this).parent().find("dd").css('color','');
       $(this).css({
           'color':'white'
       });
       var noa = $(this).index();
       var classArr=$(this).parent().attr("class").toString().split(" ");
       $("#"+classArr[1]).val(noa);
       var idx=0;
       var w=0;
       $(this).parent().find("dd").each(function(){
           if(idx<noa-1)
               w+=$(this).outerWidth(true);
           idx++;
       });
       $(this).parent().find("dt").animate({
           width:$(this).outerWidth(),
           left:w
       },300);
    });
};
//配件大图 
function fittingshow(){
   $(".fitting_box img").hover(function(){
       var img = $(this).attr('src').replace('.png','');
       var x = $(this).offset().left+$(this).outerWidth();
       var y = $(this).offset().top+10;
       $("<div class='fittingshow'><img src='"+img+"hover.png' /></div>").appendTo("body").css({
           'position':'absolute',
           'background':'white',
           'padding':'10px',
           'border':'1px #e0dcca solid',
           'left':x+'px',
           'top':y+'px'
       });  
   },function(){
       $(".fittingshow").remove();
   });
   $(".fitting_list .img img").hover(function(){
       var img = $(this).attr('src').replace('.png','');
       var x;
       if($(this).offset().left>$(document.body).width()/2){
           x = $(this).offset().left-322;
       }else{
           x = $(this).offset().left+$(this).outerWidth();
       };
       var y = $(this).offset().top;
       $("<div class='fittingshow'><img src='"+img+".png' /></div>").appendTo("body").css({
           'position':'absolute',
           'background':'white',
           'padding':'10px',
           'border':'1px #e0dcca solid',
           'left':x+'px',
           'top':y+'px'
       });  
   },function(){
      $(".fittingshow").remove();
   });
   
}
//加入收藏
function addFavorite(url, title) {
	try {
		window.external.addFavorite(url, title);
	} catch (e){
		try {
			window.sidebar.addPanel(title, url, '');
        	} catch (e) {
			alert("请按 Ctrl+D 键添加到收藏夹");
		}
	}
}
//首页宽度计算
function h_banner(){
    $("#home_banner li").css({
        'padding-left':[$(document.body).width()-960]/2+'px',
        'padding-right':[$(document.body).width()-960]/2+'px'
    })
}
//验证优惠码
function checkCode(ts){
    var code=$("#code").val();
    $.ajax({
        url:"/my_ajax_user/?act=checkCode",
        type:"post",
        data:"code="+code,
        error:function(){
            checkCode();
        },
        success:function(r){
            codeprice = r;
            ts.parent().find("span.Validform_checktip").remove();
            if(r>0){
                $("<span class='code_ok Validform_checktip'>该优惠码可优惠"+r+"元</span>").insertAfter(ts);
                totalprice();
            }else{
                $("<span class='code_error Validform_checktip'>无效优惠码</span>").insertAfter(ts);
            }
        }
    });
}

//显示底部提示
function show_bottomtips(){
    setTimeout(function(){
         $("<div class='bottom_tips'><div class='cc'><em  class='ico'></em><span>一次性DIY满 3 套送礼盒 1 个（免邮费）， 满 6 套送礼盒 2 个+相册 1 本（免邮费），满 10 套礼盒 3 个+相册 2 本（免邮费）</span><em class='mini_ico whitelove_ico'></em><a href=\"javascript:addFavorite('http://www.kakajie.com', '卡卡街')\">加入收藏</a><em class='mini_ico cose_ico'></em><a href='javascript://' onclick='cose_bottomtips()'>关闭提示</a></div></div><div class='bottom_tipsbj'></div>").appendTo("body");
    },2000);
    setTimeout(function(){
        $(".bottom_tips,.bottom_tipsbj").animate({
           'bottom':'+=80' 
        },800);
    },2001);
}

//关闭底部提示
function cose_bottomtips(){ 
    //$.cookie(cookiename,'hide',{path:'/',expires:3});
    $(".bottom_tips,.bottom_tipsbj").animate({
        'bottom':'-=80'
    },500);
    setTimeout(function(){
        $(".bottom_tips,.bottom_tipsbj").remove();
    },501)
};

//订单页面DIY增量提示
function againkaktips(){
	setTimeout(function(){
		$(".systips").remove();
		var img = $(".order_table tr.list").find(".korderimg");
		var imgs = img.length;
		var ipt = img.parents("tr").find("input.quantity");
		
		var i = 0;
		var kkts = 0;
		img.each(function(){
		    if(ipt.length<1){
		        kkts = imgs;
		    }else{
		        kkts += parseInt(ipt.eq(i).val());
		    }
		    i++;    
		});
				
		if(kkts<1){
		    
		}else if(kkts<3){
			$("<div class='systips'>已经DIY <strong>"+kkts+"</strong> 套卡卡，再DIY <strong>"+(3-kkts)+"</strong> 套即可免邮费还送 1 个礼盒哦！再DIY <strong>"+(6-kkts)+"</strong> 套送2个礼盒+1本相册，再DIY<strong>"+(10-kkts)+"</strong>套送<strong>3</strong>本礼盒+相册<strong>2</strong>本。送完即止……</div>").insertBefore("table.order_table").eq(0).slideDown();
		}else if (kkts<6){
			$("<div class='systips'>已经DIY <strong>"+kkts+"</strong> 套卡卡，再DIY <strong>"+(6-kkts)+"</strong> 套送2个礼盒+1本相册，再DIY<strong>"+(10-kkts)+"</strong>套送<strong>3</strong>本礼盒+相册<strong>2</strong>本。送完即止……</div>").insertBefore("table.order_table").eq(0).slideDown();
		}else if(kkts<10){
			$("<div class='systips'>已经DIY <strong>"+kkts+"</strong> 套卡卡，再DIY<strong>"+(10-kkts)+"</strong>套送<strong>3</strong>本礼盒+相册<strong>2</strong>本，还免邮哦！数量有限，送完即止……</div>").insertBefore("table.order_table").eq(0).slideDown();
		};
		
		$("strong.kakaenvelop").html(kkts);//改变购物车数量
		
	},850);

};

//优惠码弹窗
function promocode(codenum){
    $("<div class='promocodebox'><div class='promocode'><h3>恭喜你获得<span>\"免费的卡卡街\"</span>1套</h3><div class='promocodefrom fixed'><input id='codeval' type='text' value='' /><button onclick='promocodecopy();'>复制优惠码</button></div><span class='rejoin_tip'>选中优惠码按Ctrl+C或点击按钮复制优惠码到剪切板<br/>限送50000套，已送<strong>"+codenum+"</strong>套。送完即止……</span><div class='tips'><a class='diy_go' target='_blank' href='/my_diy'>去DIY免费领取卡卡街</a>&nbsp;<a href='/my_article/?id=12' target='_blank'>如何使用优惠码？</a></div><em class='cosepromoico'></em><a class='cosepromocode' href='javascript://' onclick='promocodecose()'></a></div></div>").appendTo('body');
    promocodexy();
    Do.loadTo("/my_ajax_user/?act=newcode","#codeval");
};
function promocodexy(){
    var pop_boxw = $(".promocodebox").outerWidth(true);
    var pop_boxh = $(".promocodebox").outerHeight(true);
    if($.browser.version && $.browser.version<7){
        $(".promocodebox").css({
            'left':[$(window).width()-pop_boxw]/2+'px',
            'top':$(document).scrollTop()+[$(window).height()-pop_boxh]/3+'px'
        }).show();
    }else{
        $(".promocodebox").css({
            'left':[$(window).width()-pop_boxw]/2+'px',
            'top':[$(window).height()-pop_boxh]/3+'px'
        }).show();
    };
};
function promocodecose(){
    $.cookie(promocookiename,'promohide',{path:'/',expires:0});
    $("div.promocodebox").remove();
};
function promocodecopy(){
    var codeval = $("input#codeval").val();
    if($.browser.msie){
        window.clipboardData.setData('text', codeval);
        $("span.rejoin_tip").html('你已经成功复制优惠码到剪贴板')
    }else{
        $("input#codeval").select();
        $("span.rejoin_tip").html('请按 Ctrl+C 复制优惠码到剪贴板')
    };
};

/*首页幻灯动画*/
function onBefore(){
    if($.browser.version && $.browser.version<9){
    }else{
        $(".pencil").removeClass("pencil_load");
        $(".photo").removeClass("photo_load");
        $(".photo_a").removeClass("photo_a_load");
        $(".photo_b").removeClass("photo_b_load");
        $(".photo_c").removeClass("photo_c_load");
        $(".photo_d").removeClass("photo_d_load");
        $(".photo_e").removeClass("photo_e_load");
        $(".photo_f").removeClass("photo_f_load");
        $(".photo_g").removeClass("photo_g_load");
    };
};
function onAfter(){
    if($.browser.version && $.browser.version<9){
    }else{
        $(".pencil").addClass("pencil_load");
        $(".photo").addClass("photo_load");
        $(".photo_a").addClass("photo_a_load");
        $(".photo_b").addClass("photo_b_load");
        $(".photo_c").addClass("photo_c_load");
        $(".photo_d").addClass("photo_d_load");
        $(".photo_e").addClass("photo_e_load");
        $(".photo_f").addClass("photo_f_load");
        $(".photo_g").addClass("photo_g_load");
    };
};

function copyinvite(ts){
    var codeinvite = ts.parent().find("input").val();
    if($.browser.msie){
        window.clipboardData.setData('text', codeinvite);
        ts.html('你已经成功复制优惠码到剪贴板')
    }else{
        ts.parent().find("input").select();
        ts.html('请按 Ctrl+C 复制优惠码到剪贴板')
    };
};

var Do={
    loadTo:function(_url,o){
        $.ajax({
            url:_url,
            type:"GET",
            error:function(){
                Do.loadTo(o, _url);
            },
            success:function(r){
                $(o).val(r);
            }
        });
    }
}
//弹窗位置
/*
function popboxxy(){
    var pop_boxw = $(".pop_box").outerWidth(true);
    var pop_boxh = $(".pop_box").outerHeight(true)
    $(".pop_box").css({
        'left':[$(window).width()-pop_boxw]/2+'px',
        'top':[$(window).height()-pop_boxh]/3+'px'
    }).show();
};
function popbj(){
  $("<div class='pop_bj'></div>").appendTo("body");
};
function popbox(t,c){
     popbj();
    $("<dl class='pop_box'><dt>完成支付</dt><dd class='tip_c'>支付完成前请误刷新此页面<br/>支付完成后请根据结果选择<br/>支付失败时，请重试或联系我们的客服</dd><dd class='button_box'><a class='cancel' href='JavaScript:cosepopbox();'>支付失败</a><a class='verify' href='#'>支付成功</a></dd></dl>").appendTo("body").show();
    popboxxy();
};
function cosepopbox(){
    $(".pop_box").remove();
    $(".pop_bj").remove();  
};
*/