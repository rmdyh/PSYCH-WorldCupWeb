<Doctype>

<?php
/**
 * Created by PhpStorm.
 * User: WZZ
 * Date: 2018/7/31
 * Time: 23:24
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Player;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use frontend\components\PageHeadWidget;
use yii\data\ActiveDataProvider;


$this->title = '投稿';
$this->params['breadcrumbs'][] = $this->title;

?>

    <div id="summernote">Hello Summernote</div>

<form method="post">
    <textarea id="summernote" name="editordata"></textarea>
</form>

    <script>
        $('#summernote').ready();
    </script>