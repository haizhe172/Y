<?php

use yii\helpers\Html;
use yii\grid\GridView;
// $this->context->layout = false; //不使用布局
/* @var $this yii\web\View */  
/* @var $searchModel app\models\BarModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create user', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'user_id',
            'user_name',
            'user_tel',
            [
                'attribute'=>'user_top',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img($model->user_top,["width"=>"84","height"=>"84"]);
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
