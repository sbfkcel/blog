<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div id="main" class="main">
        <div class="user_outline">
            <ul class="outline">
                <li class="outline_list outline_first">
                    帐户U币：
                    <p class="sum"><strong>56231</strong></p> 
                    <div class="main_top_b">
                        <a class="button orange_an" href="">充值U币</a>
                        <a class="button" href="">U币转现</a>
                        <span class="extract_tips"><em></em>了解 <a href="" title="">什么是U币？</a></span>
                    </div>
                </li>
                <li class="outline_list">
                    可用收入：
                    <p class="sum"><strong>508623.32</strong> 元</p> 
                    <div class="main_top_b">
                        <a class="button" href="">收入提现</a>
                        <span class="extract_tips"><em></em>查看 <a href="" title="">提现规则 &#187;</a></span>
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
                <span>总收入：<strong>463</strong></span>
                <span>已结算：<strong>2560</strong></span>
                <span>已扣款：<strong>463</strong></span>
                <span>已退款：<strong>463</strong></span>
                <span>待结算：<strong>89562</strong></span>
                <span>待确认：<strong>89562</strong></span>
                <span>帐户积分：<strong>89562</strong></span>
            </div>
        </div>
        <ul class="tag_menu">
            <li class="current"><a href="">财务日志</a></li>
            <li><a href="">U币日志</a></li>
        </ul>
        <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <div class="filter_element drop_down_time">
                            <input type="text" class="filter_input_txt inputDate" f="create_time" value="" size="26" title="不限时间" />
                            <em class="ico"></em>
                        </div>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">所有类型<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">所有类型</a>
                                <a href="javascript://">提现记录</a>
                                <a href="javascript://">收入明细</a>
                                <a href="javascript://">充值记录</a>
                                <a href="javascript://">支出明细</a>
                            </li>
                        </ul>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">充值平台<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">充值平台</a>
                                <a href="javascript://">支付宝</a>
                                <a href="javascript://">网银在线</a>
                            </li>
                        </ul>
                        <input type="text" class="filter_element filter_input_txt input_f_s" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                </ul>
                <ul class="db_listtitle">
                    <li class="row">
                        <ul class="drop_down ">
                            <li class="title"><a href="">队列<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://" onclick="table.checkAll()">全选</a>
                                <a href="javascript://" onclick="table.checkNO()">不选</a>
                                <a href="javascript://" onclick="table.checkOpp()">反选</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row"><span class="title_name">金额</span></li>
                    <li class="row"><span class="title_name">类型</span></li>
                    <li class="row"><span class="title_name">操作时间</span></li>
                    <li class="row"><span class="title_name">审核时间</span></li>
                    <li class="row"><span class="title_name">状态</span></li>
                    <li class="row"><span class="title_name">详情</span></li>
                </ul>
            </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i=0;$i<20;$i++){;?>
                <tr class="tbelected_list">
                    <td>
                        <ul>
                            <li class="added_td"><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>"/> 5623</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>&#165;185.0</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>支出</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>13-01-07 18:30</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>13-01-07 18:30</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><em class="ico orange_ing_ico space_ico"></em>待审核</li>
                        </ul>
                    </td>
                    <td width="240" class="break_all">
                        <ul>
                            <li>操作详细情况</li>
                        </ul>
                    </td>
                </tr>
                <?php };?>
            </table>
        </div>
        <div class="b_fixed fixed">
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