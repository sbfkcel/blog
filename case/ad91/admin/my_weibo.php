<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="operating_box fixed">
                <li><a class="btn_ico green_an button" href="#"><i class="add_ico"></i>添加微博</a></li>
                <li><a class="btn_ico button" href="#"><i class="pen_ico"></i>更新数据</a></li>
                <li><a class="btn_ico button" href="#"><i class="pen_ico"></i>分析微博</a></li>
            </ul>
            <ul class="tag_menu">
                <li class="current"><a href="">微博列表</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">所属平台<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">所属平台</a>
                                <a href="javascript://">新浪微博</a>
                                <a href="javascript://">腾讯微博</a>
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
                    <li class="row"><span class="title_name">粉丝量</span></li>
                    <li class="row"><span class="title_name">价格</span></li>
                    <li class="row">
                        <ul class="drop_down monospaced_drop_down">
                            <li class="title"><a class="value">状态<em class="ico"></em></a></li>
                            <li class="options" style="width: 62px; ">
                                <a href="">所有</a>
                                <a href="">待审核</a>
                                <a href="">已审核</a>
                                <a href="">被冻结</a>
                            </li>
                        </ul>
                    </li>
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
                                <li class="added_td"><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>"/> <a href="" title="查看微博详情">爱讲冷笑话</a><em class="ico sina_ico"></em></li>
                                <li>接单状态：接单 / 不接硬广</li>
                            </ul>
                        </td>
                        <td width="80">
                            <ul>
                                <li>650000</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>带号价：&#165;765.00</li>
                                <li>硬广价：&#165;765.00</li>
                                <li>软广价：&#165;765.00</li>
                                <li>直发价：&#165;765.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><em class="ico orange_ing_ico space_ico"></em>待审核</li>
                                <li><em class="ico complete_ico space_ico"></em>已审核</li>
                                <li><em class="ico red_problem_ico space_ico"></em>被冻结</li>
                            </ul>
                        </td>
                        <td width="180" class="break_all">
                            <ul>
                                <li>fdsfd</li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a href="#" class="direct">分析</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a>设置带号价</a>
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