<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="operating_box fixed">
                <li><a class="btn_ico button" href="javascript://" onclick="ui.add_pop('管理收藏组', '520','' , 'ajax_edit_group.php','')"><i class="go_ico"></i>导出超时任务</a></li>
            </ul>
            <ul class="tag_menu">
                <li class="current"><a href="">微博列表</a></li>
                <li><a href="">待执行任务</a></li>
                <li><a href="">未通过审核</a></li>
                <li><a href="">已超时任务</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">默认排序<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">默认排序</a>
                                <a href="javascript://">执行时间</a>
                                <a href="javascript://">任务价格</a>
                            </li>
                        </ul>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">任务类型<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">任务类型</a>
                                <a href="javascript://">带号任务</a>
                                <a href="javascript://">推广任务</a>
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
                    <li class="row"><span class="title_name">任务开始时间</span></li>
                    <li class="row"><span class="title_name">状态</span></li>
                    <li class="row"><span class="title_name">备注</span></li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">操作<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">添加到收藏</a>
                                <a href="">加入黑名单</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>


            <div class="main_cc">
                <table class="dblist_table contextmenu">
                    <?php for($i=0;$i<20;$i++){;?>
                    <tr class="tbelected_list">
                        <td class="break_all" width="250">
                            <ul>
                                <li><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>"/> [直发] 铅笔裤双十二给力推广</li>
                                <li class="added_td">任务微博：<a href="" title="查看微博详情">爱讲冷笑话</a><em class="ico sina_ico"></em></li>
                                <li>任务金额：&#165;80.00</li>
                            </ul>
                        </td>
                        <td width="110">
                            <ul>
                                <li>13-01-03 18:05</li>
                            </ul>
                        </td>
                        <td width="100">
                            <ul>
                                <li><em class="ico complete_ico space_ico"></em>派单中</li>
                            </ul>
                        </td>
                        <td width="180" class="break_all">
                            <ul>
                                <li>fdsfd</li>
                            </ul>
                        </td>
                        <td width="80">
                            <div class="direct_drop_down">
                                <a href="javascript://" onclick="ui.bloggers_task_view($(this));" class="direct">任务详情</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a>执行该推广</a>
                                        <a>拒单</a>
                                    </li>
                                </ul>
                            </div>
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