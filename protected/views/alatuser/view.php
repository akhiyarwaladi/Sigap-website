<?php
/* @var $this AlatuserController */
/* @var $model Alatuser */

$this->breadcrumbs = array(
    'Alatusers' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Alatuser', 'url' => array('index')),
    array('label' => 'Create Alatuser', 'url' => array('create')),
    array('label' => 'Update Alatuser', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Alatuser', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Alatuser', 'url' => array('admin')),
);
?>

<h1>View Alatuser #<?php echo $model->id; ?></h1></br>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//		'id',
        'id_alat',
//		'id_user',
        'nama',
    ),
));
//$data = $datasensor->getData();
$suhu = array();
$ph = array();
$do = array();
$tgl = array();
$hasil = array();
$data = $datasensor->search()->getData();
$i= 1;
foreach ($data as $dat){
    $doo = $dat->do;
    $phh = $dat->ph;
    $suhuu = $dat->suhu;
    $tgll = $dat->create_at;
	$hasill = $dat->hasil;
    array_push($suhu,intval($suhuu));
    array_push($ph,intval($phh));
    array_push($do,intval($doo));
	array_push($hasil,intval($hasill));
    array_push($tgl,$i++);
    
}
// exit();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php
            $data = array();
            $data = $ph;
            $this->Widget('ext.highcharts.HighchartsWidget', array(
                'scripts' => array(
                    'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                    'modules/exporting', // adds Exporting button/menu to chart
                    'themes/grid-light'        // applies global 'grid' theme to all charts
                ),
                'options' => array(
                    'title' => array('text' => 'HPc (Ketinggian air)'),
                    'xAxis' => array(
                        'categories' => $tgl//array('14th', '15th', '16th', '17th', '18th', '19th', '20th', '21th', '22th', '23th', '24th', '25th', '26th', '27th', '28th')
                    ),
                    'yAxis' => array(
                        'title' => array('text' => 'HPc')
                    ),
                    'credits' => array('enabled' => false),
                    'series' => array(
                        array('name' => 'HPc', 'data' => $ph),//array(20, 25, 25, 35, 30, 28, 25, 27, 23, 24, 25, 26, 27, 28, 33)),
                    )
                )
            ));
            ?>
        </div>

        <div class="col-sm-4"
        <?php
        $this->Widget('ext.highcharts.HighchartsWidget', array(
            'options' => array(
                'title' => array('text' => 'Uk (1=>Irrigate, -1=>Drainage)'),
                'xAxis' => array(
                    'categories' => $tgl//array('14th', '15th', '16th', '17th', '18th', '19th', '20th', '21th', '22th', '23th', '24th', '25th', '26th', '27th', '28th')
                ),
                'yAxis' => array(
                    'title' => array('text' => 'Uk level')
                ),
                'credits' => array('enabled' => false),
                'series' => array(
                    array('name' => 'Uk', 'data' => $do)//array(20, 25, 25, 35, 30, 28, 25, 27, 23, 24, 25, 26, 27, 28, 33)),
                )
            )
        ));
        ?>
    

    <div class="col-sm-4"
         <?php
         $this->Widget('ext.highcharts.HighchartsWidget', array(
             'options' => array(
                 'title' => array('text' => 'Operation Time'),
                 'xAxis' => array(
                     'categories' => $tgl//array('14th', '15th', '16th', '17th', '18th', '19th', '20th', '21th', '22th', '23th', '24th', '25th', '26th', '27th', '28th')
                 ),
                 'yAxis' => array(
                     'title' => array('text' => 'Second')
                 ),
                 'credits' => array('enabled' => false),
                 'series' => array(
                     array('name' => 'OpTime', 'data' => $hasil)//array(20, 25, 25, 35, 30, 28, 25, 27, 23, 24, 25, 26, 27, 28, 33)),
                 )
             )
         ));
         ?>
</div>
</div>
</div>

<div class="container">
            <div id="example-row" class="row">
                <div class="col-xs-12 col-md-4 full-card">
                    <div class="flip-card active-card">
                        <div class="card label-info">
                            <h6>1</h6>
                        </div>
                        <div class="well">
                            <h5>HPc (Ketinggian Air)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 full-card">
                    <div class="flip-card active-card">
                        <div class="card" style="background-color: #F1BF26;color: white;">
                            <h6>2</h6>
                        </div>
                        <div class="well">
                            <h5>Uk (-1<=x<=1)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 full-card">
                    <div class="flip-card">
                        <div class="card alert-success">
                            <h6>3</h6>
                        </div>
                        <div class="well">
                            <h5>Operation time</h5>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'datasensor-grid',
    'dataProvider' => $datasensor->search(),
    'filter' => $datasensor,
    'columns' => array(
//		'id',
//		'id_alat',
        'create_at',
        'suhu',
        'ph',
        'do',
        'hasil',
//		'status',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}',
        ),
    ),
));
?>

<!--<table>
    <tr>
        <th>Tanggal</th>
        <th>Suhu</th>
        <th>pH</th>
        <th>DO</th>
        <th>Hasil</th>
        <th>Status</th>
    </tr>-->
<?php
//    print_r($datasensor);
//    exit();
//    $data = array();
//    foreach ($datasensor as $m) {  // loop to get the data (this is different from the complex way)
//        $data[] = $m->attributes;
?>
<!--        <tr>
            <td><?php // echo $m->create_at  ?></td>
            <td><?php // echo $m->suhu  ?></td>
            <td><?php // echo $m->ph  ?></td>
            <td><?php // echo $m->do  ?></td>
            <td><?php // echo $m->hasil  ?></td>
            <td><?php // echo $m->status  ?></td>
        </tr>-->
<?php
//    }
?>

<?php
// the pagination widget with some options to mess
//    $this->widget('CLinkPager', array(
//        'currentPage' => $pages->getCurrentPage(),
//        'itemCount' => $item_count,
//        'pageSize' => $page_size,
//        'maxButtonCount' => 5,
//        //'nextPageLabel'=>'My text >',
//        'header' => '',
//        'htmlOptions' => array('class' => 'pages'),
//    ));
?>