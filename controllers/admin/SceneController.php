<?php

namespace app\controllers\admin;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\SceneModel;
/**
 * BarController implements the CRUD actions for Bar model.
 */
class SceneController extends Controller
{
    //景点添加
	public function actionCreate(){
		if(Yii::$app->request->isGet){
			return $this->render("create");
		}

		//实例化model
		$SceneModel = new SceneModel();
		//load方法用于加载数据
		$SceneModel->load(Yii::$app->request->post(),"");
		$SceneModel->create_time = time();
		if($SceneModel->save()){
			//添加成功
			return $this->redirect("/?r=admin/scene/index");
		}
		//添加失败
		return $this->redirect("/?r=admin/scene/create");
	}

	//景点展示
	public function actionIndex(){
		$SceneModel = new SceneModel();
		$data = $SceneModel->search();		
    	return $this->render('index', [
        'data' => $data,
        ]);
	}
	//景点删除
	public function actionDelete(){
		$id = Yii::$app->request->get('id');
        if($this->findModel($id)->delete()){
        	$data = ['code'=>100,"msg"=>'删除成功'];
        }else{
        	$data = ['code'=>101,"msg"=>'删除失败'];

        }
       	return json_encode($data);
	}
	//景点修改
	public function actionUpdate(){
		if(Yii::$app->request->isGet){
			$id = Yii::$app->request->get('scene_id');
			$find_model = $this->findModel($id);
			return $this->render("update",['data'=>$find_model]);
		}
		
		$data = Yii::$app->request->post();
		$model = $this->findModel($data['scene_id']);
		$model->load($data,"");
		if($model->save()){
			return $this->redirect("/?r=admin/scene/index");
		}
		return $this->redirect("/?r=admin/scene/index");


	}	
	//指定查询一条数据
	protected function findModel($id)
    {
        if (($model = SceneModel::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}


