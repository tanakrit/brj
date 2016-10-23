<?php



use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2


/* @var $this yii\web\View */
/* @var $model app\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'group_name')->dropDownList(\yii\helpers\ArrayHelper::map(app\models\Groups::find()->all(),'id','name')) ?>
    <?= $form->field($model, 'group_name')->widget(Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map(app\models\Groups::find()->all(), 'id', 'name'),
    'language' => 'th',
    'options' => ['placeholder' => '<--เลือกกลุ่มงาน-->'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>