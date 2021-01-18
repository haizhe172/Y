<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bar_id',
            'bra_name',
            'bra_open',
            'add_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
