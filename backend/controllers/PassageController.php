<?php

namespace backend\controllers;

use Yii;
use backend\models\Passage;
use backend\models\PassageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * PassageController implements the CRUD actions for Passage model.
 */
class PassageController extends Controller
{
    public $layout = "index";
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
        $query = passage::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $searchModel = new PassageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Displays a single Passage model.
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
     * Creates a new Passage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Passage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Passage model.
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
     * Deletes an existing Passage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $target = passage::findone($id);
        $target->status = 'deleted';
        //$this->findModel($id)->delete();
        $target->save();
        return $this->redirect(['index']);
    }

    public function actionAbort($id){
        $target = $this->findModel($id);
        $target->status = 'aborted';
        //$this->findModel($id)->delete();
        $target->save();
        return $this->redirect(['index']);
    }

    public function actionEdit($id){
        $model = $this->findModel($id);
        return $this->render('edit', [
            'model'=>$model,
            ]);
    }

    public function actionEditpost($id){
        $target = $this->findModel($id);
        $target->load(yii::$app->request->post());
        $target->save();
        return $this->redirect(['index']);
    }

    public function actionCensor($res, $id){
        $target = $this->findModel($id);
        $target->status = ($res == 1)? 'success':'abort';
        if($res == 2) $target->status='delete';
        $target->save();
        return $this->redirect(['index']);
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
