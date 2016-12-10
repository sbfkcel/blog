<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="stage_box">
                <li class="once">1、创建推广<em class="stage_ico"></em></li>
                <li class="once once_back">2、选择博主<em class="stage_ico"></em></li>
                <li class="current">3、确认推广<em class="stage_ico"></em></li>
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
                        <label for="" class="input_label">推广时间：</label>
                        <span class="options_label">2012-0207 20:25</span>
                    </li>
                    <li class="fixed">
                        <label for="" class="input_label">推广时间：</label>
                        <span class="options_label"><a href="#">http://www.ad91.com</a></span>
                    </li>
                </ul>
                <div class="view_iderbox">
                    <table class="show_table">
                        <tr>
                            <td class="title">创意作者：</td>
                            <td>棠如</td>
                        </tr>
                        <tr>
                            <td class="title">创意图片：</td>
                            <td><a href="">../upload/rec_images/1352431413.jpg</a></td>
                        </tr>
                        <tr>
                            <td class="title">创意内容：</td>
                            <td>今年大肆盛行的复古麻花毛衣，最适合简单你的啦~！粗毛线面料，手感舒适很亲肤哟~~[太开心]冷一些的话，外搭小外套，冬天搭配呢大衣or羽绒服都可以的[亲亲]【麻花毛衣】>>> <a href="#">http://t.cn/zjva505</a></td>
                        </tr>
                        <tr>
                            <td class="title">转发语：</td>
                            <td>今年大肆盛行的复古麻花毛衣[太开心]有没有让你想到儿时的自己呢！【麻花毛衣】<a href="">http://t.cn/zjva505</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <ul class="tag_menu">
                <li class="current"><a href="">已为本次活动选择 <stron>2</stron> 个微博</a></li>
            </ul>
            <table class="show_table">
                <tr class="title">
                    <td>微博名称</td>
                    <td>数丝量</td>
                    <td>本次任务价格</td>
                </tr>
                <?php for($i=0;$i<10;$i++){;?>
                <tr class="list" listid="<?php echo $i;?>">
                    <td><em class="ico sina_ico"></em><a href="">双十一内衣大促推广计划</a></td>
                    <td>708624 男80% 女20%</td><td>￥<span class="exhibit_prices">258</span></td>
                </tr>
                <?php };?>
            </table>
            <ul class="article_from_submit">
                <li class="fixed">
                    <button class="button blue_an" onclick="javascript:window.location.href=('spread_submit.php')">确定并提交订单</button>
                    <button class="button">返回修改</button>
                </li>
            </ul>
        </div>
    </div>
<?php include 'footer.php';?>