<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="operating_box fixed">
            <li><a class="btn_ico button green_an" href=""><i class="chat_ico"></i>发送手机短信</a></li>
            <li><a class="btn_ico button gray_an" href=""><i class="message_ico"></i>发送站内短信</a></li>
        </ul>
        <div class="tips icotip">
            <em class="ico"></em>
            您有 <strong>1312</strong> 条未读消息
        </div>
        <ul class="tag_menu">
            <li class="current"><a href="">收件箱<strong>（1312）</strong></a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <ul class="filtered_check">
                        <li><input type="checkbox" name="" id="notice" /><label for="notice">系统通知</label></li>
                        <li><input type="checkbox" name="" id="activity" /><label for="activity">站内活动</label></li>
                        <li class="line"></li>
                    </ul>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                </li>
            </ul>
            <ul class="db_listtitle message_title">
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
                <li class="row"><span class="title_name">标题</span></li>
                <li class="row">
                    <ul class="drop_down f_right">
                        <li class="title"><a href="">操作<em class="ico"></em></a></li>
                        <li class="options">
                            <a href="">编辑计划</a>
                            <a href="">审核创意</a>
                            <a href="">查看计划</a>
                            <a href="">取消计划</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="main_cc"> 
            <table class="dblist_table contextmenu msg_context">
                <?php for($l=0;$l<10;$l++){;?>
                <tr>
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id">&nbsp;系统通知</li>
                            <li>2012-02-15 19:00</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>[未读]双12广告主充值满5000赠送免费创意策划两次</li>
                            <li>2012-02-05 18:00</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down f_right">
                            <a class="direct" onclick="ui.message_view($(this))">查看信息</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">删除</a>
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