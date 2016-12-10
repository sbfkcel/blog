<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="tag_menu">
            <li><a href="my_edit.php">资料修改</a></li>
            <li class="current"><a href="my_password.php">密码修改</a></li>
        </ul>
        <div class="main_cc">
            <ul class="article_from admin_plan">
                <li class="fixed">
                    <label class="input_label" for="OldPassword">原始密码：</label>
                    <input class="input_txt" type="text" name="" id="OldPassword"/>
                    <span class="Validform_checktip">请输入原始密码</span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="NewPassword">新密码：</label>
                    <input class="input_txt" type="text" name="" id="NewPassword" />
                    <span class="Validform_checktip">6-16个字符，请使用字母加数字或特别字符组成</span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="ConfirmPassword">确认密码：</label>
                    <input class="input_txt" type="text" name="" id="ConfirmPassword" />
                    <span class="Validform_checktip">请再次输入密码</span>
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