<?php include 'header.php';?>
    <div class="container c_w fixed">
        <?php include 'side.php';?>
        <div class="main" id="main">
            <ul class="operating_box fixed">
                <li><a class="btn_ico button" href="javascript://" onclick="ui.add_pop('管理收藏组', '520','' , 'ajax_edit_group.php','')"><i class="pen_ico"></i>管理收藏组</a></li>
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
                        <a class="list_item" href="javascript://" sc="音乐,游戏,IT科技" cc="娱乐搞笑,旅游,影视,音乐,美容,美食,生活资讯,摄影美图,游戏,IT科技,动漫,游乐游艺,模牌麻将,模型玩具,古董收藏,幽默搞笑,星座合理" onclick="ui.list_item($(this),'分类标签','more')"><span>分类标签</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="20-50元" cc="20元以下,20-50元,50-100元,100-200元,200-500元,500-1000元,1000元以上" onclick="ui.list_item($(this),'分类标签','custom')"><span>价格范围</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="1万以下" cc="1万以下,1-5万,5-10万,10-20万,20-40万,40-80万,80-120万,120-200万,200万以上" onclick="ui.list_item($(this),'分类标签','more','single')"><span>粉丝数量</span><em class="ico"></em></a>
                        <a class="list_item" href="javascript://" sc="12:01-14:00,18:01-20:00" cc="08:01-10:00,10:01-12:00,12:01-14:00,14:01-16:00,16:01-18:00,18:01-20:00,20:01-22:00,22:01-00:00,00:01-02:00,02:01-04:00,04:01-06:00,06:1-08:00" onclick="ui.list_item($(this),'分类标签','custom')"><span>活跃时间分布</span><em class="ico"></em></a>
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
                                <li><span>硬广：拒接</span><span>直发：258</span></li>
                                <li><span>软广：180</span><span>转发：160</span></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>硬广只接天猫</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="drop_down">
                                <li class="title"><a href="">操作<em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">添加到收藏</a>
                                    <a href="">加入黑名单</a>
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