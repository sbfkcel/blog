<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="operating_box fixed">
            <li><a class="btn_ico button" onclick="ui.add_pop('添加礼品', '500','' , 'ajax_giff_add.php','')"><i class="add_ico"></i>添加礼品</a></li>
        </ul>
        <ul class="tag_menu">
            <li><a href="admin_daihao.php">带号管理</a></li>
            <li><a href="admin_score.php">积分日志</a></li>
            <li><a href="admin_giftexchange.php">积分兑换列表</a></li>
            <li class="current"><a href="admin_gift.php">礼品列表</a></li>
            <li><a href="admin_score_rank.php">积分排行</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="30" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
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
                <li class="row"><span class="title_name">库存 / 状态</span></li>
                <li class="row"><span class="title_name">操作</span></li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i; $i<10;$i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id" value="0"> Ipad2-(黑白)-16G</li>
                            <li>礼品图片：<a href="#" target="_blank">url/img.png</a></li>
                            <li>所需积分：8564.00</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>排序：1</li>
                            <li>库存：99999 / 可兑换</li>
                            <li>礼品价格：2988.00</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">编辑礼品</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">删除该礼品</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php };?>
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