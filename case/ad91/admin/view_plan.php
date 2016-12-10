<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="stage_box">
                <li class="once">1、创建计划<em class="stage_ico"></em></li>
                <li class="once">2、创意作业中<em class="stage_ico"></em></li>
                <li class="once">3、审核计划<em class="stage_ico"></em></li>
                <li class="once once_back">4、建立推广<em class="stage_ico"></em></li>
                <li class="current">5、完成计划<em class="stage_ico"></em></li>
                <li class="process_log"><em class="ico"></em><a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">详细日志</a></li>
            </ul>
            <div class="main_cc">
                <ul class="operating_box fixed">
                    <li><a class="btn_ico button" href="add_plan.php"><i class="reset_ico"></i>重启计划</a></li>
                    <li><a class="btn_ico button" href=""><i class="pen_ico"></i>编辑计划</a></li>
                    <li><a class="btn_ico button" href=""><i class="back_ico"></i>驳回计划</a></li>
                    <li><a class="btn_ico button" href=""><i class="yes_ico"></i>审核计划</a></li>
                </ul>
                <ul class="article_list">
                    <li class="fixed">
                        <label for="" class="input_label">计划名称：</label>
                        <span class="options_label">双十一内衣大促推广计划<em class="ico sina_ico"></em></span>
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
                        <label for="" class="input_label">推广时间：</label>
                        <span class="options_label"><a href="#">http://www.ad91.com</a></span>
                    </li>
                </ul>
                <div class="view_iderbox">
                    <table class="show_table">
                        <tr>
                            <td class="title"><span class="author">创意作者：<em class="selected_seal"></em></span></td>
                            <td class="">棠如</td>
                            <td class="center" width="120">
                                <div class="direct_drop_down">
                                    <a class="direct" onclick="table.tsweibo_added($(this))">取消选用</a>
                                    <ul class="drop_down">
                                        <li class="title"><a href=""><em class="ico"></em></a></li>
                                        <li class="options">
                                            <a href="">编辑该创意</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">创意图片：</td>
                            <td><a href="">../upload/rec_images/1352431413.jpg</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="title">创意内容：</td>
                            <td>今年大肆盛行的复古麻花毛衣，最适合简单你的啦~！粗毛线面料，手感舒适很亲肤哟~~[太开心]冷一些的话，外搭小外套，冬天搭配呢大衣or羽绒服都可以的[亲亲]【麻花毛衣】>>> <a href="#">http://t.cn/zjva505</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="title">转发语：</td>
                            <td>今年大肆盛行的复古麻花毛衣[太开心]有没有让你想到儿时的自己呢！【麻花毛衣】<a href="">http://t.cn/zjva505</a></td>
                            <td></td>
                        </tr>
                    </table>
                    <table class="show_table">
                        <tr>
                            <td class="title"><span class="author">创意作者：<em class="selected_seal"></em></span></td>
                            <td class="">棠如</td>
                            <td class="center" width="120">
                                <div class="direct_drop_down">
                                    <a class="direct" onclick="table.tsweibo_added($(this))">取消选用</a>
                                    <ul class="drop_down">
                                        <li class="title"><a href=""><em class="ico"></em></a></li>
                                        <li class="options">
                                            <a href="">编辑该创意</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">创意图片：</td>
                            <td><a href="">../upload/rec_images/1352431413.jpg</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="title">创意内容：</td>
                            <td>今年大肆盛行的复古麻花毛衣，最适合简单你的啦~！粗毛线面料，手感舒适很亲肤哟~~[太开心]冷一些的话，外搭小外套，冬天搭配呢大衣or羽绒服都可以的[亲亲]【麻花毛衣】>>> <a href="#">http://t.cn/zjva505</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="title">转发语：</td>
                            <td>今年大肆盛行的复古麻花毛衣[太开心]有没有让你想到儿时的自己呢！【麻花毛衣】<a href="">http://t.cn/zjva505</a></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>