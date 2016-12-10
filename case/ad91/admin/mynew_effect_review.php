<?php include 'header.php'; ?>
<div class="container c_w fixed">
    <?php include 'side.php'; ?>
    <div class="main" id="main">
        <ul class="datasheet_bar">
            <li>
                <span>编号：2269 / 转发 / 新浪微博 / 皮草马甲11 效果数据表</span>
            </li>
        </ul>
        <div class="main_cc">
            <ul class="tag_menu">
                <li><a href="mynew_effect.php">推广效果</a></li>
                <li><a href="mynew_effect_source.php">访问来源</a></li>
                <li class="current"><a href="mynew_effect_review.php">转发评论</a></li>
                <li><a href="mynew_effect_cover.php">覆盖分析</a></li>
                <li><a href="mynew_effect_result.php">成效分析</a></li>
                <li><a href="mynew_effect_spread.php">传播路径</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">全部博主<em class="ico"></em></a></li>
                            <li class="options">
                                <a>全部博主</a>
                                <a>博主A</a>
                                <a>博主B</a>
                                <a>博主C</a>
                                <a>博主D</a>
                            </li>
                        </ul>
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">推广5分钟内<em class="ico"></em></a></li>
                            <li class="options">
                                <a>推广10分钟内</a>
                                <a>推广15分钟内</a>
                                <a>推广30分钟内</a>
                                <a>推广1小时内</a>
                            </li>
                        </ul>
                        <!-- <ul class="filtered_check">
                            <li><input type="checkbox" name="" id="t_assessment"><label for="t_assessment">转评</label></li>
                            <li><input type="checkbox" name="" id="forwarding"><label for="forwarding">转发</label></li>
                            <li><input type="checkbox" name="" id="comment"><label for="comment">评论</label></li>
                            <li class="line"></li>
                        </ul> -->
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                </ul>
            </div>
            <table class="chart_box">
                <tr>
                    <td id="spread_effect" width="100%" height="240">
                        <script type="text/javascript">
                            $(function(){
                                var chart;
                                chart = new Highcharts.Chart({
                                colors:[
                                    '#458ae6','#e68422'
                                ],
                                Legend: {
                                    enabled:false
                                },
                                plotOptions: {
                                  series: {
                                    lineWidth:1.6,
                                    shadow: false,
                                    states: {
                                      hover: {
                                        lineWidth:2
                                      }
                                    },
                                    marker: {
                                      lineColor: null,
                                      radius: 3.5,
                                      states: {
                                          hover: {
                                              fillColor: 'white',
                                              lineWidth: 2,
                                              radius: 5
                                          }
                                      }
                                    }
                                  }
                                },
                                //隐藏打印&下载按钮
                                exporting: {
                                    buttons: {
                                        printButton: {
                                            enabled: false
                                        },
                                        exportButton: {
                                            enabled: false
                                        }
                                    }
                                },
                                chart: {
                                    renderTo: 'spread_effect',
                                    type: 'line'
                                },
                                title: {
                                    text: '',
                                    x: -20 //center
                                },
                                subtitle: {
                                    text: '',
                                    x: -20
                                },
                                xAxis: {
                                    gridLineWidth:1,
                                    tickWidth:0,    //纵显示突出到基线显示值
                                    gridLineColor:"#eae9e9",
                                    categories: ['5min', '10min', '15min', '20min', '25min', '30min',
                                        '35min', '40min', '45min', '50min', '55min', '60min']
                                },
                                yAxis: {
                                    gridLineColor:"#eae9e9",
                                    gridLineDashStyle:"Dash",
                                    lineWidth:1,
                                    title: {
                                        text: ''
                                    },
                                    plotLines: [{
                                        value: 0,
                                        width: 1,
                                        color: '#808080'
                                    }]
                                },
                                tooltip: {
                                    formatter: function() {
                                            return '<b>'+ this.series.name +'</b><br/>'+
                                            this.x +': '+ this.y +'°C';
                                    }
                                },
                                series: [{
                                    name: '转发',
                                    marker: {
                                        symbol: 'circle'
                                    },
                                    //shadow: false,
                                    data: [3, 4, 5, 8, 4, 10, 6, 13, 3, 10, 6, 4]
                                },{
                                    name: '评论',
                                    marker: {
                                        symbol: 'circle'
                                    },
                                    //shadow: false,
                                    data: [5, 10, 7, 10, 8, 12, 8, 15, 5, 12, 8, 6]
                                },{
                                    name: '转评',
                                    marker: {
                                        lineWidth: 2,
                                        lineColor: Highcharts.getOptions().colors[2],
                                        fillColor: 'white'
                                    },
                                    //shadow: false,
                                    data: [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2]
                                }]
                                });
                            })
                        </script>
                    </td>
                </tr>
            </table>
            <table class="chart_data">
                <tr>
                    <td>
                        <div class="minor">转评 / 转评均价</div>
                        <div class="chief">186,368 / &#165;0.02</div>
                    </td>
                    <td>
                        <div class="minor">转发 / 转评均价</div>
                        <div class="chief">818 / &#165;0.01</div>
                    </td>
                    <td>
                        <div class="minor">评论 / 转评均价</div>
                        <div class="chief">786 / &#165;0.01</div>
                    </td>
                </tr>
            </table>
            <table class="dblist_table chart_datatable">
                <tr class="title">
                    <td>日期</td>
                    <td>时间</td>
                    <td>访问</td>
                    <td>访问均价</td>
                </tr>
                <?php for($i=0;$i<20; $i++){;?>
                <tr>
                    <td>12-12-18</td>
                    <td>20:00-20:05</td>
                    <td>888</td>
                    <td>0.017元</td>
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