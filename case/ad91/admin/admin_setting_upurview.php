<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="operating_box fixed">
            <li><a class="btn_ico button green_an" target="_blank" href="admin_setting_edit_upurview.php"><i class="add_ico"></i>添加管理员</a></li>
            <li><a class="btn_ico button" href="javascript://" onclick="ui.add_pop('编辑管理组', '520','' , 'ajax_edit_group.php','')"><i class="pen_ico"></i>编辑管理组</a></li>
        </ul>
        <ul class="tag_menu">
            <li class="current">
                <a href="">管理权限设定</a>
            </li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <a class="list_item" href="javascript://" sc="品牌组" cc="品牌组,创意组,客户组,媒介组,客服组,财务组,系统管理组" onclick="ui.list_item($(this),'管理分组','')"><span>管理分组</span><em class="ico"></em></a>
                    <div class="filter_element drop_down_time">
                        <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                        <em class="ico"></em>
                    </div>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                </li>
                <li class="selected_term fixed">
                    <dl>
                        <dt>已选条件</dt>
                        <dd></dd>
                    </dl>
                </li>
            </ul>
            <ul class="db_listtitle">
                <li class="row">
                    <ul class="drop_down">
                        <li class="title"><a href="">选择<em class="ico"></em></a></li>
                        <li class="options">
                            <a href="javascript://" onclick="table.checkAll()">全选</a>
                            <a href="javascript://" onclick="table.checkNO()">不选</a>
                            <a href="javascript://" onclick="table.checkOpp()">反选</a>
                        </li>
                    </ul>
                </li>
                <li class="row">
                    <span class="title_name">状态</span>
                </li>
                <li class="row">
                    <span class="title_name">帐号添加时间</span>
                </li>
                <li class="row">
                    <span class="title_name">操作</span>
                </li>
            </ul>
        </div>
        <div class="main_cc">
                <table class="dblist_table contextmenu">
                    <?php for($i=0;$i<10;$i++){ ?>
                    <tr>
                        <td>
                            <ul>
                                <li><input type="checkbox" class="checkbox_id"/> haiting@ad91.com</li>
                                <li>邸海亭 / 系统管理组</li>
                                <li></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>正常</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-12-07 16:42</li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a class="direct">编辑查看</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a href="">冻结该帐号</a>
                                        <a href="">删除该帐号</a>
                                    </li>
                                </ul>
                            </div>
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
<?php include 'footer.php'; ?>
