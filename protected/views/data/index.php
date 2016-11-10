<?php
/* @var $this DataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datas',
);

$this->menu=array(
	array('label'=>'Create Data', 'url'=>array('create')),
	array('label'=>'Manage Data', 'url'=>array('admin')),
);
?>

<h1>Datas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));

//membuat grafik 3 line
// $this->Widget('ext.highcharts.HighchartsWidget', array(
// 'scripts' => array(
//       'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
//       'modules/exporting', // adds Exporting button/menu to chart
//       'themes/grid-light'        // applies global 'grid' theme to all charts
//     ),
//     'options' => array(
//       'title' => array('text' => 'Patient Visits By Day (Last Two Weeks)'),
//       // 'xAxis' => array(
//       //    'categories' => array('14th','15th','16th','17th','18th','19th','20th','21th','22th','23th','24th','25th','26th','27th','28th')
//       // ),
//       // 'yAxis' => array(
//       //    'title' => array('text' => 'Number of Visits')
//       // ),
//       'colors'=>array('#0563FE', '#6AC36A', '#FFD148', '#FF2F2F'),
//       'gradient' => array('enabled'=> true),
//       'credits' => array('enabled' => false),
//       /*'exporting' => array('enabled' => false),*/ //to turn off exporting uncomment
//       'chart' => array(
//         'plotBackgroundColor' => '#ffffff',
//         'plotBorderWidth' => null,
//         'plotShadow' => false,
//         'height' => 400,
//       ),
//       'title' => false,
//        'series' => array(
//           array('type'=>'column','name' => 'Hampton Office', 'data' => array(20, 25, 25,35, 30, 28,25, 27, 23, 24, 25, 26,27,28,33)),
//           array('type'=>'spline','name' => 'Hampton Office', 'data' => array(20, 25, 25,35, 30, 28,25, 27, 23, 24, 25, 26,27,28,33)),
//           array('type'=>'spline','name' => 'Richmond Office', 'data' => array(5, 7, 8,9, 7, 10,11, 12, 13,15, 17, 14,15,16,18)),
//           array(
//             'type'=>'pie',
//             'name' => 'Richmond Office',
//             'data' => array(5, 7, 8),
//             'dataLabels' => array(
//               'enabled' => false,
//             ),
//             'showInLegend'=>false,
//             'size'=>'10',
//             'center'=>[20, 20],
//           ),
//       ),
//     )
//   ));

$this->Widget('ext.highcharts.HighchartsWidget', array(
  'scripts' => array(
      // 'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
      'modules/exporting', // adds Exporting button/menu to chart
      'themes/grid-light'        // applies global 'grid' theme to all charts
    ),
   'options'=>array(
      'title' => array('text' => 'pH'),
      'xAxis' => array(
         'categories' => array('14th','15th','16th','17th','18th','19th','20th','21th','22th','23th','24th','25th','26th','27th','28th')
      ),
      'yAxis' => array(
         'title' => array('text' => 'pH')
      ),
      'credits' => array('enabled' => false),
      'series' => array(
         array('name' => 'pH', 'data' => array(20, 25, 25,35, 30, 28,25, 27, 23, 24, 25, 26,27,28,33)),
      )
   )
));


$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
      'title' => array('text' => 'Dissolved Oxygen (DO)'),
      'xAxis' => array(
         'categories' => array('14th','15th','16th','17th','18th','19th','20th','21th','22th','23th','24th','25th','26th','27th','28th')
      ),
      'yAxis' => array(
         'title' => array('text' => '(mg/L)')
      ),
      'credits' => array('enabled' => false),
      'series' => array(
         array('name' => 'DO', 'data' => array(20, 25, 25,35, 30, 28,25, 27, 23, 24, 25, 26,27,28,33)),
      )
   )
));

$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
      'title' => array('text' => 'Suhu'),
      'xAxis' => array(
         'categories' => array('14th','15th','16th','17th','18th','19th','20th','21th','22th','23th','24th','25th','26th','27th','28th')
      ),
      'yAxis' => array(
         'title' => array('text' => '(°C)')
      ),
      'credits' => array('enabled' => false),
      'series' => array(
         array('name' => 'Suhu', 'data' => array(20, 25, 25,35, 30, 28,25, 27, 23, 24, 25, 26,27,28,33)),
      )
   )
));

// $this->Widget('ext.highcharts.HighchartsWidget', 
// array(
// 'options'=>array(
// 'scripts' => array(
// 'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
// 'modules/exporting', // adds Exporting button/menu to chart
// 'themes/grid' // applies global 'grid' theme to all charts
// ),
// 'chart' => array('type' => 'gauge', 'plotBorderWidth' => 0, 'plotShadow' => false),
// 'title' => array('text' => 'Student'),
// 'pane' => array('startAngle' => -150, 'endAngle' => 150),


// 'yAxis' => array(
// // 'title' => array('text' => 'Jumlah'),
// 'min' => array(0),
// 'max' => array(100),

// 'minorTickInterval' => array('auto'),
// 'minorTickWidth' => array(100),
// 'minorTickLength' => array(10),
// 'minorTickPosition' => array('inside'),
// 'minorTickColor' => array('#666'),

