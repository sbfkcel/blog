<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div id="main" class="main">
            <ul class="operating_box fixed">
                <li><a class="btn_ico green_an button" href="#"><i class="add_ico"></i>添加带号任务</a></li>
            </ul>
            <ul class="tag_menu">
                <li class="current"><a href="">带号管理</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <div class="filter_element drop_down_time">
                            <input type="text" class="filter_input_txt inputDate" f="create_time" value="" size="26" title="不限时间" />
                            <em class="ico"></em>
                        </div>
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
                    <li class="row"><span class="title_name">任务时间</span></li>
                    <li class="row"><span class="title_name">派单量\执行量</span></li>
                    <li class="row"><span class="title_name">所需U币</span></li>
                    <li class="row"><span class="title_name">实消U币</span></li>
                    <li class="row"><span class="title_name">覆盖量</span></li>
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
                        <td>
                            <ul>
                                <li class="added_td"><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>"/> [转发] <a href="" title="查看微博详情">爱讲冷笑话</a><em class="ico sina_ico"></em></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>13-01-03</li>
                                <li>20:30</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>13 \ 0</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>8532</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>562</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>856223</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><em class="ico complete_ico space_ico"></em>执行中</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a>操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">查看</a>
                                    <a href="">编辑</a>
                                    <a href="">查看推广效果</a>
                                </li>
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