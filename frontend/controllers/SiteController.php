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
use frontend\models\PlayerSearch;
use frontend\models\Team;
use frontend\models\Passage;
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
        // $model;
        // $model[1]=Match::find()->where(["stage" => "1/8决赛"])->all();
        // $model[2]=Match::find()->where(["stage" => "1/4决赛"])->all();
        // $model[3]=Match::find()->where(["stage" => "半决赛"])->all();
        // $model[4]=Match::find()->where(["stage" => "3、4名决赛"])->all();
        // $model[5]=Match::find()->where(["stage" => "1、2名决赛"])->all();
        $model1=Match::find()->where(["stage" => "1/8决赛"])->orderBy('ID')->all();
        $model2=Match::find()->where(["stage" => "1/4决赛"])->all();
        $model3=Match::find()->where(["stage" => "半决赛"])->all();
        $model4=Match::find()->where(["stage" => "3、4名决赛"])->all();
        $model5=Match::find()->where(["stage" => "1、2名决赛"])->all();
        return $this->render('index',[
            "model1"=>$model1,
            "model2"=>$model2,
            "model3"=>$model3,
            "model4"=>$model4,
            "model5"=>$model5,

        ]);
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
     public function actionMatch($type="小组赛")
    {
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


            return $this->render('match',[
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

            return $this->render('match', [
                'type'=>$type,
                'match_' => $match_,
            ]);
        }
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

    public function actionPlayers()
    {
        $searchModel = new PlayerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $players=array();
        foreach ($dataProvider->getModels() as $player) {
            if(!isset($players[$player->country])){
                $players[$player->country]=array();
            }
            array_push($players[$player->country],$player);
        }

        return $this->render('players',[
            'players'=>$players,
            'model' => $searchModel,
            'data'=>$dataProvider->getModels(),
        ]);

    } 
    public function actionPassage()
    {
        $passage=Passage::find()->all();
        return $this->render('passage',[
            'passage'=>$passage,
        ]);
    }

}
  
/*
队名、主教练、成立时间、加入世界足联事件、参加次数、冠军次数、世界排名、组别
本届世界杯的比赛信息 match
球员信息 player
*/