<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <div class="user_outline">
            <ul class="outline">
                <li class="outline_list outline_first">
                    用户余额：
                    <p class="sum"><strong>5863.32</strong> 元</p> 
                    <div class="main_top_b">
                        <a class="btn_ico button orange_an" href=""><i class="money_ico"></i>账户充值</a>
                        <span class="extract_tips"><em></em>客户热线：<strong>400-076-9991</strong></span>
                    </div>
                </li>
                <li class="outline_list outline_last">
                    <p>账号：<strong>19664828022</strong> [广告主]</p>
                    <p>邮箱：<span>fan02@qq.com</span></p>
                    <p>号码：<span>19664828022</span><a href=""> [验证]</a></p>
                    <p>IP：<span>183.401.122.109 / 2012-12-13 15:40</span></p>
                </li>
            </ul>
            <div class="statistic">
                <span>消费金额：<strong>135</strong>元</span>
                <span>冻结金额：<strong>135</strong>元</span>
                <span>近一年交易支出：<strong>859351.0</strong>元</span>
            </div>
        </div>
        <ul class="tag_menu">
            <li class="current"><a href="">财务流水日志</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <div class="filter_element drop_down_time">
                        <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                        <em class="ico"></em>
                    </div>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">充值平台<em class="ico"></em></a></li>
                        <li class="options">
                            <a>充值平台</a>
                            <a>支付宝</a>
                            <a>网银在线</a>
                        </li>
                    </ul>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">所有类型<em class="ico"></em></a></li>
                        <li class="options">
                            <a>所有类型</a>
                            <a>充值记录</a>
                            <a>支出记录</a>
                        </li>
                    </ul>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
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
                <li class="row"><span class="title_name">时间</span></li>
                <li class="row"><span class="title_name">项目详情</span></li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> 支出 / 冻结中</li>
                            <li>&#165;<strong>5000.00</strong></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>操作时间：2012-12-16 10:34</li>
                            <li>审核时间：2012-12-16 10:34</li>
                        </ul>
                    </td>
                    <td><ul><li>推广活动 <a href="">ID 1910</a> 预付金额 &#165;5000.00</li></ul></td>
                </tr>
                <?php for($i; $i<9;$i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> 充值 / 已完成</li>
                            <li>&#165;<strong>5000.00</strong></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>操作时间：2012-12-16 10:34</li>
                            <li>审核时间：2012-12-16 10:34</li>
                        </ul>
                    </td>
                    <td><ul><li>支付宝充值,订单号：20121106-3900-1464-173945</li></ul></td>
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