// 'tickPixelInterval' => array(30),
// 'tickWidth' => array(2),
// 'tickPosition' => array('inside'),
// 'tickLength' => array(10),
// 'tickColor' => array('#666'),

// 'labels' => array('step'=>'2', 'rotation'=>'auto'),
// 'title' => array('text'=>'marks'),
// 'plotBands' => array( 
// array('from'=>0, 'to'=>50, 'color'=>'#DF5353'),
// array('from'=>50, 'to'=>80, 'color'=>'#DDDF0D'),
// array('from'=>80, 'to'=>100, 'color'=>'#55BF3B'),
// )

// ),
// 'series' => array(
// array('name' => 'Marks', 'data' => 20, 25, 25,35, 30, 28,25, 27, 23, 24, 25, 26,27,28,33)

// )
// )
// )); 

// $this->Widget('ext.highcharts.HighchartsWidget', 
// array(
// 'options'=>array(
// 'scripts' => array(
// 'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
// 'modules/exporting', // adds Exporting button/menu to chart
// 'themes/grid' // applies global 'grid' theme to all charts
// ),

// 'chart' => array(
//     'type' => 'solidgauge'),
// 'title' => array('text'=>'pH'),
// 'pane' => array(
//   'center'=> array(array('50%', '85%')),
//   'size'=> array('140%'),
//   'startAngle' => -90,
//   'endAngle' => 90,
//   'background'=> array(
//       'innerRadius'=>array('60%'),
//       'outerRadius' => array('100%'),
//       'shape'=> array('arc'))
//   ),

// 'tooltip'=>array(
//       'enable'=>array('false')),

// 'yAxis' => array(
//   'stops'=>array(
//       array(0,1,'#55BF3B'),
//       array(0.5, '#DDDF0D'),
//       array(0.9, '#DF5353')),
//   'lineWidth'=> 0,
//   'tickAmount'=>'2',
//   'title' => array('y' => -70),
//   'labels'=>array('y'=>16)
//   ),

// 'plotOption'=>array(
//     'solidgauge'=>array(
//         'dataLabels'=>array(
//           'y'=>5,
//           'borderWidth'=>0,
//           'useHTML'=>true))),

// 'yAxis' => array(
//     'min' => array(0),
//     'max' => array(200),
//     'title' => array('text' => 'Speed')),

// 'credits'=>array('enabled'=>false),

// 'series' => array(
//     array('name' => 'Speed'),
//     'data' => 80,
//     'tooltip'=>array(
//         'valueSuffix'=>'km/h')),
// )
// )); 
?>

<section class="content">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"></span>
        <span class="info-box-content-text">pH</span>
        <div class="info-box-content">
          <span class="info-box-number">11</span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"></span>
        <span class="info-box-text">Suhu</span>
        <div class="info-box-content">
          <span class="info-box-number">11</span>
          <p font-zise=11px text-align: left> (°C) </p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
          <span class="info-box-icon bg-yellow"></span>
          <span class="info-box-text">DO</span>
        <div class="info-box-content">
          <span class="info-box-number">11</span>
          <p font-zise=11px text-align: left> mg/L </p>
        </div>
      </div>
    </div>
  </div>
</section>

        <div class="container">
            <div id="example-row" class="row">
                <a class="btn btn-default btn-lg btn-block">Example</a></br>
                <div class="col-xs-12 col-md-3 full-card">
                    <div class="flip-card active-card">
                        <div class="card label-info">
                            <h6>1</h6>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-primary btn-fab btn-raised icon-material-replay" id="first"></a>
                        <div class="well" text-align="center">
                            <h1>pH</h1>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="card" style="background-color: #F1BF26;color: white;">
                            <h6>2</h6>
                        </div>
                        <div class="well" text-align="center">
                            <h1>Suhu</h1>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="card alert-success">
                            <h6>3</h6>
                        </div>
                        <div class="well" text-align="center">
                            <h1>DO</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 full-card">
                    <div class="flip-card">
                        <div class="card label-info">
                            <h6>1</h6>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-primary btn-fab btn-raised icon-material-replay" id="second"></a>
                        <div class="well" text-align="center">
                            <h1>pH</h1>
                        </div>
                    </div>
                    <div class="flip-card active-card">
                        <div class="card" style="background-color: #F1BF26;color: white;">
                            <h6>2</h6>
                        </div>
                        <div class="well" text-align="center">
                            <h1>Suhu</h1>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="card alert-success">
                            <h6>3</h6>
                        </div>
                        <div class="well" text-align="center">
                            <h1>DO</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 full-card">
                    <div class="flip-card">
                        <div class="card label-info">
                            <h6>1</h6>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-primary btn-fab btn-raised icon-material-replay" id="third"></a>
                        <div class="well" text-align="center">
                            <h1>pH</h1>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="card" style="background-color: #F1BF26;color: white;">
                            <h6>2</h6>
                        </div>
                        <div class="well" text-align="center">
                            <h1>Suhu</h1>
                        </div>
                    </div>
                    <div class="flip-card active-card">
                        <div class="card alert-success">
                            <h6>3</h6>
                        </div>
                        <div class="well" text-align="center">
                            <h1>DO</h1>
                        </div>
                    </div>
                </div>                
            </div>
        </div>