<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="css_new/bootstrap.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="js/dl-menu/component.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="css_new/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="css_new/font-awesome.css" rel="stylesheet">
    <link href="css/svg-icons.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="css_new/prettyPhoto.css" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="css_new/typography.css" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="css_new/widget.css" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="css_new/shortcodes.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css_new/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css_new/responsive.css" rel="stylesheet">
 
  </head>

  <?php

use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use yii\helpers\Html;
use yii\helpers\URL;
use frontend\models\Favorite;
use frontend\models\Passage;
use frontend\models\Comment;

$this->title = '热门文章';
$this->params['breadcrumbs'][] = $this->title;
?>

  <body>

<!--kode Wrapper Start-->  
<div class="kode_wrapper"> 

    <!--Header 2 Wrap End-->
    <!--Inner Banner Start-->
  
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="kf_blog2">
            <div class="container">
                <!--Featured 3 Slider Start-->
                <div class="kf_featured_wrap3">
                    <div class="row">


                        <?php foreach($passage as $mat):?>
                        <div class="col-md-6 col-sm-6">
                            <!--Featured 3 thumb Start-->
                            <div class="kf_featured_thumb">
                                <figure>
                                    
                                     <img src=<?php echo URL::to('extra-images/feature_'.$mat->ID.'.jpg')?> alt="">

                                </figure>

                              

                                <div class="text_wrper">
                                    <div class="text">
                                        <h6>FIFA worldcup 2018</h6>                              
                                        <h2><?=Html::encode("$mat->title")?></h2>
                                        <h6><?=Html::encode("$mat->date")?></h6>
                                        <p><?=Html::encode("$mat->content")?> </p>
                                        <a class="btn_2" href=<?php echo URL::to('./?r=passage%2Fview&id='.$mat->ID)?>>Read More</a>

                                    </div>
                                    <div class="thumb_footer">
                                        <div class="admin_thumb">
                                           
                                            <h6><?=Html::encode("$mat->author")?></h6>
                                        </div>
                                        <ul class="blog_meta">
                                            <li>
                                                <span><i class="fa fa-eye"></i><?=Html::encode("$mat->seen")?></span>
                                            </li>
                                            <?php //$like=passage::find()->select(['$mat->ID']);
                                             $amount=favorite::find()->where(["passage_ID" => $mat->ID])->count();?>
                                            <li>
                                                <span class="heart"><i class="fa fa-heart-o"></i> <?= Html::encode("$amount") ?>  </span>
                                            </li>
                                              <?php //$like=passage::find()->select(['$mat->ID']);
                                             $amount=comment::find()->where(["passage_ID" => $mat->ID])->count();?>
                                            <li>
                                                <a href="#"><i class="fa fa-comment-o"></i><?= Html::encode("$amount") ?>  </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        


                             </div>
                            <!--Featured 3 thumb End-->
                        </div>
                        <?php endforeach;?>



                     
                            <!--Featured 3 thumb End-->
                        </div>
                    </div>
                </div>
                <!--Featured 3 Slider End-->
                <!--Kf Pagination Start-->
                <div class="kode-pagination text-center">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers border_none" href="#">...</a>
                    <a class="page-numbers" href="#">18</a>
                    <a class="page-numbers" href="#">19</a>
                    <a class="page-numbers" href="#">20</a>
                </div>
                <!--Kf Pagination End-->
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    <!--ticker Wrap Start-->
   
    <!--ticker Wrap End-->
    <!--Footer Wrap Start-->
   
    <!--Footer Wrap End-->
    <!--Copy Right Wrap Start-->
   
    <!--Copy Right Wrap End-->
    <!--Register Pop Up Wrap Start-->
    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog" role="document">
            <div class="input_dec">
                <input type="text" placeholder="search......">
                <button class="btn_icon"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>        
    <!--Register Pop Up Wrap End-->
</div>
<!--kode Wrapper End-->
    <!--Jquery Library-->
    <script src="js_new/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js_new/bootstrap.js"></script>
    <!--Slick Slider JavaScript-->
    <script src="js_new/slick.min.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js_new/jquery.prettyPhoto.js"></script>
    <!--Dl Menu Script-->
    <script src="js_new/dl-menu/modernizr.custom.js"></script>
    <script src="js_new/dl-menu/jquery.dlmenu.js"></script>
    <!--Custom JavaScript-->
    <script src="js_new/custom.js"></script>

  </body>
</html>


