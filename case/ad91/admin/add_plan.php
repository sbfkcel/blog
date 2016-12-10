<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="stage_box">
                <li class="current">1、创建计划<em class="stage_ico"></em></li>
                <li>2、创意作业中<em class="stage_ico"></em></li>
                <li>3、审核计划<em class="stage_ico"></em></li>
                <li>4、建立推广<em class="stage_ico"></em></li>
                <li>5、完成计划<em class="stage_ico"></em></li>
                <li class="process_log"><em class="ico"></em><a href="javascript://" onclick="ui.add_pop('推广计划日志跟踪', '500','' , 'ajax_plan_log.php','')">详细日志</a></li>
            </ul>
            <div class="main_cc">
                <ul class="article_from admin_plan">
                    <li class="fixed">
                        <label class="input_label" for="">计划名称：</label>
                        <input class="input_txt" type="text" name="" id="" />
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed parent_box">
                        <label class="input_label" for="">所属客户：</label>
                        <input class="input_txt input_associate" type="text" name=""  id="" />
                        <a href="javascript://" onclick="ui.load_clientlist($(this));" class="aid_link">从客户列表选择</a>
                        <span class="Validform_checktip">输入提示支持帐号、电话号码、客户名称、助理名称</span>
                    </li>
                    
                    <li class="fixed">
                        <label class="input_label" for="">投放平台：</label>
                        <input class="radio_a" type="radio" name="platform" id="sina" />
                        <label class="options_label" for="sina">新浪微博</label>
                        <input class="radio_a" type="radio" name="platform" id="tencent" />
                        <label class="options_label" for="tencent">腾讯微博</label>
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">推广时间：</label>
                        <input class="input_txt inputDate_a" type="text" name="" id="" value="2012-11-08" size="10" />
                        <input class="input_txt" onclick="ui.range_options($(this),55,6,0,24,'时')" type="text" name="" id="" value="18时" size="4" />
                        <input class="input_txt" onclick="ui.range_options($(this),55,6,0,60,'分',5)" type="text" name="" id="" value="30分" size="4" />
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">费用预算：</label>
                        <input class="input_txt" type="text" name="" id="" />
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">链接地址：</label>
                        <input class="input_txt" type="text" name="" id="" />
                        <span class="Validform_checktip"></span>
                    </li>
                    <li class="fixed">
                        <label class="input_label" for="">&nbsp;</label>
                        <input class="checkbox_a" type="checkbox" name="" id="write_ider" />
                        <label class="options_label" for="write_ider">填写创意</label>
                    </li>
                    <li class="fixed ider_cc">
                        <label class="input_label" for="">创意内容：</label>
                        <div class="ideabox">
                            <textarea class="textarea_a idea_content"></textarea>
                            <label  class="cose_b" for="write_ider"></label>
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