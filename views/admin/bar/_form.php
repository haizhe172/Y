<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bra_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bra_open')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_time')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
