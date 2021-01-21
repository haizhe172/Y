<?php

namespace app\models;
use Yii;
use yii\web\UploadedFile;
use app\models\NoticeModel;
use yii\data\ActiveDataProvider;
Class NoticeModel extends \yii\db\ActiveRecord
{
	/**
	* {@inheritdoc}
	*/
    public static function tableName()
    {
        return 'notice';
    }


    //验证规则
    public function rules()
    {
        return [
            [['notice_name', 'notice_text', 'notice_start','notice_type'], 'string', 'max' => 255],
        ];
    }
    //展示页面
    public function search()
    {
        $query = NoticeModel::find()->asArray()->all();
        return $query;
    }


}