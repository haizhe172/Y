<?php
namespace app\controllers\admin;
use Yii;
use app\models\AdminUser;
use app\models\AdminUserModel;
use yii\web\Controller;
use yii\helpers\Url;
class LoginController extends Controller
{
    public function actionLogin()
    {
    	$AdminUserModel = New AdminUserModel();
    	if(Yii::$app->request->isGet){
        	return $this->render('login');
    	}
    	$post = Yii::$app->request->post();
    	if($AdminUserModel->dologin($post['user_name'],$post['user_pwd']) && $this->createAction('captcha')->validate($post['verify'],false)){
    		return $this->redirect("?r=admin/index/index");
    	}
    	return $this->redirect("?r=admin/login/login");
    }


    public function actions()
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
                'height' => 46,
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
