<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="operating_box fixed">
            <li><a class="btn_ico button green_an" href="javascript://" onclick="ui.add_pop('新增分析链接', '500','70' , 'ajax_add_urlanalyse.php','')"><i class="add_ico"></i>新增分析链接</a></li>
        </ul>
        <ul class="tag_menu">
            <li>
                <a href="admin_setting_info.php">基本设定</a>
            </li>
            <li>
                <a href="admin_setting_api.php">接口设定</a>
            </li>
            <li>
                <a href="">系统用户权限</a>
            </li>
            <li>
                <a href="admin_setting_log.php">系统日志</a>
            </li>
            <li>
                <a href="">合作伙伴</a>
            </li>
            <li>
                <a href="">短链接管理</a>
            </li>
            <li class="current">
                <a href="">链接分析</a>
            </li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <div class="filter_element drop_down_time">
                        <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                        <em class="ico"></em>
                    </div>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
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
                    <span class="title_name">最后更新</span>
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
                                <li><input type="checkbox" class="checkbox_id"/> 转发总数：1224</li>
                                <li><a>http://e.weibo.com/1682454721/z8wclhc46</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>2012-12-07 16:42</li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a class="direct">分析</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a href="">导出详情</a>
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
