<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="stage_box">
                <li class="once">1、创建推广<em class="stage_ico"></em></li>
                <li class="once">2、选择博主<em class="stage_ico"></em></li>
                <li class="once once_back">3、确认推广<em class="stage_ico"></em></li>
                <li class="current">4、提交订单<em class="stage_ico"></em></li>
            </ul>
            <div class="warn_tips">
                提醒：当前帐户余额为 <stron>￥10</stron>元 ，离完成本次推广尚需充值 <strong>￥890</strong> 元。
            </div>
            <div class="main_cc">
                <ul class="article_from">
                    <li class="fixed">
                        <label for="" class="input_label">充值金额：</label>
                        <input type="text" class="input_txt" size="6" value="990"/>
                        <span class="Validform_checktip">完成本次推广，至少尚需充值 <strong>￥990</strong>元</span>
                    </li>
                </ul>
                <ul class="article_from">
                    <li class="payment_list fixed">
                        <label class="input_label">&nbsp;</label>
                        <input id="alipay" class="radio_a" name="payment" value="1" type="radio" checked="">
                        <label for="alipay" class="payment alipay_logo"></label>
                        <span>支付宝支付。支持大额支付，最高 <strong>200</strong>万/笔</span>
                    </li>
                    <li class="payment_list fixed">
                        <label class="input_label">&nbsp;</label>
                        <input id="chinabank" class="radio_a" name="payment" type="radio" value="0" checked />
                        <label for="chinabank" class="payment chinabank_logo"></label>
                        <span>网银在线，支持多家银行在线支付</span>
                    </li>
                </ul>
                <ul class="article_from_submit">
                    <li class="fixed">
                        <label for="" class="input_label">&nbsp;</label>
                        <button class="button blue_an">提交充值</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>