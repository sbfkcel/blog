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
            <li class="current"><a href="">兑换实物</a></li>
            <li><a href="">积分明细</a></li>
        </ul>
        <div class="main_cc">
            <ul class="showimg_box fixed">
                <?php for($i=0; $i<16;$i++){;?>
                <li class="gift_list">
                    <a href="" class="img"><img src="" alt=""></a>
                    <div class="info">
                        <div class="title">
                            iMac-(21.5英寸)-2.5GHz<br/>需要<strong>10227.80</strong>个兑换积分
                        </div>
                        <div class="operate">
                            <a href="">申请兑换</a>
                        </div>
                    </div>
                </li>
                <?php };?>
            </ul>
            <script>
            $(function(){
                var c = $(".showimg_box .gift_list");
                c.each(function(){
                    var theInt = $(this).index()/4;
                    if(parseInt(theInt)!=theInt){
                        $(this).css("border-left","1px white solid");
                    };
                })
            });
            </script>
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