<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div id="main" class="main">
            <ul class="tag_menu">
                <li class="current"><a href="">订单管理</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <div class="filter_element drop_down_time">
                            <input type="text" class="filter_input_txt inputDate" f="create_time" value="" size="26" title="不限时间" />
                            <em class="ico"></em>
                        </div>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">订单类型<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">订单类型</a>
                                <a href="javascript://">带号订单</a>
                                <a href="javascript://">推广订单</a>
                            </li>
                        </ul>
                        <input type="text" class="filter_element filter_input_txt input_f_s" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                </ul>
                <ul class="db_listtitle">
                    <li class="row">
                        <ul class="drop_down ">
                            <li class="title"><a href="">队列<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://" onclick="table.checkAll()">全选</a>
                                <a href="javascript://" onclick="table.checkNO()">不选</a>
                                <a href="javascript://" onclick="table.checkOpp()">反选</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row"><span class="title_name">价格</span></li>
                    <li class="row"><span class="title_name">时间</span></li>
                    <li class="row"><span class="title_name">状态</span></li>
                    <li class="row"><span class="title_name">审核备注</span></li>
                </ul>
            </div>
            

            <div class="main_cc">
                <table class="dblist_table contextmenu">
                    <?php for($i=0;$i<20;$i++){;?>
                    <tr class="tbelected_list">
                        <td>
                            <ul>
                                <li><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>"/> 订单号：8562</li>
                                <li>任务名称：[85621] 铅笔裤双十二给力推广</li>
                                <li class="added_td">执行微博：<a href="" title="查看微博详情">爱讲冷笑话</a><em class="ico sina_ico"></em></li>
                                <li>活动链接：<a href="http://weibo.com/u/1836245302" target="_blank">http://weibo.com/u/1836245302</a></li>
                                <li>执行链接：<a href="http://weibo.com/u/1836245302" target="_blank">http://weibo.com/u/1836245302</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>&#165;3865.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>任务时间：13-01-03 18:05</li>
                                <li>执行时间：13-01-03 18:05</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><em class="ico complete_ico space_ico"></em>派单中</li>
                            </ul>
                        </td>
                        <td width="180" class="break_all">
                            <ul>
                                <li>fdsfd</li>
                            </ul>
                        </td>
                    </tr>
                    <?php };?>
                </table>
                <div class="b_fixed fixed">
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
    </div>
<?php include 'footer.php';?>