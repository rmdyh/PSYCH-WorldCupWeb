
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\User;
use yii\widgets\linkPager;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
        <script>
            function deluser(id){
                alert("you clicked here");
                $.post("./?r=user/delete&id="+id, {'id' : id}, function(data){
                    alert('success deleted!');
                });
            }
        </script>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<div class="admin-userspan" id="admin-userspan" style="padding:100px 40px; background: white">

    <p class="text-center">
        User Admin
    </p>
    <hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>userid</th>
            <th>username</th>
            <th>email</th>
            <th>signuptime</th>
            <th>operation</th>
        </tr>
        </thead>
        <tbody>
        <?php $users = user::find()->where(['status'=>'10'])->offset($pagination->offset)->limit($pagination->limit)->all();
        foreach($users as $user):?>
            <tr>
                <td>
                    <?= $user->id?>
                </td>
                <td>
                    <?= $user->username?>
                </td>
                <td>
                    <?= $user->email?>
                </td>
                <td>
                    <?= date("Y-m-d", $user->created_at)?>
                </td>
                <td>
                    <button class="btn btn-success" onclick="deluser(<?=$user->id?>)">删除此用户</button>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <?= LinkPager::widget(["pagination" => $pagination])?>
</div>
