<?php

namespace app\controllers\admin;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use app\controllers\admin\IlldefController;

/**
 * 
 */
class IndexController extends IlldefController
{
	public function actionIndex(){//首页
		return $this->render('index');
	}
	public function actionFoot(){//公共底部
		return $this->render('foot');
	}
	public function actionHead(){//公共头部
		return $this->render('head');
	}
	public function actionLeft(){//公共菜单
		return $this->render('left');
	}
	public function actionMain(){//公共菜单
		return $this->render('main');
	}
}
?>