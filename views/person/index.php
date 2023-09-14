<?php

use app\models\Person;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use dosamigos\chartjs\ChartJs;

/** @var yii\web\View $this */
/** @var app\models\PersonSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'cid',
            'fullname',
            'birth',
            'sex',
            'created_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Person $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]);
    ?>

    <?=
    ChartJs::widget([
        'type' => 'line',
        'options' => [
            'height' => 200,
            'width' => 400
        ],
        'data' => [
            'labels' => ["มค", "กพ", "มีค", "เมย", "พค", "มิย", "กค","สค","กย","ตค","พย","ธค"],
            'datasets' => [
                [
                    'label' => "ข้อมูล",
                    'backgroundColor' => "skyblue",
                    'borderColor' => "red",
                    
                    'data' => [65, 59, 90, 81, 56, 55, 40]
                ]
                
            ]
        ]
    ]);
    ?>


</div>
