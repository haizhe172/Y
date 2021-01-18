<?php
namespace app\controllers\admin;
use yii\web\Controller;
use yii\web\Session;
Class IlldefController extends Controller
{
  public function init(){
 	parent:: init();
 	$this->Illdef();
  }
  //防非法登录
  public function Illdef(){
  	$session = new Session();
  	$user_id = $session['user_id'];
  	if(empty($user_id)){
  		return $this->redirect("/?r=admin/login/login");
  	}
  	return;
  }
}