<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="tag_menu">
            <li class="current"><a href="admin_bill.php">反馈列表</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row"> 
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">问题状态<em class="ico"></em></a></li>
                        <li class="options">
                            <a>不限状态</a>
                            <a>未处理</a>
                            <a>处理中</a>
                            <a>已处理</a>
                        </li>
                    </ul>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="30" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
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
                <li class="row"><span class="title_name">内容</span></li>
                <li class="row">
                    <span class="title_name">操作</span>
                </li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i; $i<10;$i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> 未处理</li>
                            <li>微博主 / <a href="" target="_blank">2209273419@qq.com</a></li>
                            <li>反馈时间：2012-12-16 10:34</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>今天我在您这发了1310的广告怎么只有150的钱呢，待确认里面也没有事什么情况呢</li>
                            <li>来源：http://www.ad91.com/my_info</li>
                            <li>备注：</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct" onclick="ui.add_pop('处理问题', '480','' , 'ajax_feedback_reply.php','')">处理问题</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">删除该反馈</a>
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