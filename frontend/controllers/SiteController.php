<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Match;
use frontend\models\Player;
use frontend\models\Team;
/**
 * Site controller
 */
class SiteController extends Controller
{
    
    public $layout = "index_layout";
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
     public function actionMatch()
    {
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
        return $this->render('match',[
            'matchs'=>$match,
        ]);
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionTeams()
    {
       
        return $this->render('teams');

       
    }
     public function actionTeaminfo()
    {
         $teaminfo= Team::find()->where(["country" => "俄罗斯"])->all();
          return $this->render('teaminfo',[
            'teaminfo'=>$teaminfo,

        ]);
      }

    public function actionMatch_()
    {
        $match_;
        $match_['1/8决赛']=Match::find()->where(["stage" => "1/8决赛"])->orderBy('time1','time2','time3')->all();
        $match_['1/4决赛']=Match::find()->where(["stage" => "1/4决赛"])->orderBy('time1','time2','time3')->all();
        $match_['半决赛']=Match::find()->where(["stage" => "半决赛"])->orderBy('time1','time2','time3')->all();
        $match_['3、4名决赛']=Match::find()->where(["stage" => "3、4名决赛"])->orderBy('time1','time2','time3')->all();
        $match_['1、2名决赛']=Match::find()->where(["stage" => "1、2名决赛"])->orderBy('time1','time2','time3')->all();
        
        return $this->render('match_',[
            'match_'=>$match_,

        ]);
    }
     public function actionPlayers()
    {

        $model = new Player();
        $data = Player::find()->all();



       $player;
       $player['俄罗斯']=Player::find()->where(["country" => "俄罗斯"])->all();
       $player['埃及']=Player::find()->where(["country" => "埃及"])->all();
       $player['乌拉圭']=Player::find()->where(["country" => "乌拉圭"])->all();
       $player['沙特阿拉伯']=Player::find()->where(["country" => "沙特阿拉伯"])->all();
       $player['伊朗']=Player::find()->where(["country" => "伊朗"])->all();
       $player['摩洛哥']=Player::find()->where(["country" => "摩洛哥"])->all();
       $player['葡萄牙']=Player::find()->where(["country" => "葡萄牙"])->all();
       $player['西班牙']=Player::find()->where(["country" => "西班牙"])->all();
       $player['丹麦']=Player::find()->where(["country" => "丹麦"])->all();
       $player['法国']=Player::find()->where(["country" => "法国"])->all();
       $player['澳大利亚']=Player::find()->where(["country" => "澳大利亚"])->all();
       $player['秘鲁']=Player::find()->where(["country" => "秘鲁"])->all();
       $player['克罗地亚']=Player::find()->where(["country" => "克罗地亚"])->all();
       $player['冰岛']=Player::find()->where(["country" => "冰岛"])->all();
       $player['尼日利亚']=Player::find()->where(["country" => "尼日利亚"])->all();
       $player['阿根廷']=Player::find()->where(["country" => "阿根廷"])->all();
       $player['哥斯达黎加']=Player::find()->where(["country" => "哥斯达黎加"])->all();
       $player['塞尔维亚']=Player::find()->where(["country" => "塞尔维亚"])->all();
       $player['巴西']=Player::find()->where(["country" => "巴西"])->all();
       $player['瑞士']=Player::find()->where(["country" => "瑞士"])->all();
       $player['墨西哥']=Player::find()->where(["country" => "墨西哥"])->all();
       $player['德国']=Player::find()->where(["country" => "德国"])->all();
       $player['瑞典']=Player::find()->where(["country" => "瑞典"])->all();
       $player['韩国']=Player::find()->where(["country" => "韩国"])->all();
       $player['巴拿马']=Player::find()->where(["country" => "巴拿马"])->all();
       $player['比利时']=Player::find()->where(["country" => "比利时"])->all();
       $player['突尼斯']=Player::find()->where(["country" => "突尼斯"])->all();
       $player['英格兰']=Player::find()->where(["country" => "英格兰"])->all();
       $player['德国']=Player::find()->where(["country" => "德国"])->all();
       $player['哥伦比亚']=Player::find()->where(["country" => "哥伦比亚"])->all();
      $player['塞内加尔']=Player::find()->where(["country" => "塞内加尔"])->all();
       $player['日本']=Player::find()->where(["country" => "日本"])->all();
       $player['波兰']=Player::find()->where(["country" => "波兰"])->all();
      
        return $this->render('players',[
            'players'=>$player,
            'model' => $model,
            'data' => $data,
        ]);

    }
}
