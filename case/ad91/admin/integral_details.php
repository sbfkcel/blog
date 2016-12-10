<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div id="main" class="main">
        <div class="user_outline">
            <ul class="outline">
                <li class="outline_list outline_last outline_first ">
                    可用积分：
                    <p class="sum">
                        <strong>56231</strong>
                        <span class="extract_tips"><em></em>每兑换一次需要扣除 <b>20</b> 积分的工本&快递费</span>
                    </p> 
                </li>
            </ul>
            <div class="statistic">
                <span><a href="" title="">了解如何赚取积分和积分规则？</a></span>
                <span><a href="" title="">积分有什么用？</a></span>
            </div>
        </div>
        <ul class="tag_menu">
            <li><a href="">兑换实物</a></li>
            <li class="current"><a href="">积分明细</a></li>
        </ul>
        <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <input type="text" class="filter_element filter_input_txt input_f_s" value="" title="关键字" size="15" lang="zh-CN" x-webkit-speech x-webkit-grammar="builtin:search"/>
                        <a href="" class="filter_element btn_ico mini_button blue_an"><i class="zoom_ico"></i>查找</a>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                </ul>
                <ul class="db_listtitle">
                    <li class="row">
                        <ul class="drop_down ">
                            <li class="title"><a href="">队列<em class="ico"></em></a></li>
                            <li class="options">
                                <a href="javascript://" onclick="table.checkAll()">全选</a>
                                <a href="javascript://" onclick="table.checkNO()">不选</a>
                                <a href="javascript://" onclick="table.checkOpp()">反选</a>
                            </li>
                        </ul>
                    </li>
                    <li class="row"><span class="title_name">昵称</span></li>
                    <li class="row"><span class="title_name">积分</span></li>
                    <li class="row"><span class="title_name">详情</span></li>
                </ul>
            </div>
        <div class="main_cc">
            <table class="dblist_table contextmenu">
                <?php for($i=0;$i<20;$i++){;?>
                <tr class="tbelected_list">
                    <td>
                        <ul>
                            <li class="added_td"><input type="checkbox" class="checkbox_id" value="<?php echo $i;?>"/> 5623</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>和平叶</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>-850</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>兑换Mac air</li>
                        </ul>
                    </td>
                    
                </tr>
                <?php };?>
            </table>
        </div>
        <div class="b_fixed fixed">
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