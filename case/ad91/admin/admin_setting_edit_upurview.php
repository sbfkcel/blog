<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="operating_box fixed">
            <li><a class="btn_ico button green_an" target="_blank" href="admin_setting_edit_upurview.php"><i class="add_ico"></i>添加管理员</a></li>
            <li><a class="btn_ico button" href="javascript://" onclick="ui.add_pop('编辑管理组', '520','' , 'ajax_edit_group.php','')"><i class="pen_ico"></i>编辑管理组</a></li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">管理帐号：</label>
                <input class="input_txt" type="text" name="" id="">
                <span class="Validform_checktip">即后台登录帐号</span>
            </li>
            <li class="fixed">
                <label class="input_label" for="">用户昵称：</label>
                <input class="input_txt" type="text" name="" id="">
                <span class="Validform_checktip">工作人员姓名</span>
            </li>
            <li class="fixed">
                <label class="input_label" for="">登录密码：</label>
                <input class="input_txt" type="text" name="" id="">
                <span class="Validform_checktip"></span>
            </li>
            <li class="fixed">
                <label class="input_label" for="">用户组别：</label>
                <select class="select_a" name="" id="">
                    <option value="">用户组别</option>
                    <option value="">品牌组</option>
                    <option value="">创意组</option>
                    <option value="">客户组</option>
                    <option value="">媒介组</option>
                    <option value="">客服组</option>
                    <option value="">账务组</option>
                    <option value="">系统管理组</option>
                </select>
                <span class="Validform_checktip"></span>
            </li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">操作权限：</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label"><strong>用户帐号管理</strong></label>
            </li>
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">博主可查看广告主与代理商</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">审核用户</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">编辑用户</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">密码</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">打折</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">信用额度</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">调用收藏</label>
            </li>
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">设为待审核</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">指派助理</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">登录她</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">冻结用户</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">导出用户</label>
            </li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label"><strong>审核微博</strong></label>
            </li>
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">取消审核</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">编辑微博</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">冻结微博</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">推荐微博</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">更新微博</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">导出微博</label>
            </li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label"><strong>推广管理</strong></label>
            </li>
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">查看预算</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">查看成本</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">查看实际消费</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">审核推广</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">编辑推广</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">审核返链</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">设为完成</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">发短信</label>
            </li>
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">生成效果</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">重新生成财务</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">获取返链转发数</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">导出推广</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">推广主管</label>
            </li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label"><strong>文章管理</strong></label>
            </li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label"><strong>带号管理</strong></label>
            </li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label"><strong>财务管理</strong></label>
            </li>
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">查看财务汇总</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">充值</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">设为已提现</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">取消已提现</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">备注财务</label>
            </li>
        </ul>
        <ul class="article_from">
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label"><strong>系统设置</strong></label>
            </li>
            <li class="fixed">
                <label class="input_label" for="">&nbsp;</label>
                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">接口设定</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">系统用户权限</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">系统日志</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">合作伙伴</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">短链接管理</label>

                <input class="checkbox_a" name="purview[]" id="purview_0" type="checkbox" value="x01">
                <label for="purview_0" class="options_label">链接分析</label>
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
<?php include 'footer.php'; ?>
