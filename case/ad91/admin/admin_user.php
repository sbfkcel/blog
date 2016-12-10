<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <div class="tips icotip">
            <em class="ico"></em>
            数据统计：共有 <strong>1757</strong> 个注册用户，微薄主 <strong>1155</strong>  个， 广告主 <strong>525</strong>  个， 代理商 <strong>77</strong>  个
        </div>
        <ul class="tag_menu">
            <li class="current"><a>所有用户</a></li>
            <li><a>博主用户</a></li>
            <li><a>广告主</a></li>
            <li><a>代理商</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row"> 
                    <div class="filter_element drop_down_time">
                        <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间">
                        <em class="ico"></em>
                    </div>
                    <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'袁军5'},{value:772,label:'郑海超'},{value:773,label:'黄泽榕'},{value:1394,label:'熊能'},{value:1395,label:'李博涯'},{value:1396,label:'张杨'},{value:1397,label:'alenli@ad91.com'},{value:1398,label:'李珏伸'},{value:1399,label:'高潺'},{value:1401,label:'李建华'},{value:1402,label:'黎道林'},{value:1403,label:'周路生'},{value:1469,label:'陈裕'},{value:1471,label:'蔡锐嘉'},{value:1526,label:'黄泰霖'}]" onclick="ui.list_item($(this),'客户助理','','single')"><span>客户助理</span><em class="ico"></em>
                    </a>
                    <input type="text" class="filter_element filter_input_txt" value="" title="用户名,公司名,姓名" size="30" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                </li>
                <li class="row">
                    <ul class="filtered_check">
                        <li><input type="checkbox" name="" id="be_returned" checked="checked"/><label for="be_returned">已审核</label></li>
                        <li><input type="checkbox" name="" id="processing" checked="checked"/><label for="processing">待审核</label></li>
                        <li><input type="checkbox" name="" id="completed" checked="checked"/><label for="completed">冻结中</label></li>
                        <li class="line"></li>
                    </ul>
                </li>
                <li class="selected_term fixed">
                    <dl>
                        <dt>已选条件</dt>
                        <dd></dd>
                    </dl>
                </li>
                
            </ul>
            <ul class="db_listtitle">
                <li class="row">
                    <ul class="drop_down">
                        <li class="title"><a href="">队列<em class="ico"></em></a></li>
                        <li class="options">
                            <a href="javascript://" onclick="table.checkAll()">全选</a>
                            <a href="javascript://" onclick="table.checkNO()">不选</a>
                            <a href="javascript://" onclick="table.checkOpp()">反选</a>
                        </li>
                    </ul>
                </li>
                <li class="row"><span class="title_name">单位</span></li>
                <li class="row"><span class="title_name">折扣</span></li>
                <li class="row"><span class="title_name">状态</span></li>
                <li class="row">
                    <ul class="drop_down">
                        <li class="title"><a href="">操作<em class="ico"></em></a></li>
                        <li class="options">
                            <a href="javascript://">审核已选</a>
                            <a href="javascript://">冻结已选</a>
                            <a href="javascript://">设为待审核</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i; $i<10;$i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> 微博主 / <a href="">958826219@qq.com</a></li>
                            <li>助理帐号：张志华</li>
                            <li>注册时间：2012-12-12 13:07</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>草鞋部落66</li>
                            <li>15156323232</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>1.2000</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><em class="ico complete_ico space_ico"></em>已审核</li>
                            <li><em class="ico ing_ico space_ico"></em>待审核</li>
                            <li><em class="ico problem_ico space_ico"></em>被冻结</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct" onclick="ui.add_pop('编辑用户', '480','' , 'ajax_user_edit.php','')">编辑</a>
                            <ul class="drop_down">
                                <li class="title"><a href="javascript://"><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">冻结该帐号</a>
                                    <a href="javascript://" onclick="ui.add_pop('指派助理', '480','230' , 'ajax_user_assistant.php','')">指派助理</a>
                                    <a href="">变身登录</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php };?>
            </table>
            <ul class="pagelist">
                <li><span>记录: 1549 条</span></li>
                <li><span>首页</span></li>
                <li><a href="">1</a></li>
                <li class="current"><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
                <li><a href="">7</a></li>
                <li><a href="">8</a></li>
                <li><a href="">9</a></li>
                <li><a href="">10</a></li>
                <li><a href="">尾页</a></li>
            </ul>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>