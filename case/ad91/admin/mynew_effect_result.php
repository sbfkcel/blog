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
                <li><a href="mynew_effect_cover.php">覆盖分析</a></li>
                <li class="current"><a href="mynew_effect_result.php">成效分析</a></li>
                <li><a href="mynew_effect_spread.php">传播路径</a></li>
            </ul>
            <div class="filter_box">
                <ul class="filter">
                    <li class="row">
                        <ul class="filtered_check">
                            <li><input type="radio" name="e_analysis" id="t_t_a" checked=""><label for="t_t_a">转评量</label></li>
                            <li><input type="radio" name="e_analysis" id="f_t_a"><label for="f_t_a">转发量</label></li>
                            <li><input type="radio" name="e_analysis" id="c_a"><label for="c_a">评论量</label></li>
                            <li><input type="radio" name="e_analysis" id="r_t_s"><label for="r_t_s">拒单</label></li>
                            <li class="line"></li>
                        </ul>
                        <a href="" class="export btn_ico mini_button"><i class="export_ico"></i>导出</a>
                    </li>
                </ul>
            </div>
            <table class="chart_box">
                <tr>
                    <td id="effect_result_ta" width="100%" height="240">
                        <script>
                            $(function(){
                                var chart;
                                //var colors = Highcharts.getOptions().colors,
                                var colors = ['#ff6160','#458ae6','#e68422','#94cc5c','#3cb4c6','#cc81ea','#70a5e6','#3cb4c6','#cc81ea','#70a5e6','#bab9b9']
                                  categories = ['A博主', 'A博主', 'A博主', 'A博主', 'A博主', 'A博主', 'A博主', 'A博主', 'A博主', 'A博主', 'A博主'],
                                  name = 'Browser brands',
                                  data = [{
                                          y: 55.11,
                                          color: colors[0],
                                          drilldown: {
                                              name: 'MSIE versions',
                                              categories: ['MSIE 6.0', 'MSIE 7.0', 'MSIE 8.0', 'MSIE 9.0'],
                                              data: [10.85, 7.35, 33.06, 2.81],
                                              color: colors[0]
                                          }
                                      }, {
                                          y: 30.63,
                                          color: colors[1],
                                          drilldown: {
                                              name: 'Firefox versions',
                                              categories: ['Firefox 2.0', 'Firefox 3.0', 'Firefox 3.5', 'Firefox 3.6', 'Firefox 4.0'],
                                              data: [0.20, 0.83, 1.58, 13.12, 5.43],
                                              color: colors[1]
                                          }
                                      }, {
                                          y: 25.94,
                                          color: colors[2],
                                          drilldown: {
                                              name: 'Chrome versions',
                                              categories: ['Chrome 5.0', 'Chrome 6.0', 'Chrome 7.0', 'Chrome 8.0', 'Chrome 9.0',
                                                  'Chrome 10.0', 'Chrome 11.0', 'Chrome 12.0'],
                                              data: [0.12, 0.19, 0.12, 0.36, 0.32, 9.91, 0.50, 0.22],
                                              color: colors[2]
                                          }
                                      }, {
                                          y: 18.15,
                                          color: colors[3],
                                          drilldown: {
                                              name: 'Safari versions',
                                              categories: ['Safari 5.0', 'Safari 4.0', 'Safari Win 5.0', 'Safari 4.1', 'Safari/Maxthon',
                                                  'Safari 3.1', 'Safari 4.1'],
                                              data: [4.55, 1.42, 0.23, 0.21, 0.20, 0.19, 0.14],
                                              color: colors[3]
                                          }
                                      }, {
                                          y: 18.14,
                                          color: colors[4],
                                          drilldown: {
                                              name: 'Opera versions',
                                              categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                              data: [ 0.12, 0.37, 1.65],
                                              color: colors[4]
                                          }
                                      }, {
                                          y: 10.14,
                                          color: colors[5],
                                          drilldown: {
                                              name: 'Opera versions',
                                              categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                              data: [ 0.12, 0.37, 1.65],
                                              color: colors[5]
                                          }
                                      }, {
                                          y: 5.14,
                                          color: colors[6],
                                          drilldown: {
                                              name: 'Opera versions',
                                              categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                              data: [ 0.12, 0.37, 1.65],
                                              color: colors[6]
                                          }
                                      }, {
                                          y: 2.14,
                                          color: colors[7],
                                          drilldown: {
                                              name: 'Opera versions',
                                              categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                              data: [ 0.12, 0.37, 1.65],
                                              color: colors[7]
                                          }
                                      }, {
                                          y: 2.14,
                                          color: colors[8],
                                          drilldown: {
                                              name: 'Opera versions',
                                              categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                              data: [ 0.12, 0.37, 1.65],
                                              color: colors[8]
                                          }
                                      }, {
                                          y: 2.14,
                                          color: colors[9],
                                          drilldown: {
                                              name: 'Opera versions',
                                              categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                              data: [ 0.12, 0.37, 1.65],
                                              color: colors[9]
                                          }
                                      }, {
                                          y: 2.14,
                                          color: colors[10],
                                          drilldown: {
                                              name: 'Opera versions',
                                              categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                              data: [ 0.12, 0.37, 1.65],
                                              color: colors[10]
                                          }
                                      }];

                                function setChart(name, categories, data, color) {
                                chart.xAxis[0].setCategories(categories, false);
                                chart.series[0].remove(false);
                                chart.addSeries({
                                name: name,
                                data: data,
                                color: color || 'white'
                                }, false);
                                chart.redraw();
                                }

                                chart = new Highcharts.Chart({
                                  chart: {
                                      renderTo: 'effect_result_ta',
                                      type: 'column'
                                  },
                                  title: {
                                      text: ''
                                  },
                                  xAxis: {
                                      tickWidth:0,    //纵显示突出到基线显示值
                                      categories: categories
                                  },
                                  yAxis: {
                                      gridLineColor:"#eae9e9",
                                      gridLineDashStyle:"ShortDash",
                                      title: {
                                          text: ''
                                      }
                                  },
                                  legend: {
                                    enabled:false
                                  },
                                  plotOptions: {
                                      column: {
                                          cursor: 'pointer',
                                          point: {
                                              events: {
                                                  click: function() {
                                                      var drilldown = this.drilldown;
                                                      if (drilldown) { // drill down
                                                          setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                                      } else { // restore
                                                          setChart(name, categories, data);
                                                      }
                                                  }
                                              }
                                          },
                                          dataLabels: {
                                              enabled: true,
                                              //color: colors[0],
                                              style: {
                                                  fontWeight: 'bold'
                                              },
                                              formatter: function() {
                                                  return this.y +'%';
                                              }
                                          }
                                      }
                                  },
                                  tooltip: {
                                      formatter: function() {
                                          var point = this.point,
                                              s = this.x +':<b>'+ this.y +'% market share</b><br/>';
                                          if (point.drilldown) {
                                              s += 'Click to view '+ point.category +' versions';
                                          } else {
                                              s += 'Click to return to browser brands';
                                          }
                                          return s;
                                      }
                                  },
                                  series: [{
                                      name: name,
                                      data: data,
                                      color: 'white'
                                  }],
                                  exporting: {
                                      enabled: false
                                  }
                                });
                            });
                        </script>
                    </td>
                </tr>
            </table>
            <table class="chart_data">
                <tr>
                    <td>
                        <div class="minor">第1位：A博主</div>
                        <div class="chief">转评量：2,000</div>
                    </td>
                    <td>
                        <div class="minor">第2位：B博主</div>
                        <div class="chief">转评量：1,000</div>
                    </td>
                    <td>
                        <div class="minor">第3位：C博主</div>
                        <div class="chief">转评量：800</div>
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