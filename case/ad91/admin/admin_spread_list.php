<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <div class="tips icotip">
                <em class="ico"></em>
                数据统计：共有 <strong>1632</strong>  个推广，其中  <strong>1</strong> 个待审核， <strong>5</strong> 个执行中， <strong>1593</strong> 个已完成
            </div>
            <ul class="tag_menu">
                <li class="current"><a href="">所有推广</a></li>
                <li><a href="">待审核的</a></li>
                <li><a href="">执行中的</a></li>
                <li><a href="">已完成的</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <div class="filter_element drop_down_time">
                            <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                            <em class="ico"></em>
                        </div>
                        <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="20" />
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                    <li class="row row_last">
                        <ul class="filtered_check">
                            <li><input type="checkbox" name="" id="be_returned" checked/><label for="be_returned">待审核的</label></li>
                            <li><input type="checkbox" name="" id="processing" checked/><label for="processing">执行中的</label></li>
                            <li><input type="checkbox" name="" id="completed" checked/><label for="completed">已完成的</label></li>
                            <li class="line"></li>
                        </ul>
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
                    <li class="row"><span class="title_name">派单/执行/覆盖量</span></li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">费用<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">预算从高到低</a>
                                <a href="">预算从低到高</a>
                                <a href="">实消从高到低</a>
                                <a href="">实消从低到高</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row"><span class="title_name">状态</span></li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">操作<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">批量通过审核</a>
                                <a href="">批量设为完成</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="main_cc">
                <table class="dblist_table contextmenu">
                    <tr>
                        <td>
                            <ul>
                                <li><input type="checkbox" class="checkbox_id" value="0"> 推广ID：2045<em class="ico sina_ico"></em></li>
                                <li><a href="">[转发]双十一内衣大促推广计划</a></li>
                                <li>派单用户：代理商 / 华艺数码</li>
                                <li>推广时间：2012-02-07 20:25</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>派单量：35个微博</li>
                                <li>执行量：30个已执行</li>
                                <li>覆盖人群：0</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 元</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><em class="ico urgent_ico space_ico"></em>待审核</li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a class="direct">审核</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a href="">编辑推广</a>
                                        <a href="">取消推广</a>
                                        <a href="">重新筛选</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><input type="checkbox" class="checkbox_id" value="0"> 推广ID：2045<em class="ico sina_ico"></em></li>
                                <li><a href="">[转发]双十一内衣大促推广计划</a></li>
                                <li>派单用户：代理商 / 华艺数码</li>
                                <li>推广时间：2012-02-07 20:25</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>派单量：35个微博</li>
                                <li>执行量：30个已执行</li>
                                <li>覆盖人群：0</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 元</li>
                                <li>实消：6530 元</li>
                                <li>成本：1869.00 元</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><em class="ico ing_ico space_ico"></em>派单进行中</li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a class="direct" href="javascript://" onclick="ui.add_pop('编辑活动推广', '520','360' , 'ajax_editActAdm.php','')">编辑</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a href="">审核反链</a>
                                        <a href="">设为完成</a>
                                        <a href="">取消推广</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><input type="checkbox" class="checkbox_id" value="0"> 推广ID：2045<em class="ico sina_ico"></em></li>
                                <li><a href="">[转发]双十一内衣大促推广计划</a></li>
                                <li>推广时间：2012-02-07 20:25</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>派单量：35个微博</li>
                                <li>执行量：30个已执行</li>
                                <li>覆盖人群：5621万</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>预算：56200 元</li>
                                <li>实消：53820 元</li>
                                <li>成本：1869.00 元</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><em class="ico complete_ico space_ico"></em>已完成</li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a class="direct">效果</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a href="">编辑推广</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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