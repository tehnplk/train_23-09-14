<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;


/** @var yii\web\View $this */
/** @var app\models\DataTest $model */
/** @var yii\widgets\ActiveForm $form */
?>
<style>
    .box-t {
        
        padding: 15px ;
        margin-bottom: 15px;
        border: dotted coral 1px;
        background-color: #0069d9;
        color: white;
        border-radius: 8px
        
    }
    
</style>

<div class="data-test-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'vstdate')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        //'pickerButton' => false,
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ])->label('วันที่');
    ?>
    <div class="box-t">
        <?= $form->field($model, 'data_test1')->dropDownList(['Y' => 'มี', 'N' => 'ไม่มี',], ['prompt' => '']) ?>
        <div id="t1" style="margin-left: 15px ; display: none">
            <?= $form->field($model, 'note1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'note1_1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'note1_2')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="box-t">
         <?= $form->field($model, 'data_test2')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>
        <div id="t2" style="margin-left: 15px ;display: none">
           

            <?= $form->field($model, 'note2')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'note2_1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'note2_2')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'data_test3')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note3_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note3_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test4')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note4_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note4_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test5')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note5_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note5_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test6')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note6_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note6_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test7')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note7_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note7_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test8')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note8_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note8_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test9')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note9_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note9_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test10')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note10_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note10_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test11')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note11_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note11_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_test12')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'note12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note12_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note12_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checkuser_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$js = <<<JS
    $('#datatest-data_test1').change(function(){
       val = $(this).val();
       if(val == 'N'){
           $('#t1').show("slow");
       }else{
           $('#t1').hide("slow");
       }
    });
        
    $('#datatest-data_test2').change(function(){
       val = $(this).val();
       if(val == 'N'){
           $('#t2').show();
       }else{
           $('#t2').hide();
       }
    });
        
JS;

$this->registerJs($js);


