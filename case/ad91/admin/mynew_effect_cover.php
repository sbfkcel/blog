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
                <li><a href="mynew_effect_review.php">转发评论</a></li>
                <li class="current"><a href="mynew_effect_cover.php">覆盖分析</a></li>
                <li><a href="mynew_effect_result.php">成效分析</a></li>
                <li><a href="mynew_effect_spread.php">传播路径</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <ul class="filter_element drop_down monospaced_drop_down">
                            <li class="title"><a href="">推广5分钟内<em class="ico"></em></a></li>
                            <li class="options">
                                <a>推广10分钟内</a>
                                <a>推广15分钟内</a>
                                <a>推广30分钟内</a>
                                <a>推广1小时内</a>
                            </li>
                        </ul>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                </ul>
            </div>
            <table class="chart_box" height="240">
                <tr>
                    <td id="ordinary_users" width="45%">
                        <script>
                            $(function(){
                                var chart;
                                chart = new Highcharts.Chart({
                                    chart: {
                                        renderTo: 'ordinary_users',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false,
                                        height:220
                                    },
                                    colors:[
                                      '#458ae6','#ff6160','#bab9b9'
                                    ],
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
                                    title: {
                                        text: ''
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                                        percentageDecimals: 1
                                    },
                                    plotOptions: {
                                        pie: {
                                            allowPointSelect: true,
                                            cursor: 'pointer',
                                            dataLabels: {
                                                enabled: true,
                                                color: '#000000',
                                                connectorColor: '#000000',
                                                formatter: function() {
                                                    return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                                                }
                                            }
                                        }
                                    },
                                    series: [{
                                        type: 'pie',
                                        name: 'Browser share',
                                        data: [
                                            ['男',   35.0],
                                            ['女',       60.0],
                                            ['其它',   5.0]
                                        ]
                                    }]
                                });
                            });
                        </script>
                    </td>
                    <td id="v_users" width="45%">
                        <script>
                            $(function(){
                                var chart;
                                chart = new Highcharts.Chart({
                                    chart: {
                                        renderTo: 'v_users',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false,
                                        height:220
                                    },
                                    colors:[
                                      '#e68422','#3cb4c6'
                                    ],
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
                                    title: {
                                        text: ''
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                                        percentageDecimals: 1
                                    },
                                    plotOptions: {
                                        pie: {
                                            allowPointSelect: true,
                                            cursor: 'pointer',
                                            dataLabels: {
                                                enabled: true,
                                                color: '#000000',
                                                connectorColor: '#000000',
                                                formatter: function() {
                                                    return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                                                }
                                            }
                                        }
                                    },
                                    series: [{
                                        type: 'pie',
                                        name: 'Browser share',
                                        data: [
                                            ['加V用户',   65.0],
                                            ['普通用户',   35.0]
                                        ]
                                    }]
                                });
                            });
                        </script>
                    </td>
                </tr>
            </table>
            <table class="chart_data">
                <tr>
                    <td width="50%">
                        <div class="minor">男：女：其它</div>
                        <div class="chief">41.8%：58.1%：0.1%</div>
                    </td>
                    <td width="50%">
                        <div class="minor">加V用户：普通用户</div>
                        <div class="chief">86.7%：13.3%</div>
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