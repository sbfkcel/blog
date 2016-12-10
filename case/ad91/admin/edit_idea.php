<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="stage_box">
                <li class="once once_back">1、创建计划<em class="stage_ico"></em></li>
                <li class="current">2、创意作业中<em class="stage_ico"></em></li>
                <li>3、审核计划<em class="stage_ico"></em></li>
                <li>4、建立推广<em class="stage_ico"></em></li>
                <li>5、完成计划<em class="stage_ico"></em></li>
                <li class="process_log"><em class="ico"></em><a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">详细日志</a></li>
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
                <ul class="article_from">
                    <li class="fixed ider_cc">
                        <label class="input_label" for="">创意内容：</label>
                        <div class="ideabox">
                            <textarea class="textarea_a idea_content"></textarea>
                            <ul>
                                <li class="imgupfile">
                                    <div class="upfile">
                                        <a href="">添加图片</a>
                                        <input type="file" name="" id="" />
                                    </div>
                                    <div class="filepreview_del">
                                        <span class="filename">Chrysanthe...jpg</span><a>删除</a>
                                    </div>
                                </li>
                                <li class="word_tip">还能输入 <strong>140</strong> 字</li>
                            </ul>
                        </div>
                    </li>
                    <li class="fixed ider_cc">
                        <label class="input_label" for="">转发语：</label>
                        <textarea class="textarea_a" style="width:388px;" rows="5"></textarea>
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
<?php include 'footer.php';?>