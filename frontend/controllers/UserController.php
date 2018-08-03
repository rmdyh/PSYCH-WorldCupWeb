<?php
namespace frontend\controllers;
/**
 * Created by PhpStorm.
 * User: WZZ
 * Date: 2018/8/2
 * Time: 23:45
 */
use Yii;
use frontend\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Favorite;
use frontend\models\passage;
/**
 * TeamController implements the CRUD actions for Team model.
 */
class UserController extends Controller{

    public $layout = 'index_layout';

    public function actionShow($id){//all users seen
        $guestid = yii::$app->user->identity->getId();
        if(yii::$app->user->isGuest){
            return $this->goHome();
        }
        $model = user::findone($id);
        $favors = favorite::find()->where(["user_ID" => $id])->all();
        $posts = passage::find()->where(["author_ID"=> $id])->all();

        return $this->render('show', [
            "model" => $model,
            "favors" => $favors,
            "posts" => $posts,
            ]);
    }
    public function actionIndex($id){//owner seen\

        /*
        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest){
            return $this->goHome();
        }
        */
        $model = user::findone($id);
        $favors = favorite::find()->where(["user_ID" => $id])->all();
        $posts = passage::find()->where(["author_ID"=> $id])->all();

        return $this->render('view', [
            "model" => $model,
            "favors" => $favors,
            "posts" => $posts,
        ]);
    }
    public function actionView($id){//owner seen\


        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest){
            return $this->goHome();
        }

        $model = user::findone($id);
        $favors = favorite::find()->where(["user_ID" => $id])->all();
        $posts = passage::find()->where(["author_ID"=> $id])->all();

        return $this->render('view', [
            "model" => $model,
            "favors" => $favors,
            "posts" => $posts,
        ]);
    }
    public function actionEdit($id){
        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest){
            return $this->goHome();
        }

        $model = user::findone($id);
        return $this->render('edit', [
            "model" => $model,
        ]);
    }
    public function actionEditpost($id){
        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest || !yii::$app->request->isPost){
            return $this->goHome();
        }
        $user = user::findone($id);
        $user->load(yii::$app->request->post());
        $user->save();
        return $this->redirect(['index&id='.$id]);
    }
    public function actionWrite($id){
        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest){
            return $this->goHome();
        }
        $psg = new Passage();
        $model = user::findone($id);
        return $this->render('write', [
            "model" => $model,
            "psg" => $psg,
        ]);
    }
    public function actionWritepost($id){
        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest || !yii::$app->request->isPost){
            return $this->goHome();
        }
        $psg = new passage();
        date_default_timezone_set("Asia/Shanghai");
        if($psg->load(yii::$app->request->post())){
            $psg->author_ID = Yii::$app->user->identity->ID;
            $psg->date = date("Y-m-d h:i:sa");
            $psg->author= Yii::$app->user->identity->username;
            $psg->status = "pending";

        }
        $psg->save();
        return $this->redirect(['index&id='.$id]);
    }
}