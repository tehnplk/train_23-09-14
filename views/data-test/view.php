<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\DataTest $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-test-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vstdate',
            'data_test1',
            'note1',
            'note1_1',
            'note1_2',
            'data_test2',
            'note2',
            'note2_1',
            'note2_2',
            'data_test3',
            'note3',
            'note3_1',
            'note3_2',
            'data_test4',
            'note4',
            'note4_1',
            'note4_2',
            'data_test5',
            'note5',
            'note5_1',
            'note5_2',
            'data_test6',
            'note6',
            'note6_1',
            'note6_2',
            'data_test7',
            'note7',
            'note7_1',
            'note7_2',
            'data_test8',
            'note8',
            'note8_1',
            'note8_2',
            'data_test9',
            'note9',
            'note9_1',
            'note9_2',
            'data_test10',
            'note10',
            'note10_1',
            'note10_2',
            'data_test11',
            'note11',
            'note11_1',
            'note11_2',
            'data_test12',
            'note12',
            'note12_1',
            'note12_2',
            'note',
            'checkuser_id',
        ],
    ]) ?>

</div>
