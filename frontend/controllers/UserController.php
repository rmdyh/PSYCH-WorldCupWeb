<?php
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

    public function actionView($id){//all users seen
        $guestid = yii::$app->user->identity->getId();
        if(yii::$app->user->isGuest){
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
    public function actionIndex($id){//owner seen
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
        return $this->redirect(['index&id='.$id.'&sta=editsuc']);
    }
    public function actionWrite($id){
        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest){
            return $this->goHome();
        }

        $model = user::findone($id);
        return $this->render('edit', [
            "model" => $model,
        ]);
    }
    public function actionWritepost($id){
        $guestid = yii::$app->user->identity->getId();
        if($id != $guestid || yii::$app->user->isGuest || !yii::$app->request->isPost){
            return $this->goHome();
        }
        $psg = new passage();
        $psg->load(yii::$app->request->post());
        $psg->save();
        return $this->redirect(['index&id='.$id.'&sta=writesuc']);
    }
}