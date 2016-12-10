<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="operating_box fixed">
            <li><a class="btn_ico button green_an" href="javascript://" onclick="ui.add_pop('添加短链接', '500','130' , 'ajax_add_url.php','')"><i class="add_ico"></i>添加新短链</a></li>
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
            <li class="current">
                <a href="">短链接管理</a>
            </li>
            <li>
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
                    <input size="30" type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
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
                    <span class="title_name">链接/短链</span>
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
                                <li><input type="checkbox" class="checkbox_id"/> 可爱棒棒糖8短靴</li>
                                <li>2012-12-08 09:56 由 张杨创建</li>
                                <li>点击量：0</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="" target="_blank">http://item.taobao.com/item.htm?spm=a1z10.1.28-872484115...</a></li>
                                <li>短链：<a href="" target="_blank">http://91.io/Mjky</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a class="direct">编辑</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a href="">删除该短链</a>
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
