<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="stage_box">
                <li class="current">1、创建推广<em class="stage_ico"></em></li>
                <li>2、选择博主<em class="stage_ico"></em></li>
                <li>3、确认推广<em class="stage_ico"></em></li>
                <li>4、提交订单<em class="stage_ico"></em></li>
            </ul>
            <div class="main_cc">
                <ul class="article_list">
                    <li class="fixed">
                        <label for="" class="input_label">计划名称：</label>
                        <span class="options_label">双十一内衣大促推广计划<em class="ico sina_ico"></em></span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">客户名称：</label>
                        <span class="options_label">要记住我的店</span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">创建时间：</label>
                        <span class="options_label">2012-0207 20:25</span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">推广时间：</label>
                        <span class="options_label">2012-0207 20:25</span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">预算：</label>
                        <span class="options_label">&#165; 8000.00</span>
                    </li>
                </ul>
                <div class="view_iderbox">
                    <table class="show_table">
                        <tr>
                            <td class="title">创意作者：</td>
                            <td colspan="2">棠如</td>
                        </tr>
                        <tr>
                            <td class="title">转发语：</td>
                            <td>请跟据自己Weibo语气，自行拟定转发语！</td>
                            <td width="100" class="center">
                                <div class="direct_drop_down">
                                    <a class="direct">复制文本</a>
                                    <ul class="drop_down">
                                        <li class="title"><a href=""><em class="ico"></em></a></li>
                                        <li class="options">
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">转发地址：</td>
                            <td><a href="http://weibo.com/2629511392/z9qCT5NKt" target="_blank">http://weibo.com/2629511392/z9qCT5NKt</a></td>
                            <td class="center" width="100">
                                <div class="direct_drop_down">
                                    <a class="direct">复制地址</a>
                                    <ul class="drop_down">
                                        <li class="title"><a href=""><em class="ico"></em></a></li>
                                        <li class="options">
                                            <a href="" target="_blank">查看该条微博</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">备注：</td>
                            <td colspan="2">请在晚上20:00-22:00 进行推广，主要地区北京、广东、江浙沪</td>
                        </tr>
                    </table>
                    <ul class="article_from_submit">
                        <li class="fixed">
                            <button class="button blue_an" onclick="javascript:window.location.href=('spread_submit.php')">提交选择博主</button>
                            <button class="button">编辑</button>
                            <button class="button">返回列表</button>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
<?php include 'footer.php';?>