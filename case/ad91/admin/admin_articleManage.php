<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        
        <ul class="operating_box fixed">
            <li><a class="btn_ico button green_an" href="admin_articleManage_add.php" target="_blank"><i class="add_ico"></i>添加文章</a></li>
            <li><a class="btn_ico button" onclick="ui.add_pop('编辑管理文章分组', '520','' , 'ajax_edit_group.php','')"><i class="pen_ico"></i>管理编辑分类</a></li>
        </ul>
        <ul class="tag_menu">
            <li class="current"><a href="admin_bill.php">文章列表</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row"> 
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">文章分类<em class="ico"></em></a></li>
                        <li class="options">
                            <a>所有分类</a>
                            <a>微博主常见问题</a>
                            <a>广告主常见问题</a>
                            <a>代理商常见问题</a>
                            <a>案例展示</a>
                            <a>行业新闻</a>
                            <a>常见问题</a>
                            <a>代理公告</a>
                            <a>最新通知</a>
                        </li>
                    </ul>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="30" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                    <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
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
                <li class="row"><span class="title_name">内容概要</span></li>
                <li class="row">
                    <span class="title_name">操作</span>
                </li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i; $i<10;$i++){;?>
                <tr class="">
                    <td>
                        <ul>
                            <li><input type="checkbox" class="checkbox_id"> <a href="">友漾平台中秋国庆期间付款事宜说明</a></li>
                            <li>分类：最新通知</li>
                            <li>发布时间：2012-12-16 10:34</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>若有长期大量的广告投放，可以联系平台客服...</li>
                        </ul>
                    </td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">编辑</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">删除该文章</a>
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