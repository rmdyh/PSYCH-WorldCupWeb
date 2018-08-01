<?php

namespace frontend\controllers;

use frontend\models\Comment;
use Yii;
use frontend\models\Passage;
use frontend\models\PassageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Favorite;

/**
 * PassageController implements the CRUD actions for Passage model.
 */
class PassageController extends Controller
{
    public $layout = "index_layout";
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Passage models.
     * @return mixed
     */
    public function actionIndex()
    {

        $passage = Passage::find()->all();
        return $this->render('index', [
            'passage' => $passage,
        ]);
    }

    /**
     * Displays a single Passage model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $post=Passage::findOne($id);
        $post->updateCounters(['seen'=>1]);
       $amount=favorite::find()->where(["passage_ID" => $id])->count();
       $amount1=comment::find()->where(["passage_ID" => $id])->count();
       $comment1=comment::find()->where(["passage_ID" => $id])->all();
        $commentd = new Comment();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'commentd' => $commentd,
            'amount'=>$amount,
            'amount1'=>$amount1,
            'comment1'=>$comment1,
        ]);
    }

    /**
     * Creates a new Passage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Comment();
//        $model->ID='';
//        $model->content='123213';
//        $model->date='13243';
//        $model->parent='0';
//        $model->passage_ID='1';
//        $model->user_ID='5';
//        $model->username='1';
//        $model->status='normal';
//        $model->save();
       if (Yii::$app->user->isGuest) {
    Yii::$app->user->setReturnUrl(Yii::$app->request->getUrl());  // 设置返回的url,登录后原路返回
    Yii::$app->user->loginRequired();
    Yii::$app->end();
      
}
else{
    date_default_timezone_set("Asia/Shanghai");
    if($model->load(Yii::$app->request->post())&&$model->load('$user_ID'=>Yii::$app->user->identity->ID,'username'=>Yii::$app->user->identity->username,'date'=>date("Y-m-d h:i:sa"),'status'=>'normal')&&$model->save())
        // if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
            return $this->redirect(['view','id' => $model->passage_ID]);
        } else {
           // return $this->redirect(['view','id' => 2]);
           return $this->render('create', [
               'model' => $model,
           ]);
        }
    }
    }

    /**
     * Finds the Passage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Passage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Passage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
