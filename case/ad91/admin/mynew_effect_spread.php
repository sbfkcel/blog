<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="datasheet_bar">
            <li>
                <span>编号：2269 / 转发 / 新浪微博 / 皮草马甲11 效果数据表</span>
            </li>
        </ul>
        <div class="main_cc">
            <ul class="tag_menu">
                <li><a href="mynew_effect.php">推广效果</a></li>
                <li><a href="mynew_effect_source.php">访问来源</a></li>
                <li><a href="mynew_effect_review.php">转发评论</a></li>
                <li><a href="mynew_effect_cover.php">覆盖分析</a></li>
                <li><a href="mynew_effect_result.php">成效分析</a></li>
                <li class="current"><a href="mynew_effect_spread.php">传播路径</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">推广5分钟内<em class="ico"></em></a></li>
                            <li class="options">
                                <a>推广10分钟内</a>
                                <a>推广15分钟内</a>
                                <a>推广30分钟内</a>
                                <a>推广1小时内</a>
                            </li>
                        </ul>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                </ul>
            </div>
            <table class="chart_box">
                <tr>
                    <td id="spread_effect" width="100%" height="600">
                        传播路径图调用方式与示样见旧版
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>