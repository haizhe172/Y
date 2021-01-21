<?php

namespace app\controllers\admin;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\NoticeModel;
/**
 * BarController implements the CRUD actions for Bar model.
 */
class NoticeController extends Controller
{
    //公告添加
	public function actionCreate(){
		if(Yii::$app->request->isGet){
			return $this->render("create");
		}
		//实例化model
		$NoticeModel = new NoticeModel();
		//load方法用于加载数据
		$NoticeModel->load(Yii::$app->request->post(),"");
		$NoticeModel->add_time = time();
		if($NoticeModel->save()){
			//添加成功
			return $this->redirect("/?r=admin/notice/index");
			exit;
		}
		//添加失败
		return $this->redirect("/?r=admin/notice/create");

	}
	//公告展示
	public function actionIndex(){
		$NoticeModel = new NoticeModel();
		$data = $NoticeModel->search();		
    	return $this->render('index', [
        'data' => $data,
        ]);
	}
	//公告删除
	public function actionDelete(){
		$id = Yii::$app->request->get('id');
        if($this->findModel($id)->delete()){
        	$data = ['code'=>100,"msg"=>'删除成功'];
        }else{
        	$data = ['code'=>101,"msg"=>'删除失败'];
        }
       	return json_encode($data);
        
	}
	//公告修改
	public function actionUpdate(){
		if(Yii::$app->request->isGet){
			$id = Yii::$app->request->get('notice_id');
			$find_model = $this->findModel($id);
			return $this->render("update",['data'=>$find_model]);
		}
		
		$data = Yii::$app->request->post();
		$model = $this->findModel($data['notice_id']);
		$model->load($data,"");
		if($model->save()){
			return $this->redirect("/?r=admin/notice/index");
		}
		return $this->redirect("/?r=admin/notice/index");
	}
	//指定查询一条数据
	protected function findModel($id)
    {
        if (($model = NoticeModel::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

