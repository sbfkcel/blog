<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <div class="tips icotip">
            <em class="ico"></em>
            数据统计：共 <strong>4</strong> 条U币财务记录，<strong>0</strong> 条转现记录， <strong>2</strong> 条兑换充值记录
        </div>
        <ul class="tag_menu">
            <li><a href="admin_bill.php">财务管理</a></li>
            <li class="current"><a href="admin_bill_ub.php">U币管理</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <div class="filter_element drop_down_time">
                        <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                        <em class="ico"></em>
                    </div>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">用户类型<em class="ico"></em></a></li>
                        <li class="options">
                            <a>所有用户</a>
                            <a>微博主</a>
                            <a>广告主</a>
                            <a>代理商</a>
                        </li>
                    </ul>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">充值平台<em class="ico"></em></a></li>
                        <li class="options">
                            <a>所有充值</a>
                            <a>支付宝</a>
                            <a>网银在线</a>
                        </li>
                    </ul>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">明细类型<em class="ico"></em></a></li>
                        <li class="options">
                            <a>所有明细</a>
                            <a>待处理</a>
                            <a>已完成</a>
                        </li>
                    </ul>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                </li>
                <li class="row">
                    <ul class="filtered_check">
                        <li><input type="checkbox" name="" id="tencent"><label for="tencent">应付款</label></li>
                        <li class="line"></li>
                    </ul>
                    <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'袁军5'},{value:772,label:'郑海超'},{value:773,label:'黄泽榕'},{value:1394,label:'熊能'},{value:1395,label:'李博涯'},{value:1396,label:'张杨'},{value:1397,label:'alenli@ad91.com'},{value:1398,label:'李珏伸'},{value:1399,label:'高潺'},{value:1401,label:'李建华'},{value:1402,label:'黎道林'},{value:1403,label:'周路生'},{value:1469,label:'陈裕'},{value:1471,label:'蔡锐嘉'},{value:1526,label:'黄泰霖'}]" onclick="ui.list_item($(this),'客户助理','','single')"><span>客户助理</span><em class="ico"></em></a>
                </li>
                <li class="selected_term fixed">
                    <dl>
                        <dt>已选条件</dt>
                        <dd></dd>
                    </dl>
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
                <li class="row"><span class="title_name">状态 / 时间</span></li>
                <li class="row"><span class="title_name">详情 / 备注</span></li>
                <li class="row">
                    <ul class="drop_down">
                        <li class="title"><a href="">操作<em class="ico"></em></a></li>
                        <li class="options">
                            <a href="javascript://">设为已提现</a>
                            <a href="javascript://">取消已提现</a>
                            <a href="javascript://">批量添加备注</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> 兑换充值</li>
                            <li>&#165;<strong>5000.00</strong></li>
                            <li>微博主 - <a>317697411@qq.com</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><em class="ico complete_ico space_ico"></em>已完成</li>
                            <li>操作：2012-12-16 10:34</li>
                            <li>审核：2012-12-16 10:34</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>U币转现</li>
                            <li>备注：如果该行无备注内容则不显示</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">备注</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">导出记录</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php for($i; $i<9;$i++){;?>

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