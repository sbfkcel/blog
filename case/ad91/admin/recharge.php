<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <div class="tips icotip">
                <em class="ico"></em>
                提醒：当前帐户余额为 <strong>&#165;10</strong>元 ，最低充值 <strong>&#165;2000</strong> 元。
            </div>
            <div class="main_cc">
                <ul class="article_from">
                    <li class="fixed">
                        <label for="" class="input_label">充值金额：</label>
                        <input type="text" class="input_txt" size="18" value="990"/>
                        <span class="Validform_checktip">最低充值 <strong>&#165;2000</strong>元</span>
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