
<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="stage_box">
                <li class="once once_back">1、创建推广<em class="stage_ico"></em></li>
                <li class="current">2、选择博主<em class="stage_ico"></em></li>
                <li>3、确认推广<em class="stage_ico"></em></li>
                <li>4、提交订单<em class="stage_ico"></em></li>
            </ul>
            <ul class="tag_menu">
                <li class="current"><a href="">微博列表</a></li>
                <li><a href="">我的收藏</a></li>
                <li><a href="">历史投放</a></li>
                <li><a href="">热门微博</a></li>
                <li><a href="">最新微博</a></li>
                <li><a href="">黑名单</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'娱乐搞笑'},{value:772,label:'旅游'},{value:773,label:'影视'},{value:1394,label:'音乐'},{value:1395,label:'美容'},{value:1396,label:'美食'},{value:1397,label:'生活资讯'},{value:1398,label:'摄影美图'},{value:1399,label:'摄影美图'},{value:1401,label:'游戏'},{value:1402,label:'IT科技'},{value:1403,label:'动漫'},{value:1469,label:'游乐游艺'},{value:1471,label:'模牌麻将'},{value:1526,label:'模型玩具'}]" onclick="ui.list_item($(this),'分类标签','more')"><span>分类标签</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'20元以下'},{value:772,label:'20-50元'},{value:773,label:'50-100元'},{value:1394,label:'100-200元'},{value:1395,label:'200-500元'},{value:1396,label:'500-1000元'},{value:1397,label:'1000元以上'}]" onclick="ui.list_item($(this),'分类标签','custom')"><span>价格范围</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'1万以下'},{value:772,label:'1-5万'},{value:773,label:'5-10万'},{value:1394,label:'10-20万'},{value:1395,label:'20-40万'},{value:1396,label:'40-80万'},{value:1397,label:'80-120万'},{value:1398,label:'120-200万'},{value:1399,label:'200万以上'}]" onclick="ui.list_item($(this),'分类标签','custom','single')"><span>粉丝数量</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="[]" cc="[{value:43,label:'08:01-10:00'},{value:772,label:'10:01-12:00'},{value:773,label:'12:01-14:00'},{value:1394,label:'14:01-16:00'},{value:1395,label:'16:01-18:00'},{value:1396,label:'18:01-20:00'},{value:1397,label:'20:01-22:00'},{value:1398,label:'20:01-22:00'},{value:1399,label:'22:01-00:00'},{value:1401,label:'00:01-02:00'},{value:1402,label:'02:01-04:00'},{value:1403,label:'04:01-06:00'},{value:1469,label:'06:1-08:00'}]
" onclick="ui.list_item($(this),'分类标签','custom')"><span>活跃时间分布</span><em class="ico"></em></a>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">粉丝性别<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://">不限性别</a>
                                <a href="javascript://">男性</a>
                                <a href="javascript://">女性</a>
                            </li>
                        </ul>
                        <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                        <a class="filter_element btn_ico mini_button high_an" href="javascript://" onclick="ui.high_filter_showhide($(this));" ><i class="shrink_ico"></i>高级筛选</a> 
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
                    <li class="row"><span class="title_name">数丝量</span></li>
                    <li class="row"><span class="title_name">报价</span></li>
                    <li class="row"><span class="title_name">备注</span></li>
                    <li class="row">
                        <div class="direct_drop_down">
                            <a class="direct" onclick="table.weibo_added()">添加</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">添加到收藏</a>
                                    <a href="">加入黑名单</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            

            <div class="main_cc">
                <table class="dblist_table contextmenu" spread_id="52320">
                    <?php for($i=0;$i<20;$i++){;?>
                    <tr class="tbelected_list">
                        <td>
                            <ul>
                                <li class="added_td"><em class="added_ico" title="已经添加到已选"></em><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>" weiboname="双十一内衣大促推广计划" platform="sina" price="258" popular="708624" p_boy="80%" p_girl="20%"> <a href="" title="查看微博详情">爱讲冷笑话</a><em class="ico sina_ico"></em></li>
                                <li><a href="http://weibo.com/u/1836245302" target="_blank">http://weibo.com/u/1836245302</a></li>
                                <li>标签：女性,摄影美图,读书语录</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>708624</li>
                                <li>男：80%</li>
                                <li>女：20%</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="weibo_price">
                                <li>硬广：258.00 / 拒接</li>
                                <li>直发：258</li>
                                <li>软广：180</li>
                                <li>转发：160</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>硬广只接天猫</li>
                            </ul>
                        </td>
                        <td>
                            <div class="direct_drop_down">
                                <a class="direct">添加</a>
                                <ul class="drop_down">
                                    <li class="title"><a href=""><em class="ico"></em></a></li>
                                    <li class="options">
                                        <a href="">添加到收藏</a>
                                        <a href="">加入黑名单</a>
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
                <dl class="selected_weibo_box">
                    <dt class="selected_weibo_bar">
                        <a class="add_to" href="javascript://" onclick="table.weibo_added()"><i class="add_ico"></i>添加至已选<i class="arrow"></i></a>
                        <a class="btn_ico mini_button high_an current" href="javascript://" onclick="ui.unfold_selected_weibo($(this))"><i class="shrink_ico"></i>查看已选微博</a>
                        <div class="show_details">已添加 <strong>--</strong> 个微博  （本次预算 <strong>￥<span class="budget_price">2580</span></strong>  /  预计花费 <strong>￥--</strong> ）</div>
                        <div class="schedule_bar"><div></div></div>
                    </dt>
                    <dd class="selected_weibo_list">
                        <table class="show_table selected_weibo_table" swls="">
                            <tr class="title">
                                <td>微博名称</td>
                                <td>数丝量</td>
                                <td>本次任务价格</td>
                                <td>操作</td>
                            </tr>
                        </table>
                    </dd>
                    <dd class="selected_weibo_operate fixed"><a class="btn_ico button"><i class="add_ico"></i>继续添加微博</a><a href="censor_spread.php" class="btn_ico button orange_an"><i class="go_ico"></i>确认并提交</a></dd>
                </dl>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>