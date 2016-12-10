<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <div class="tips icotip">
                <em class="ico"></em>
                数据统计：共 <strong>1312</strong> 个计划，<strong>9</strong> 个处理中， <strong>3</strong> 个被驳回， <strong>1309</strong> 个已完成
            </div>
            <ul class="operating_box fixed">
                <li><a class="btn_ico button green_an" href="add_plan.php"><i class="add_ico"></i>创建计划</a></li>
                <li><a class="button" href="javascript://" onclick="ui.add_pop('指派创意', '520','' , 'ajax_assign_ideas.php','')">指派创意</a></li>
                <li><a class="button" href="javascript://" onclick="ui.add_pop('驳回计划', '480','230' , 'ajax_reject_plan.php','')">驳回计划</a></li>
                <li><a class="button" href="javascript://" onclick="ui.add_pop('编辑创意', '520','360' , 'ajax_edit_ider.php','')">编辑创意</a></li>
                <li><a class="button" href="javascript://" onclick="ui.add_pop('计划转让', '500','230' , 'ajax_transfer_plan.php','')">计划转让</a></li>
                <li><a class="button" href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','',0)">日志跟踪</a></li>
                <li><a class="button" href="javascript://" onclick="ui.add_pop('博主信息详情', '560','' , 'ajax_weibo_info.php','',0)">博主信息</a></li>
                <!-- <li><a class="button" href="javascript://" onclick="ui.add_pop('博主信息详情', '560','' , 'ajax_weibo_fans.php','',0)">博主粉丝分析</a></li> -->
                <li><a class="button" href="javascript://" onclick="ui.minitips('对啦！提交成功！')">正确提示</a></li>
                <li><a class="button" href="javascript://" onclick="ui.minitips('^_^好像有问题哦！','error')">错误提示</a></li>
            </ul>
            <ul class="tag_menu">
                <li class="current"><a href="">我的计划</a></li>
                <li><a href="">所有计划</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <div class="filter_element drop_down_time">
                            <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                            <em class="ico"></em>
                        </div>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">不限时间<em class="ico"></em></a></li>
                            <li class="options">
                                <a>不限时间</a>
                                <a>不限时间</a>
                                <a>24小时</a>
                                <a>本周</a>
                                <a>本月</a>
                                <a>不限时间</a>
                                <a>24小时</a>
                                <a>本周</a>
                                <a>本月</a>
                            </li>
                        </ul>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">时间<em class="ico"></em></a></li>
                            <li class="options">
                                <a>时间</a>
                                <a>不限时间</a>
                                <a>24小时</a>
                                <a>本周</a>
                                <a>本月</a>
                                <a>不限时间</a>
                                <a>24小时</a>
                                <a>本周</a>
                                <a>本月</a>
                            </li>
                        </ul>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">不限时间不限时间<em class="ico"></em></a></li>
                            <li class="options">
                                <a>不限时间不限时间</a>
                                <a>不限时间</a>
                                <a>24小时</a>
                                <a>本周</a>
                                <a>本月</a>
                                <a>不限时间</a>
                                <a>24小时</a>
                                <a>本周</a>
                                <a>本月</a>
                            </li>
                        </ul>
                        <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                    <li class="row row_last">
                        <ul class="filtered_check">
                            <li><input type="checkbox" name="" id="tencent" /><label for="tencent">新浪微博</label></li>
                            <li><input type="checkbox" name="" id="weibo" /><label for="weibo">腾讯微博</label></li>
                            <li class="line"></li>
                        </ul>
                        <ul class="filtered_check">
                            <li><input type="checkbox" name="" id="be_returned" /><label for="be_returned">被驳回</label></li>
                            <li><input type="checkbox" name="" id="processing" /><label for="processing">处理中</label></li>
                            <li><input type="checkbox" name="" id="completed" /><label for="completed">已完成</label></li>
                            <li class="line"></li>
                        </ul>
                    </li>
                </ul>
                <ul class="db_listtitle">
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">操作<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">编辑计划</a>
                                <a href="">审核创意</a>
                                <a href="">查看计划</a>
                                <a href="">取消计划</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">操作<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">编辑计划</a>
                                <a href="">审核创意</a>
                                <a href="">查看计划</a>
                                <a href="">取消计划</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row">
                        <a class="lifting_sort" href="javascript://">报价<em class="ico"></em></a>
                    </li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">操作<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">编辑计划</a>
                                <a href="">审核创意</a>
                                <a href="">查看计划</a>
                                <a href="">取消计划</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row">
                        <span class="title_name">操作</span>
                        <em class="mini_glossary_ico" text="较专业的行业名词使用该图标，鼠标悬停在该图标上显示该名词的名词解释。"></em>
                    </li>

                </ul>
            </div>
            <div class="main_cc">
                <table class="dblist_table contextmenu">
                    <tr>
                        <td>
                            <ul>
                                <li><a href="">双十一内衣大促推广计划</a><em class="ico tencent_ico"></em></li>
                                <li>广告主：要记住我的店</li>
                                <li>计划编号：625868</li>
                                <li>当前情况：未提交创意</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>创建时间：2012-02-05 18:00</li>
                                <li>推广时间：2012-02-07 20:25</li>
                                <li>剩余时间：68小时42分35秒</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 RMB</li>
                                <li>实消：55200 RMB</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-02-08 19:25</li>
                                <li class="plan_progress"><span class="current">客户组</span>--<span class="current">创意组</span>--<span class="current">媒介组</span>--<span>完成</span></li>
                                <li><em class="ico urgent_ico space_ico"></em>被媒介组驳回 <a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">[详细]</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">编辑计划</a>
                                    <a href="">审核创意</a>
                                    <a href="">查看计划</a>
                                    <a href="">取消计划</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="">双十一内衣大促推广计划</a><em class="ico sina_ico"></em></li>
                                <li>广告主：要记住我的店</li>
                                <li>计划编号：625868</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>创建时间：2012-02-05 18:00</li>
                                <li>推广时间：2012-02-07 20:25</li>
                                <li>剩余时间：68小时42分35秒</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 RMB</li>
                                <li>实消：55200 RMB</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-02-08 19:25</li>
                                <li class="plan_progress"><span class="current">客户组</span>--<span class="current">创意组</span>--<span class="current">媒介组</span>--<span class="current">完成</span></li>
                                <li><em class="ico urgent_ico space_ico"></em>被媒介组驳回 <a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">[详细]</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">编辑计划</a>
                                    <a href="">审核创意</a>
                                    <a href="">查看计划</a>
                                    <a href="">取消计划</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="">双十一内衣大促推广计划</a><em class="ico sina_ico"></em></li>
                                <li>广告主：要记住我的店</li>
                                <li>计划编号：625868</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>创建时间：2012-02-05 18:00</li>
                                <li>推广时间：2012-02-07 20:25</li>
                                <li>剩余时间：68小时42分35秒</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 RMB</li>
                                <li>实消：55200 RMB</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-02-08 19:25</li>
                                <li class="plan_progress"><span class="current">客户组</span>--<span>创意组</span>--<span>媒介组</span>--<span>完成</span></li>
                                <li><em class="ico ing_ico space_ico"></em>被媒介组驳回 <a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">[详细]</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">编辑计划</a>
                                    <a href="">审核创意</a>
                                    <a href="">查看计划</a>
                                    <a href="">取消计划</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="">双十一内衣大促推广计划</a><em class="ico sina_ico"></em></li>
                                <li>广告主：要记住我的店</li>
                                <li>计划编号：625868</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>创建时间：2012-02-05 18:00</li>
                                <li>推广时间：2012-02-07 20:25</li>
                                <li>剩余时间：68小时42分35秒</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 RMB</li>
                                <li>实消：55200 RMB</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-02-08 19:25</li>
                                <li class="plan_progress"><span class="current">客户组</span>--<span>创意组</span>--<span>媒介组</span>--<span>完成</span></li>
                                <li><em class="ico ing_ico space_ico"></em>被媒介组驳回 <a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">[详细]</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">编辑计划</a>
                                    <a href="">审核创意</a>
                                    <a href="">查看计划</a>
                                    <a href="">取消计划</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="">双十一内衣大促推广计划</a><em class="ico sina_ico"></em></li>
                                <li>广告主：要记住我的店</li>
                                <li>计划编号：625868</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>创建时间：2012-02-05 18:00</li>
                                <li>推广时间：2012-02-07 20:25</li>
                                <li>剩余时间：68小时42分35秒</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 RMB</li>
                                <li>实消：55200 RMB</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-02-08 19:25</li>
                                <li class="plan_progress"><span class="current">客户组</span>--<span>创意组</span>--<span>媒介组</span>--<span>完成</span></li>
                                <li><em class="ico problem_ico space_ico"></em>被媒介组驳回 <a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">[详细]</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">编辑计划</a>
                                    <a href="">审核创意</a>
                                    <a href="">查看计划</a>
                                    <a href="">取消计划</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <?php for($i=0;$i<3;$i++){ ?>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="">双十一内衣大促推广计划</a><em class="ico sina_ico"></em></li>
                                <li>广告主：要记住我的店</li>
                                <li>计划编号：625868</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>创建时间：2012-02-05 18:00</li>
                                <li>推广时间：2012-02-07 20:25</li>
                                <li>剩余时间：68小时42分35秒</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 RMB</li>
                                <li>实消：55200 RMB</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-02-08 19:25</li>
                                <li class="plan_progress"><span class="current">客户组</span>--<span class="current">创意组</span>--<span class="current">媒介组</span>--<span class="current">完成</span></li>
                                <li><em class="ico complete_ico space_ico"></em>被媒介组驳回 <a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">[详细]</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">编辑计划</a>
                                    <a href="">审核创意</a>
                                    <a href="">查看计划</a>
                                    <a href="">取消计划</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <ul class="pagelist">
                    <li><span>记录: 1549 条</span></li>
                    <li><span>首页</span></li>
                    <li><a href="">1</a></li>
                    <li class="current"><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="">6</a></li>
                    <li><a href="">7</a></li>
                    <li><a href="">8</a></li>
                    <li><a href="">9</a></li>
                    <li><a href="">10</a></li>
                    <li><a href="">尾页</a></li>
                </ul>
            </div>

        </div>
    </div>
<?php include 'footer.php';?>