<?php

use app\models\DataTest;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use dosamigos\chartjs\ChartJs;

/** @var yii\web\View $this */
/** @var app\models\DataTestSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'รายการแบบสอบถาม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-test-index">
    <pre>
        <?php
        print_r($data_chart[0]);
        ?>
    </pre>

    <p>
        <?= Html::a('เพิ่มแบบสอบถาม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'vstdate',
            'data_test1',
            'note1',
            //'note1_1',
            //'note1_2',
            //'data_test2',
            'note2',
            //'note2_1',
            //'note2_2',
            //'data_test3',
            'note3',
            //'note3_1',
            //'note3_2',
            //'data_test4',
            'note4',
            //'note4_1',
            //'note4_2',
            //'data_test5',
            //'note5',
            //'note5_1',
            //'note5_2',
            //'data_test6',
            //'note6',
            //'note6_1',
            //'note6_2',
            //'data_test7',
            //'note7',
            //'note7_1',
            //'note7_2',
            //'data_test8',
            //'note8',
            //'note8_1',
            //'note8_2',
            //'data_test9',
            //'note9',
            //'note9_1',
            //'note9_2',
            //'data_test10',
            //'note10',
            //'note10_1',
            //'note10_2',
            //'data_test11',
            //'note11',
            //'note11_1',
            //'note11_2',
            //'data_test12',
            //'note12',
            //'note12_1',
            //'note12_2',
            //'note',
            //'checkuser_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataTest $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]);
    ?>



    <?=
    ChartJs::widget([
        'type' => 'bar',
        'options' => [
            'height' => 200,
            'width' => 400
        ],
        'data' => [
            'labels' => ["มค", "กพ", "มีค", "เมย", "พค", "มิย", "กค", "สค", "กย", "ตค", "พย", "ธค"],
            'datasets' => [
                [
                    'label' => "ข้อมูล",
                    'backgroundColor' => "red",
                    'borderColor' => "rgba(179,181,198,1)",
                    'pointBackgroundColor' => "rgba(179,181,198,1)",
                    'pointBorderColor' => "#fff",
                    'pointHoverBackgroundColor' => "#fff",
                    'pointHoverBorderColor' => "rgba(179,181,198,1)",
                    'data' => [$data_chart[0]['a'], $data_chart[0]['b'],$data_chart[0]['c']]
                ],
            ]
        ]
    ]);
    ?>



</div>
