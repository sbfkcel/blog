<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="tag_menu">
            <li class="current"><a href="my_edit.php">资料修改</a></li>
            <li><a href="my_password.php">密码修改</a></li>
        </ul>
        
        <div class="main_cc">
            <ul class="article_from admin_plan">
                <li class="fixed">
                    <label class="input_label" for="LoginUsername">登录帐号：</label>
                    <input class="input_txt" type="text" name="" id="LoginUsername" value="7622512@qq.com" disabled/>
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">称呼：</label>
                    <input class="radio_a" type="radio" name="platform" id="sir" />
                    <label class="options_label" for="sir">先生</label>
                    <input class="radio_a" type="radio" name="platform" id="ms" />
                    <label class="options_label" for="ms">女士</label>
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="name">姓名/公司名：</label>
                    <input class="input_txt" type="text" name="" id="name" />
                    <span class="Validform_checktip">请输入姓名或公司名称</span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="tel">联系电话：</label>
                    <input class="input_txt" type="text" name="" id="tel" />
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="phone">手机号码：</label>
                    <input class="input_txt" type="text" name="" id="phone" value="13925158689" disabled />
                    <span class="Validform_checktip"><a href="javascript://" title="" onclick="ui.add_pop('验证手机', '400','180' , 'ajax_mobileVerifyWin.php','')">解除绑定</a></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="qq">QQ：</label>
                    <input class="input_txt" type="text" name="" id="qq" />
                    <span class="Validform_checktip"></span>
                </li>
            </ul>
        </div>
        <ul class="article_from_submit">
            <li class="fixed">
                <label for="" class="input_label">&nbsp;</label>
                <button class="button blue_an">确认提交</button>
            </li>
        </ul>
    </div>
</div>

<?php include 'footer.php'; ?>