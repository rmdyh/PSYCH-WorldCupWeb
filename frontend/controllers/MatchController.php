<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Match;
use frontend\models\MatchSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Team;
/**
 * MatchController implements the CRUD actions for Match model.
 */
class MatchController extends Controller
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
     * Lists all Match models.
     * @return mixed
     */
    public function actionIndex($type="小组赛")
    {
        // $searchModel = new MatchSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
         if($type=="小组赛"){
            $match;
        //  $match['A组']=Match::find()->where(['or',['country'=>'俄罗斯'],['sec_country'=>'俄罗斯']])->all();
            $match['A组']=Match::find()->where(["stage" => "小组赛A"])->orderBy('time1','time2','time3')->all();
            $match['B组']=Match::find()->where(["stage" => "小组赛B"])->orderBy('time1','time2','time3')->all();
            $match['C组']=Match::find()->where(["stage" => "小组赛C"])->orderBy('time1','time2','time3')->all();
            $match['D组']=Match::find()->where(["stage" => "小组赛D"])->orderBy('time1','time2','time3')->all();
            $match['E组']=Match::find()->where(["stage" => "小组赛E"])->orderBy('time1','time2','time3')->all();
            $match['F组']=Match::find()->where(["stage" => "小组赛F"])->orderBy('time1','time2','time3')->all();
            $match['G组']=Match::find()->where(["stage" => "小组赛G"])->orderBy('time1','time2','time3')->all();
            $match['H组']=Match::find()->where(["stage" => "小组赛H"])->orderBy('time1','time2','time3')->all();

            $group;
            $group['A组']=Team::find()->where(["f_group" => "A"])->orderBy('jifen DESC')->all();
            $group['B组']=Team::find()->where(["f_group" => "B"])->orderBy('jifen DESC')->all();
            $group['C组']=Team::find()->where(["f_group" => "C"])->orderBy('jifen DESC')->all();
            $group['D组']=Team::find()->where(["f_group" => "D"])->orderBy('jifen DESC')->all();
            $group['E组']=Team::find()->where(["f_group" => "E"])->orderBy('jifen DESC')->all();
            $group['F组']=Team::find()->where(["f_group" => "F"])->orderBy('jifen DESC')->all();
            $group['G组']=Team::find()->where(["f_group" => "G"])->orderBy('jifen DESC')->all();
            $group['H组']=Team::find()->where(["f_group" => "H"])->orderBy('jifen DESC')->all();


            return $this->render('index',[
                'type'=>$type,
                'matchs'=>$match,
                'group'=>$group,
            ]);
        }
        else{
            $match_;
            $match_['1/8决赛'] = Match::find()->where(["stage" => "1/8决赛"])->orderBy('time1', 'time2', 'time3')->all();
            $match_['1/4决赛'] = Match::find()->where(["stage" => "1/4决赛"])->orderBy('time1', 'time2', 'time3')->all();
            $match_['半决赛'] = Match::find()->where(["stage" => "半决赛"])->orderBy('time1', 'time2', 'time3')->all();
            $match_['3、4名决赛'] = Match::find()->where(["stage" => "3、4名决赛"])->orderBy('time1', 'time2', 'time3')->all();
            $match_['1、2名决赛'] = Match::find()->where(["stage" => "1、2名决赛"])->orderBy('time1', 'time2', 'time3')->all();

            return $this->render('index', [
                'type'=>$type,
                'match_' => $match_,
            ]);
        }
    }

    /**
     * Displays a single Match model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Match model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Match();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Match model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Match model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Match model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Match the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Match::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
