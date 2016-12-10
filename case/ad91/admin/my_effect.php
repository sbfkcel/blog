<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <div class="tips icotip">
            <em class="ico"></em>
            数据统计：您有 <strong>1312</strong> 个计划已经完成，<strong>9</strong> 个正在推广进行中。小提示：尚在进行中的推广最终效果数据以推广完成后为准。
        </div>
        <ul class="tag_menu">
            <li class="current"><a href="">已完成推广列表</a></li>
        </ul>
        <div class="filter_box">
            <ul class="filter">
                <li class="row">
                    <div class="filter_element drop_down_time">
                        <input type="text" class="filter_input_txt inputDate" f="create_time" value="2012-11-15 至 2012-11-16" size="26" title="不限时间" />
                        <em class="ico"></em>
                    </div>
                    <ul class="filter_element drop_down monospaced_drop_down">
                        <li class="title"><a href="">所有状态<em class="ico"></em></a></li>
                        <li class="options">
                            <a>本周发布</a>
                            <a>本月发布</a>
                        </li>
                    </ul>
                    <input type="text" class="filter_element filter_input_txt" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech="" x-webkit-grammar="builtin:search">
                    <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                </li>
            </ul>
            <ul class="db_listtitle">
                <li class="row"><span class="title_name">推广名称&时间</span></li>
                <li class="row"><span class="title_name">实际消费</span></li>
                <li class="row"><span class="title_name">当前状态</span></li>
                <li class="row"><span class="title_name">查看操作</span></li>
            </ul>
        </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <tr>
                    <td>
                        <ul>
                            <li>
                                <em class="ico sina_ico"></em><a target="_blank" href="">[直发]双12韩版毛妮大衣推广</a>
                            </li>
                            <li>推广时间：2012-12-05 00:00</li>
                        </ul>
                    </td>
                    <td><ul><li>&#165;8650.00</li></ul></td>
                    <td><ul><li><em class="ico ing_ico space_ico"></em>推广尚进行中</li></ul></td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">效果查看</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">查看传播路径图</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php for($i=0; $i<9; $i++){;?>
                <tr>
                    <td>
                        <ul>
                            <li>
                                <em class="ico sina_ico"></em><a target="_blank" href="">[直发]双12韩版毛妮大衣推广</a>
                            </li>
                            <li>推广时间：2012-12-05 00:00</li>
                        </ul>
                    </td>
                    <td><ul><li>&#165;8650.00</li></ul></td>
                    <td><ul><li><em class="ico complete_ico space_ico"></em>推广已完成</li></ul></td>
                    <td>
                        <div class="direct_drop_down">
                            <a class="direct">效果查看</a>
                            <ul class="drop_down">
                                <li class="title"><a href=""><em class="ico"></em></a></li>
                                <li class="options">
                                    <a href="">查看传播路径图</a>
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