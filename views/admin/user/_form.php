<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View *d
/* @var $model app\models\Bar */
/* @var $form yii\widgets\ActiveForm */
?>

<div>

	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    
    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'user_pwd')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'user_tel')->textInput(['maxlength' => true]) ?>
   	
   	<?= $form->field($model, 'user_top')->fileInput() ?>

    <div>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
