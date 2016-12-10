<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <div class="main_cc">
                <ul class="article_list">
                    <li class="fixed">
                        <label for="" class="input_label">计划名称：</label>
                        <span class="options_label">转发 / 双十一内衣大促推广计划<em class="ico sina_ico"></em></span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">客户名称：</label>
                        <span class="options_label">要记住我的店</span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">推广时间：</label>
                        <span class="options_label">2012-0207 20:25</span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">推广链接：</label>
                        <span class="options_label"><a href="#">http://www.ad91.com</a></span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">粉丝人群：</label>
                        <span class="options_label">北京、上海、广州、深圳</span>
                    </li>
                </ul>
                <div class="view_iderbox">
                    <table>
                        <tr>
                            <td class="title">创意图片：</td>
                            <td><a href="">../upload/rec_images/1352431413.jpg</a></td>
                        </tr>
                        <tr>
                            <td class="title">创意内容：</td>
                            <td>今年大肆盛行的复古麻花毛衣，最适合简单你的啦~！粗毛线面料，手感舒适很亲肤哟~~[太开心]冷一些的话，外搭小外套，冬天搭配呢大衣or羽绒服都可以的[亲亲]【麻花毛衣】>>> <a href="#">http://t.cn/zjva505</a></td>
                        </tr>
                        <tr>
                            <td class="title">转发语：</td>
                            <td>今年大肆盛行的复古麻花毛衣[太开心]有没有让你想到儿时的自己呢！【麻花毛衣】<a href="">http://t.cn/zjva505</a></td>
                        </tr>
                        <tr>
                            <td class="title">要求：</td>
                            <td>请博主直接发布，不要使用定时器。谢谢~</td>
                        </tr>
                    </table>
                </div>
            </div>
            <ul class="tag_menu">
                <li class="current"><a href="">本次活动共有 <stron>20</stron> 个微博参与执行</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter row_last">
                    <li class="row">
                        <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="30" />
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li> 
                </ul>
                <ul class="db_listtitle">
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">队列<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://" onclick="table.checkAll()">全选</a>
                                <a href="javascript://" onclick="table.checkNO()">不选</a>
                                <a href="javascript://" onclick="table.checkOpp()">反选</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row"><span class="title_name">粉丝覆盖量</span></li>
                    <li class="row"><span class="title_name">链接地址</span></li>
                    <li class="row">
                        <div class="direct_drop_down">
                            <a class="direct">审核已选</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">发短信给已选博主</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <table class="dblist_table">
                
                <?php for($i=0;$i<20;$i++){;?>
                <tr class="list" listid="<?php echo $i;?>">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id" value="0"> <a href="">冷笑话</a><em class="ico sina_ico"></em></li>
                            <li>博主帐号：728929095@qq.com</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>708624 男80% 女20%</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="" target="_blank">http://weibo.com/1784830527/z9xhtbsJa</a></li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct" href="javascript://" onclick="ui.add_pop('审核微博主推广返链', '480','' , 'ajax_checkWeiboAct.php','')">审核返链</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">发短信给该博主</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php };?>
            </table>
        </div>
    </div>
<?php include 'footer.php';?>