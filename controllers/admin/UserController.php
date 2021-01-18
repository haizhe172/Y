<?php

namespace app\controllers\admin;
use app\models\AdminUser;
use app\models\AdminUserModel;
use yii\web\UploadedFile;
use Yii;
use backend\components\Upload;

class UserController extends \yii\web\Controller
{

	//展示
    public function actionIndex()
    {
    	$searchModel = new AdminUserModel();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    	return $this->render('index', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
        ]);

    }
    
    
    
    //添加
    public function actionCreate()
    {   
        //实例化数据库
        $AdminUserModel = new AdminUser();
        //判断请求方式
        if(Yii::$app->request->isGet){
            return $this->render('create',
            ['model'=>$AdminUserModel]
            );
        }

        //调用自定义组件
        $img = Yii::$app->imgload->UploadPhoto($AdminUserModel,"/upload/","user_top");
        if(empty($img)){
            return $this->redirect(['create']);
        }
        //接收参数
        $post = Yii::$app->request->post();

        $AdminUserModel->load($post);

        $hash = Yii::$app->getSecurity()->generatePasswordHash($post['AdminUser']['user_pwd']);
        $AdminUserModel->user_pwd = $hash;
        $AdminUserModel->user_top = $img;
        //入库
        if($AdminUserModel->save())
        {
            return $this->redirect("/index.php?r=admin/user/index");
        }
    }
    //删除
    public function actionDelete()
    {
        $id = Yii::$app->request->get('id');
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    //修改
    public function actionUpdate()
    {   
        $id = Yii::$app->request->get('id');
        $AdminUserModel = $this->findModel($id);
        if(Yii::$app->request->isGet){
        	return $this->render("update",[
                'model'=>$AdminUserModel
            ]);
        }
        //调用自定义组件
        $img = Yii::$app->imgload->UploadPhoto($AdminUserModel,"/upload/","user_top");
        //接收参数
        $post = Yii::$app->request->post();

        $AdminUserModel->load($post);
        $AdminUserModel->user_top = $img;
        //入库
        if($AdminUserModel->save())
        {
            return $this->redirect("/index.php?r=admin/user/index");
        }



    }


    //根据id获取详细数据
    protected function findModel($id)
    {
        if (($model = AdminUser::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
