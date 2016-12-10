<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <div class="tips icotip">
                <em class="ico"></em>
                数据统计：共有微博数量 <strong>3726</strong> 个，新浪微博 <strong>3696</strong> 个，腾讯微博 <strong>30</strong> 个。
            </div>
            <ul class="operating_box fixed">
                <li><a class="btn_ico button" onclick="ui.add_pop('管理收藏组', '520','' , 'ajax_edit_group.php','')"><i class="pen_ico"></i>管理微博分组</a></li>
                <li><a class="btn_ico button" onclick="ui.add_pop('管理收藏组', '520','100' , '调用原分析flash','')"><i class="refresh_ico"></i>更新微博</a></li>
                <li><a class="btn_ico button" onclick="ui.add_pop('管理收藏组', '520','100' , '调用原分析flash','')"><i class="remark_ico"></i>分析微博</a></li>
            </ul>
            <ul class="tag_menu">
                <li class="current"><a href="">所有微博</a></li>
                <li><a href="">新浪微博</a></li>
                <li><a href="">腾讯微博</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <div class="filter_element drop_down_time">
                            <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                            <em class="ico"></em>
                        </div>
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'娱乐搞笑'},{value:772,label:'旅游'},{value:773,label:'影视'},{value:1394,label:'音乐'},{value:1395,label:'美容'},{value:1396,label:'美食'},{value:1397,label:'生活资讯'},{value:1398,label:'摄影美图'},{value:1399,label:'摄影美图'},{value:1401,label:'游戏'},{value:1402,label:'IT科技'},{value:1403,label:'动漫'},{value:1469,label:'游乐游艺'},{value:1471,label:'模牌麻将'},{value:1526,label:'模型玩具'}]" onclick="ui.list_item($(this),'分类标签','more')"><span>分类标签</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'20元以下'},{value:772,label:'20-50元'},{value:773,label:'50-100元'},{value:1394,label:'100-200元'},{value:1395,label:'200-500元'},{value:1396,label:'500-1000元'},{value:1397,label:'1000元以上'}]" onclick="ui.list_item($(this),'分类标签','custom')"><span>价格范围</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'1万以下'},{value:772,label:'1-5万'},{value:773,label:'5-10万'},{value:1394,label:'10-20万'},{value:1395,label:'20-40万'},{value:1396,label:'40-80万'},{value:1397,label:'80-120万'},{value:1398,label:'120-200万'},{value:1399,label:'200万以上'}]" onclick="ui.list_item($(this),'分类标签','custom','single')"><span>粉丝数量</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'08:01-10:00'},{value:772,label:'10:01-12:00'},{value:773,label:'12:01-14:00'},{value:1394,label:'14:01-16:00'},{value:1395,label:'16:01-18:00'},{value:1396,label:'18:01-20:00'},{value:1397,label:'20:01-22:00'},{value:1398,label:'20:01-22:00'},{value:1399,label:'22:01-00:00'},{value:1401,label:'00:01-02:00'},{value:1402,label:'02:01-04:00'},{value:1403,label:'04:01-06:00'},{value:1469,label:'06:1-08:00'}]
" onclick="ui.list_item($(this),'分类标签','custom')"><span>活跃时间分布</span><em class="ico"></em></a>
                        
                        <a class="filter_element btn_ico mini_button high_an" href="javascript://" onclick="ui.high_filter_showhide($(this));" ><i class="shrink_ico"></i>高级筛选</a>
                         
                    </li>
                    <li class="row">
                        <ul class="filtered_check">
                            <li><input type="checkbox" name="" id="be_returned" /><label for="be_returned">接单</label></li>
                            <li><input type="checkbox" name="" id="processing" /><label for="processing">硬广</label></li>
                            <li><input type="checkbox" name="" id="completed" /><label for="completed">加V</label></li>
                            <li class="line"></li>
                        </ul>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">粉丝性别<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">不限性别</a>
                                <a href="javascript://">男性</a>
                                <a href="javascript://">女性</a>
                            </li>
                        </ul>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">微博分组<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">不限分组</a>
                                <a href="javascript://">报价过高组</a>
                                <a href="javascript://">微博待奍组</a>
                            </li>
                        </ul>
                        <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="20" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
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
                            <li class="title"><a href="">选择<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://" onclick="table.checkAll()">全选</a>
                                <a href="javascript://" onclick="table.checkNO()">不选</a>
                                <a href="javascript://" onclick="table.checkOpp()">反选</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">粉丝量<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">默认排序</a>
                                <a href="">粉丝从多到少</a>
                                <a href="">粉丝从少到多</a>
                                <a href="">价格从高到低</a>
                                <a href="">价格从低到高</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row"><span class="title_name">价格</span></li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">状态&备注<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">不限条件</a>
                                <a href="">已审核</a>
                                <a href="">已冻结</a>
                                <a href="">有备注的</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row">
                        <ul class="drop_down">
                            <li class="title"><a href="">操作<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="">添加到收藏</a>
                                <a href="">加入黑名单</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            

            <div class="main_cc">
                <table class="dblist_table contextmenu">
                    <?php for($i=0;$i<5;$i++){;?>
                    <tr class="tbelected_list">
                        <td>
                            <ul>
                                <li class="added_td"><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>"> [推荐] <a href="" title="查看微博详情">爱讲冷笑话</a><em class="ico sina_ico"></em></li>
                                <li><a href="http://weibo.com/u/1836245302" target="_blank">http://weibo.com/u/1836245302</a></li>
                                <li>标签：女性,摄影美图,读书语录</li>
                                <li>助理帐号：张志华</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                
                                <li>粉丝：708624</li>
                                <li>男：80%</li>
                                <li>女：20%</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="weibo_price">
                                <li>硬广：拒接 / 180.00</li>
                                <li>软广：180.00</li>
                                <li>直发：258.00</li>
                                <li>带号：160.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><em class="ico complete_ico space_ico"></em>已审核</li>
                                <li><em class="ico problem_ico space_ico"></em>被冻结</li>
                                <li><em class="ico ing_ico space_ico"></em>待审核</li>
                                <li>备注：硬广只接天猫</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="javascript://" onclick="ui.add_pop('微博指定分组', '420','' , 'ajax_weibo_mgroup.php','')">移至分组</a>
                                    <a href="javascript://" href="">取消审核</a>
                                    <a href="javascript://" onclick="ui.add_pop('编辑微博信息', '550','' , 'ajax_weibo_edit.php','')">编辑</a>
                                    <a href="javascript://" href="">冻结</a>
                                    <a href="javascript://" href="">分析</a>
                                    <a href="javascript://" href="admin_weibo_effect.php" target="_blank">查看分析</a>
                                </li>
                            </ul>
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
<?php include 'footer.php';?>