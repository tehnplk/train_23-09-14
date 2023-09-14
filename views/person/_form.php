<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Person $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'birth')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?php
            $sql = "select * from csex";
            $raw = \Yii::$app->db->createCommand($sql)->queryAll();
            $items = \yii\helpers\ArrayHelper::map($raw, 'id', 'name');
            echo $form->field($model, 'sex')->dropDownList($items, ['prompt' => '--- เพศ ---']);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-check"></i> บันทึก', ['class' => 'btn btn-lg btn-primary']) ?>
    </div>




    <?php ActiveForm::end(); ?>

</div>
