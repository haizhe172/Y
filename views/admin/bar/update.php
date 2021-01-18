<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bar */

$this->title = 'Update Bar: ' . $model->bar_id;
$this->params['breadcrumbs'][] = ['label' => 'Bars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bar_id, 'url' => ['view', 'id' => $model->bar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
