<?php

namespace app\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AdminUser;
use yii\web\Session;

/**
 * BarModel represents the model behind the search form of `app\models\Bar`.
 */
class AdminUserModel extends AdminUser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    //展示页面
    public function search($params)
    {
        $query = AdminUser::find();
        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'user_id' => $this->user_id,
        ]);
        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'user_tel', $this->user_tel]);
        return $dataProvider;
    }
    //登录
    /**
     * [dologin description]
     * @param  [type] $user_name [用户名]
     * @param  [type] $user_pwd  [密码]
     * @return [type] false      [没有返回数据]
     */
    public function dologin($user_name,$user_pwd){
        //根据用户名查取用户信息
        $DbUserData =AdminUser::find()->select('user_pwd,user_id')->where(['user_name'=>$user_name])->asArray()->one();
        //没有该用户
        if(empty($DbUserData)){
            return false;
        }
        //密码错误
        if(!Yii::$app->getSecurity()->validatePassword($user_pwd,$DbUserData['user_pwd'])){
            return false;
        }
        //登录成功
        $session = new Session;
        $session['user_id'] = $DbUserData['user_id'];
        $session['user_name'] = $DbUserData['user_name'];
        return true;
    }
}