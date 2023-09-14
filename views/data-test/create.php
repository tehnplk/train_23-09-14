<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DataTest $model */

$this->title = 'เพิ่มแบบสอบถาม';
$this->params['breadcrumbs'][] = ['label' => 'รายการแบบสอบถาม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-test-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
