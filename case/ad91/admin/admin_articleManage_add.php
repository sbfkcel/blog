<?php include 'header.php'; ?>
<script src="/kindeditor/kindeditor-min.js"></script>
<script src="/kindeditor/lang/zh_CN.js"></script>
<script>
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('.editor_textarea',{
            themeType : 'simple',
            resizeType : 1,
            allowPreviewEmoticons : false,
            allowImageUpload : false,
            items : [
                'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', '|', 'emoticons', 'image', 'link']
        });
    });
</script>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <div class="main_cc">
            <ul class="article_from admin_plan">
                <li class="fixed">
                    <label class="input_label" for="">文章标题：</label>
                    <input class="input_txt" type="text" name="" id="" size="50" />
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label" for="">属性：</label>
                    <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                    <label for="purview_0" class="options_label">推荐</label>

                    <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                    <label for="purview_0" class="options_label">特荐</label>

                    <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                    <label for="purview_0" class="options_label">幻灯</label>

                    <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                    <label for="purview_0" class="options_label">置顶</label>

                    <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                    <label for="purview_0" class="options_label">跳转</label>
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label for="" class="input_label">跳转URL：</label>
                    <input class="input_txt" type="text" name="" id="" size="50" title="http://" />
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label for="" class="input_label">分类：</label>
                    <select class="select_a" name="" id="">
                        <option value="0">选择分类</option>
                        <option value="1">微博主常见问题</option>
                        <option value="2">广告主常见问题</option>
                        <option value="3">代理商常见问题</option>
                        <option value="4">案例展示</option>
                        <option value="5">行业新闻</option>
                        <option value="6">常见问题</option>
                        <option value="7">代理公告</option>
                        <option value="8">最新通知</option>
                    </select>
                </li>
                <li class="fixed">
                    <label for="" class="input_label">内容概要：</label>
                    <textarea class="textarea_a" cols="41" rows="3"></textarea>
                    <span class="Validform_checktip"></span>
                </li>
                <li class="fixed">
                    <label class="input_label">缩略图：</label>
                    <input type="hidden" id="img" name="img" value="">
                    <span class="upfile"><object type="application/x-shockwave-flash" id="upfile" width="230" height="32"><param name="menu" value="false"><param name="scale" value="noScale"><param name="allowFullscreen" value="true"><param name="allowScriptAccess" value="always"><param name="bgcolor" value=""><param name="wmode" value="direct"><param name="src" value="http://dev.ad91.com/flash/upfile.swf?o=img&amp;url=http://dev.ad91.com/my_upload/?dirname=gift_images"></object></span>
                    <span class="Validform_checktip"> &nbsp;规格：185*155</span>
                </li>
                <li class="fixed">
                    <label for="" class="input_label">文章内容：</label>
                    <textarea class="textarea_a editor_textarea" cols="100" rows="15"></textarea>
                    <span class="Validform_checktip"></span>
                </li>


            </ul>
            <ul class="article_from_submit">
                <li class="fixed">
                    <label for="" class="input_label">&nbsp;</label>
                    <button class="button blue_an">确认提交</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>