<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Tovar;
use frontend\models\Maxsulot;
use frontend\models\Car;
use frontend\models\Users;



/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    // public function actionCreate()
    // {
    //     $user = new \common\models\User();
    //     $user-> username = 'admin';
    //     $user-> email = 'firdavs@gmail.com';
    //     $user-> status = \common\models\User::STATUS_ACTIVE;
    //     $user-> setPassword('admin');
    //     $user-> generateAuthKey();
    //     $user->save();
    //     echo 'ok';
    // }


    public function actionCar()
    {
        $db = Car::find();

        $sahifa = new Pagination(
            [
                'totalCount' => $db -> count(),
                'defaultPageSize' => 20,
                // 'pageParam' => 'sahifa',
        ]);


        $test = $db -> offset($sahifa -> offset) ->limit($sahifa -> limit) -> all();
        return $this->render('car', ['t'=> $test, 'sahifa' => $sahifa]);
    }

    

    public function actionUsers()
    {
        $db = Users::find();

        $sahifa = new Pagination(
            [
                'totalCount' => $db -> count(),
                'defaultPageSize' => 20,
                // 'pageParam' => 'sahifa',
        ]);


        $test = $db -> offset($sahifa -> offset) ->limit($sahifa -> limit) -> all();
        return $this->render('users', ['t'=> $test, 'sahifa' => $sahifa]);
    }



    public function actionTest()
    {
        $db = Tovar::find();

        $sahifa = new Pagination(
            [
                'totalCount' => $db -> count(),
                'defaultPageSize' => 5,
                // 'pageParam' => 'sahifa',
        ]);


        $test = $db -> offset($sahifa -> offset) ->limit($sahifa -> limit) -> all();
        return $this->render('test', ['t'=> $test, 'sahifa' => $sahifa]);
    }


    public function actionTovar()
    {
        $model = new Tovar();
        $t =  date("d.m.Y");


        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->vaqti = $t;
                $model->save();
                // form inputs are valid, do something here
                return $this->redirect('/site/test');
            }
        }

        return $this->render('tovar', [
            'model' => $model,
        ]);
    }


    public function actionView($id)
    {
        if (Yii::$app->user->can('ochirish'))
            {
                $model = Tovar::findOne($id);
                return $this->render('view', ['view' => $model]);
            }
        else
        {
            return $this->redirect(['site/index']);
        }


    }


    public function actionEdit($id)
    {
        if (Yii::$app->user->can('ochirish'))
            {
                $edit = Tovar::findOne($id);
                    if ($edit -> load(Yii::$app->request->post()))
                    {
                        $edit->save();
                        return $this->redirect(['site/test']);
                    }
                    return $this->render('edit', ['edit'=>$edit]);

            }
        else
            {
                return $this->redirect(['site/index']);
            }

    }

    public function actionDelete($id)
    {
        if(Yii::$app->user->can('ochirish'))
        {
                $model = Tovar::findOne($id);
                $model->delete();
                return $this->redirect(['site/test']);
        }
        else
        {
            return $this->redirect(['site/index']);
        }
    }




    public function actionCategory()
    {
        $model = new \frontend\models\Category();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->save();
                // form inputs are valid, do something here
                return$this->redirect('/');;
            }
        }

        return $this->render('category', [
            'model' => $model,
        ]);
    }


    public function actionForm()
    {
        $t = time();
        // $model = new Maxsulot();

        // if ($model->load(Yii::$app->request->post())) {
        //     if ($model->validate()) {

        //         $model->foto = UploadedFile::getInstance($model, 'foto');
        //         $model->foto->saveAs("../../uploads/".$t.".".$model->foto->extension);
        //         // form inputs are valid, do something here
        //         $model->foto = $t.".".$model->foto->extension;
        //         $model->save();
        //         return $this->redirect('/');

        //     }
        //     // $model->save();
        // }

        return $this->render('form', [
            'model' => $model,
        ]);
    }


    public function actionIndex()
    {
        $db = Maxsulot::find()->all();
        return $this->render('index', ['data' => $db]);
        // return $this->render('index');
    }

    // public function actionForm()
    // {
    //     $model = new \frontend\models\Category();

    //     if ($model->load(Yii::$app->request->post())) {
    //         if ($model->validate()) {
    //             $m = \frontend\models\Category::find()->where(['like','category', $model->category])->all();
    //             return $this->render('form', [
    //             'model' => $model,
    //             'natija' => $m,
    //         ]);

    //         }
    //     }

    //     return $this->render('form', [
    //         'model' => $model,
    //     ]);
    // }

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
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
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
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $db = Tovar::find()->all();
        return $this->render('about', ['tovars' => $db]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
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
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
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
        } catch (InvalidArgumentException $e) {
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

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
