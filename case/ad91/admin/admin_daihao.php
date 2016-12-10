<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="tag_menu">
            <li class="current"><a href="admin_daihao.php">带号管理</a></li>
            <li><a href="admin_score.php">积分日志</a></li>
            <li><a href="admin_giftexchange.php">积分兑换列表</a></li>
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
                <li class="row"><span class="title_name">队列</span></li>
                <li class="row"><span class="title_name">粉丝覆盖</span></li>
                <li class="row"><span class="title_name">派单&执行量</span></li>
                <li class="row"><span class="title_name">预算&实消</span></li>
                <li class="row"><span class="title_name">操作</span></li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i; $i<10;$i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li>[转发] <a href="" title="">带号的哦</a> <em class="ico sina_ico"></em></li>
                            <li>微博主 / <a href="">1300615689@qq.com</a></li>
                            <li>2012-10-19 06:05</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>1912156</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>总派单：<strong>3</strong> ， 已执行：<strong>1</strong></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>10.00 / 0.00(U币)</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="">查看</a></li>
                        </ul>
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