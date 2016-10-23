<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blood')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'หญิง' => 'หญิง', 'ชาย' => 'ชาย', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
