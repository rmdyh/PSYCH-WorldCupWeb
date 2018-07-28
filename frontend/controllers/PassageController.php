<?php
/**
 * Created by PhpStorm.
 * User: WZZ
 * Date: 2018/7/28
 * Time: 21:02
 */
namespace frontend\controllers;

use Codeception\Step\Comment;
use Yii;
use frontend\models\Passage;
use frontend\models\PassageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class PassageController extends Controller{
    public function ActionView($id){
        $data = new Passage();
        $model;
        $model['title'] = $id;
        $model['passage'] = Passage::find()->where(["id"=>$id])->all();
        $model['comment'] = Comment::find()->where(["Passageid"=>$id])->all();
        return $this->render('view', ['model'=>$model]);
    }
}