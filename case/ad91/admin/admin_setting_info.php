<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="tag_menu">
            <li class="current">
                <a href="admin_setting_info.php">基本设定</a>
            </li>
            <li>
                <a href="admin_setting_api.php">接口设定</a>
            </li>
            <li>
                <a href="">系统用户权限</a>
            </li>
            <li>
                <a href="">系统日志</a>
            </li>
            <li>
                <a href="">合作伙伴</a>
            </li>
            <li>
                <a href="">短链接管理</a>
            </li>
            <li>
                <a href="">链接分析</a>
            </li>
        </ul>
        <div class="main_cc">
            <ul class="article_from">
                <li class="fixed">
                    <label class="input_label" for="">网站名称：</label>
                    <input class="input_txt" type="text" value="友漾" name="" id="" />
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">测试bar：</label>
                    <div class="tocashbar">
                        <div class="scale"></div>
                        <div class="bar_box">
                            <div class="bar"><div class="drag" section="4" leastsection="1">&nbsp;</div></div>
                        </div>
                        <div class="tocashtip"><strong id="day">5</strong> 个工作日，可获得提现金额的 <strong id="percent">0</strong>% 积分</div>
                        <input id="workday" type="hidden" name="workday" value="5">
                    </div>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">网站域名：</label>
                    <input class="input_txt" type="text" value="http://www.ad91.com/" name="" id="" />
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">邮箱地址：</label>
                    <input class="input_txt" type="text" value="service@ad91.com" name="" id="" />
                    <span class="Validform_checktip">对外服务邮箱</span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">发件title：</label>
                    <input class="input_txt" type="text" value="友漾" name="" id="" />
                    <span class="Validform_checktip">系统邮件发件人</span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">服务电话：</label>
                    <input class="input_txt" type="text" value="400-076-9991" name="" id="" />
                    <span class="Validform_checktip">对外客服电话</span>
                </li>
            </ul>
            <ul class="article_from">
                <li class="fixed">
                    <label class="input_label" for="">关键字：</label>
                    <input class="input_txt" type="text" value="友漾,微博营销,网络营销,微博推广,weibo推广,微博营销,淘宝推广,微博赚钱" name="" id="" />
                    <span class="Validform_checktip">前台keywords，多个关键字用","隔开</span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">描述：</label>
                    <textarea class="textarea_a" style="width:388px;" rows="5"v>友漾(ad91.com)，国内领先的微博投放平台，拥有国内最大的博主资源库，提供专业的微博营销策略及一站式微博推广投放管理服务。</textarea>
                    <span class="Validform_checktip">前台description描述内容</span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">版权：</label>
                    <input class="input_txt" type="text" value="© 2010-2012 ad91.com Inc. All Rights Reserved" name="" id="" />
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">过滤词组：</label>
                    <textarea class="textarea_a" style="width:388px;" rows="5"v></textarea>
                    <span class="Validform_checktip">系统关键字过滤</span>
                </li>
            </ul>
        </div>
        <ul class="article_from_submit">
            <li class="fixed">
                <label for="" class="input_label">&nbsp;</label>
                <button class="button blue_an">确认提交</button>
            </li>
        </ul>
    </div>
</div>
<script>
    $(function(){
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
            $(document.body).attr("onselectstart","return false");
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
    })
    </script>
<?php include 'footer.php'; ?>
