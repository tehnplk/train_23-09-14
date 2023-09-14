<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DataTestSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-test-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vstdate') ?>

    <?= $form->field($model, 'data_test1') ?>

    <?= $form->field($model, 'note1') ?>

    <?= $form->field($model, 'note1_1') ?>

    <?php // echo $form->field($model, 'note1_2') ?>

    <?php // echo $form->field($model, 'data_test2') ?>

    <?php // echo $form->field($model, 'note2') ?>

    <?php // echo $form->field($model, 'note2_1') ?>

    <?php // echo $form->field($model, 'note2_2') ?>

    <?php // echo $form->field($model, 'data_test3') ?>

    <?php // echo $form->field($model, 'note3') ?>

    <?php // echo $form->field($model, 'note3_1') ?>

    <?php // echo $form->field($model, 'note3_2') ?>

    <?php // echo $form->field($model, 'data_test4') ?>

    <?php // echo $form->field($model, 'note4') ?>

    <?php // echo $form->field($model, 'note4_1') ?>

    <?php // echo $form->field($model, 'note4_2') ?>

    <?php // echo $form->field($model, 'data_test5') ?>

    <?php // echo $form->field($model, 'note5') ?>

    <?php // echo $form->field($model, 'note5_1') ?>

    <?php // echo $form->field($model, 'note5_2') ?>

    <?php // echo $form->field($model, 'data_test6') ?>

    <?php // echo $form->field($model, 'note6') ?>

    <?php // echo $form->field($model, 'note6_1') ?>

    <?php // echo $form->field($model, 'note6_2') ?>

    <?php // echo $form->field($model, 'data_test7') ?>

    <?php // echo $form->field($model, 'note7') ?>

    <?php // echo $form->field($model, 'note7_1') ?>

    <?php // echo $form->field($model, 'note7_2') ?>

    <?php // echo $form->field($model, 'data_test8') ?>

    <?php // echo $form->field($model, 'note8') ?>

    <?php // echo $form->field($model, 'note8_1') ?>

    <?php // echo $form->field($model, 'note8_2') ?>

    <?php // echo $form->field($model, 'data_test9') ?>

    <?php // echo $form->field($model, 'note9') ?>

    <?php // echo $form->field($model, 'note9_1') ?>

    <?php // echo $form->field($model, 'note9_2') ?>

    <?php // echo $form->field($model, 'data_test10') ?>

    <?php // echo $form->field($model, 'note10') ?>

    <?php // echo $form->field($model, 'note10_1') ?>

    <?php // echo $form->field($model, 'note10_2') ?>

    <?php // echo $form->field($model, 'data_test11') ?>

    <?php // echo $form->field($model, 'note11') ?>

    <?php // echo $form->field($model, 'note11_1') ?>

    <?php // echo $form->field($model, 'note11_2') ?>

    <?php // echo $form->field($model, 'data_test12') ?>

    <?php // echo $form->field($model, 'note12') ?>

    <?php // echo $form->field($model, 'note12_1') ?>

    <?php // echo $form->field($model, 'note12_2') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'checkuser_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
