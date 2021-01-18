<?php 
namespace app\common\components;
use yii;
class Verify extends \yii\db\ActiveRecord
{
	public function Verify()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => null,
                //背景颜色
                'backColor' => 0x000000,
                //最大显示个数
                'maxLength' => 4,
                //最少显示个数
                'minLength' => 4,
                //间距
                'padding' => 2,
                //高度
                'height' => 30,
                //宽度
                'width' => 85,
                //字体颜色
                'foreColor' => 0xffffff,
                //设置字符偏移量
                'offset' => 4,
            ],
        ];
    }
}


?>