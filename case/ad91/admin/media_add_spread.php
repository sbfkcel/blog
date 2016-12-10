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
                <ul class="article_from">
                    <li class="fixed parent_box">
                        <label class="input_label" for="">推广名称：</label>
                        <input class="input_txt" type="text" name="" id="" />
                        <a href="javascript://" onclick="ui.load_clientlist($(this));" class="aid_link">从推广计划中选择</a>
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">投放平台：</label>
                        <input class="radio_a" type="radio" name="platform" id="sina" />
                        <label class="options_label" for="sina">新浪微博</label>
                        <input class="radio_a" type="radio" name="platform" id="tencent" />
                        <label class="options_label" for="tencent">腾讯微博</label>
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed parent_box">
                        <label class="input_label" for="">投放类型：</label>
                        <select name="" id="" class="select_a">
                            <option value="">转发</option>
                            <option value="">直发</option>
                        </select>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">投放时间：</label>
                        <input class="input_txt inputDate_a" type="text" name="" id="" value="2012-11-08" size="10" />
                        <input class="input_txt" onclick="ui.range_options($(this),55,6,0,24,'时')" type="text" name="" id="" value="18时" size="4" />
                        <input class="input_txt" onclick="ui.range_options($(this),55,6,0,60,'分',5)" type="text" name="" id="" value="30分" size="4" />
                        <span class="Validform_checktip">剩余68小时42分35秒</span>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">推广预算：</label>
                        <input class="input_txt" type="text" name="" id="" />
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">推广地址：</label>
                        <input class="input_txt" type="text" name="" id="" />
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed ider_cc">
                        <label class="input_label" for="">创意内容：</label>
                        <div class="ideabox">
                            <textarea class="textarea_a idea_content"></textarea>
                            <ul>
                                <li class="imgupfile">
                                    <div class="upfile">
                                        <a>添加图片</a>
                                        <input type="file" name="pic" id="pic" value="" />
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
                    <li class="fixed ider_cc">
                        <label class="input_label" for="">备注：</label>
                        <textarea class="textarea_a" style="width:388px;" rows="3"></textarea>
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