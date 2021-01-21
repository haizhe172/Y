<?php

namespace app\models;
use Yii;
use yii\web\UploadedFile;
use app\models\SceneModel;
use yii\data\ActiveDataProvider;
Class SceneModel extends \yii\db\ActiveRecord
{
	/**
	* {@inheritdoc}
	*/
    public static function tableName()
    {
        return 'scene';
    }


    //验证规则
    public function rules()
    {
        return [
            [['scene_name', 'scene_text', 'scene_start'], 'string', 'max' => 255],
        ];
    }
    //展示页面
    public function search()
    {
        $query = SceneModel::find()->asArray()->all();
        return $query;
    }


}