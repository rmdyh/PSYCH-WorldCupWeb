<?php
    use frontend\components\NewsBarWidget;
    use frontend\components\CutBarWidget;
    use yii\helpers\Html;
    use yii\helpers\URL;
    use frontend\models\Favorite;
    use frontend\models\Passage;
    use frontend\models\Comment;
    use yii\widgets\LinkPager;

    $this->title = '热门文章';
?>

<?php foreach ($passage as $pas) : ?>
    <?= NewsBarWidget::widget([
        'title'=>$pas->title,
        'brief'=>$pas->content,
        'imgUrl'=> URL::to('extra-images/feature_' . $pas->ID . '.jpg'),
        'author'=>$pas->author,
        'seen'=>$pas->seen,
        'like'=>sizeof($pas->favorites),
        'comment'=>sizeof($pas->comments),
        'url'=> URL::to('./?r=passage%2Fview&id=' . $pas->ID)
    ])?>
<?php endforeach ?>
<?= LinkPager::widget([
    'pagination' => $pagination,
]);