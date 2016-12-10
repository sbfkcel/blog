<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="tag_menu">
            <li><a href="admin_daihao.php">带号管理</a></li>
            <li><a href="admin_score.php">积分日志</a></li>
            <li class="current"><a href="admin_giftexchange.php">积分兑换列表</a></li>
            <li><a href="admin_gift.php">积分礼品列表</a></li>
            <li><a href="admin_score_rank.php">积分排行</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <div class="filter_element drop_down_time">
                        <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                        <em class="ico"></em>
                    </div>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
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
                <li class="row"><span class="title_name">地址信息</span></li>
                <li class="row"><span class="title_name">状态 / 详情</span></li>
                <li class="row"><span class="title_name">操作</span></li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i; $i<10;$i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id" value="0"> 礼品名称</li>
                            <li>所需积分：8564.00</li>
                            <li>申请时间：2012-10-19 06:05</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>jeky</li>
                            <li>13800138000</li>
                            <li>广东省广州市XX区</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>已发货</li>
                            <li>顺丰快递 / 8564121</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct" onclick="table.weibo_added()">通过申请</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">拒绝申请</a>
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