<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <div class="fin_overview">
            <table class="exhibit_table">
                <tr>
                    <td>微博主：</td>
                    <td>总收入<strong>432.98</strong>万元，退款<strong>0</strong>元，扣款<strong>13.56万元</strong>，提现<strong>364.22</strong>万元，提现待打款<strong>18.6</strong>万元，未提现<strong>50.16</strong>万元，待确认款<strong>665.00</strong>元</td>
                </tr>
                <tr>
                    <td>广告主：</td>
                    <td>充值<strong>183.48</strong>万元，总信用额<strong>0.00</strong>元，消费<strong>166.36</strong>万元, 冻结<strong>3744.00</strong>元，退款<strong>3.89</strong>万元, 扣款<strong>1.16</strong>万元，剩<strong>11.7</strong>万元</td>
                </tr>
                <tr>
                    <td>代理商：</td>
                    <td>充值<strong>421.31</strong>万元，总信用额<strong>51.3</strong>万元，消费<strong>328.52</strong>万元, 冻结<strong>5500.00</strong>元，退款<strong>6663.00</strong>元, 扣款<strong>10.11</strong>万元，剩<strong>132.77</strong>万元</td>
                </tr>
            </table>
        </div>
        <ul class="operating_box fixed">
            <li><a class="btn_ico button green_an" onclick="ui.add_pop('线下充值', '500','290' , 'ajax_line_recharge.php','')"><i class="add_ico"></i>线下充值</a></li>
        </ul>
        <ul class="tag_menu">
            <li class="current"><a href="admin_bill.php">财务管理</a></li>
            <li><a href="admin_bill_ub.php">U币管理</a></li>
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
                    <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'袁军5'},{value:772,label:'郑海超'},{value:773,label:'黄泽榕'},{value:1394,label:'熊能'},{value:1395,label:'李博涯'},{value:1396,label:'张杨'},{value:1397,label:'alenli@ad91.com'},{value:1398,label:'李珏伸'},{value:1399,label:'高潺'},{value:1401,label:'李建华'},{value:1402,label:'黎道林'},{value:1403,label:'周路生'},{value:1469,label:'陈裕'},{value:1471,label:'蔡锐嘉'},{value:1526,label:'黄泰霖'}]" onclick="ui.list_item($(this),'客户助理','','single')"><span>客户助理</span><em class="ico"></em></a>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                </li>
                <li class="row">
                    <ul class="filtered_check">
                        <li><input type="checkbox" name="" id="b_01"><label for="b_01">应付款</label></li>
                        <li class="line"></li>
                    </ul>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">状态类型<em class="ico"></em></a></li>
                        <li class="options">
                            <a>不限状态</a>
                            <a>待处理</a>
                            <a>已完成</a>
                        </li>
                    </ul>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">记录类型<em class="ico"></em></a></li>
                        <li class="options">
                            <a>提现记录</a>
                            <a>收入明细</a>
                            <a>充值记录</a>
                            <a>支出明细</a>
                            <a>退款记录</a>
                            <a>扣款记录</a>
                        </li>
                    </ul>
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
                <li class="row"><span class="title_name">详情</span></li>
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
                            <li><input type="checkbox" class="checkbox_id"> 支出 / 收入来源</li>
                            <li>&#165;<strong>5000.00</strong></li>
                            <li>微博主 - <a>317697411@qq.com</a></li>
                            <li>网上银行 / 苏少辉 / 工商银行</li>
                            <li>6222021706000000720 - 河南省安阳市内黄县支行</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><em class="ico problem_ico space_ico"></em>冻结中</li>
                            <li>操作：2012-12-16 10:34</li>
                            <li>审核：2012-12-16 10:34</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>来自推广任务 <a href="">ID为 2279 的推广</a></li>
                            <li><em class="ico sina_ico"></em> <a href="">美剧迷</a> 订单号 <a>38727</a></li>
                            <li>所得金额 <strong>350</strong> 元</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">备注</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">设为已提</a>
                                    <a href="">取消已提</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php for($i=0; $i<20; $i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> 支出 / 收入来源</li>
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
                            <li>来自推广任务 <a href="">ID为 2279 的推广</a></li>
                            <li><em class="ico sina_ico"></em> <a href="">美剧迷</a> 订单号 <a>38727</a></li>
                            <li>所得金额 <strong>350</strong> 元</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">备注</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">设为已提</a>
                                    <a href="">取消已提</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php };?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> 支出 / 收入来源</li>
                            <li>&#165;<strong>5000.00</strong></li>
                            <li>微博主 - <a>317697411@qq.com</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><em class="ico ing_ico space_ico"></em>待转帐</li>
                            <li>操作：2012-12-16 10:34</li>
                            <li>审核：2012-12-16 10:34</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>来自推广任务 <a href="">ID为 2279 的推广</a></li>
                            <li><em class="ico sina_ico"></em> <a href="">美剧迷</a> 订单号 <a>38727</a></li>
                            <li>所得金额 <strong>350</strong> 元</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">备注</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">设为已提</a>
                                    <a href="">取消已提</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
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