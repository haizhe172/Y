<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;


/**
 * This is the model class for table "admin_user".
 *
 * @property int $user_id
 * @property string|null $user_name
 * @property string|null $user_sex
 * @property string|null $user_tel
 * @property string|null $user_time
 * @property string|null $user_start
 * @property string|null $user_pwd
 * @property string|null $user_top
 */
class AdminUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_user';
    }




    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'user_tel', 'user_pwd'], 'string', 'max' => 255],
            // [['user_top'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '用户 ID',
            'user_name' => '用户名',
            'user_tel' => '用户手机号',
            'user_pwd' => '密码',
            'user_top' => '头像',
        ];
    }


    /**
     * [UploadPhoto description]
     * @param [type]  $model      [实例化模型]
     * @param [type]  $path       [图片存储路径]
     * @param [type]  $originName [图片源名称]
     * @param boolean $isthumb    [是否要缩略图]
    */
}
