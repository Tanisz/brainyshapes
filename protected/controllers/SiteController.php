<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
           /* 'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),*/
            'captcha'=>array(
                'class'=>'CaptchaExtendedAction',
                // if needed, modify settings
                'mode'=>CaptchaExtendedAction::MODE_MATH,
            ),
            
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }
    
    protected function beforeAction($action) {
        if (!parent::beforeAction($action))
            return false;
            $this->setPageTitle(CHtml::encode('Brainy Shapes'));

        return true;
    }
    
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionJatekmester_leiras() {
        $this->layout = 'generic';
        $this->render('pages/jatekmester_leiras');
    }

    public function actionTeljesites_geniusz_leiras() {
        $this->layout = 'generic';
        $this->render('pages/teljesites_geniusz_leiras');
    }

    public function actionPontszam_specialista_leiras() {
        $this->layout = 'generic';
        $this->render('pages/pontszam_specialista_leiras');
    }

    public function actionEredmeny_talentum_leiras() {
        $this->layout = 'generic';
        $this->render('pages/eredmeny_talentum_leiras');
    }

    public function actionKartyak_leiras() {
        $this->layout = 'generic';
        $this->render('pages/kartyak_leiras');
    }

    public function actionTeljesites_Jelzok_leiras() {
        $this->layout = 'generic';
        $this->render('pages/teljesites_jelzok_leiras');
    }

    public function actionEredmenyek() {
        $this->layout = 'generic';
        
        $dataProvider=new CActiveDataProvider('eredmenyek', array(
			/*'pagination'=>array(
				'pageSize'=>Yii::app()->params['pageSize'],
				'pageVar'=>'page',
			),*/
                        'pagination'=>false,
                        //'pagination'=>array('pageSize'=>10,),
			'sort'=>array(
				'defaultOrder'=>'pontszam desc',
			),
		));
        
        $this->render('pages/eredmenyek',array('dataProvider'=>$dataProvider));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = 'generic';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }
    
    
    public function actionBelepes($username = null) {
        $this->layout = 'generic';
        $model = new LoginForm;
        
        if ($username !== null) {
            $model->username = $username;
        }
        
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('belepes', array('model' => $model));
    }
    
     public function actionRegistration() {
        $this->layout = 'generic';
        $model = new RegistrationForm;
        
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'registration-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['RegistrationForm'])) {
            //echo Yii::trace(CVarDumper::dumpAsString($model), 'actionRegistration');
            $model->attributes = $_POST['RegistrationForm'];
            echo Yii::trace(CVarDumper::dumpAsString($model), 'actionRegistration');
            $psw = $model->password;
            $psw_again = $model->password_again;
            $model->activation_code = $model->generateActivationCode($model->email);
            $model->password = IdentityTools::CryptPassword($model->password);
            $model->password_again = $model->password;

            echo Yii::trace(CVarDumper::dumpAsString($model), 'actionReg');
            if ($model->registration()) {
                //echo Yii::trace(CVarDumper::dumpAsString($model), 'actionReg2');
                $eredmeny = Tools::SendMail('activation',$model->email);
                $this->redirect(array('/site/RegSucces', 'username' => $model->email, 'maileredmeny' => $eredmeny));
            } else {
                echo Yii::trace(CVarDumper::dumpAsString('save under'), 'actionReg3');
                $model->password = $psw;
                $model->password_again = $psw_again;
            }
            // validate user input and redirect to the previous page if valid
            /*if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);*/
        }
        
        $this->render('registration',array('model' => $model) );
     }  
     
    public function actionRegSucces($username = null, $maileredmeny = null) {
        $this->layout = 'generic';
        $this->render('success', array('model' => $username, 'maileredmeny' => $maileredmeny));
        Yii::app()->end();
    }
    
    public function actionActivate() {
        $this->layout = 'generic';
        echo Yii::trace(CVarDumper::dumpAsString('actionActivate'), 'actionActivate');
        $model = new Users;

        //echo Yii::trace(CVarDumper::dumpAsString($model), 'actionActivate');
        if (isset($_GET['key'])) {

            $activationcode = $_GET['key'];
            //echo Yii::trace(CVarDumper::dumpAsString($activationcode), 'actionActivate');
            if (isset($activationcode)) {
                //echo Yii::trace(CVarDumper::dumpAsString('1'), 'actionActivate');
                $model = Users::model()->findByAttributes(array('activation_code' => $activationcode));
                //echo Yii::trace(CVarDumper::dumpAsString($model), 'actionActivate2');
                if ($model !== null) {
                    //echo Yii::trace(CVarDumper::dumpAsString($model), 'actionActivate3');
                    if ($model->activate == '0') {
                        $model->activate = '1';
                        /*ez azért muszáj, mert a $password_again is required*/
                        //$model->password_again = $model->password;
                        if ($model->save()) {
                            //echo Yii::trace(CVarDumper::dumpAsString($model), 'actionActivateSave');
                            $eredmeny = Tools::SendMail('registration',$model->email);
                            Yii::app()->user->setFlash('activate', 'Thank you for register with us!');
                        } else
                            Yii::app()->user->setFlash('activate', 'This somthing wrong, pleas try again!');
                    } else
                        Yii::app()->user->setFlash('activate', 'You have been activated the password!');
                } else
                    Yii::app()->user->setFlash('activate', 'This wrong activation code!');
            }
        } else
            Yii::app()->user->setFlash('activate', 'This wrong!');

        $this->render('activate', array('model' => $model));
    }
     
     public function actionEula() {
        //$this->layout = 'generic';
        //$content = $this->renderPartial('pages/eula', true);
        $this->renderPartial('pages/modal_form',array('modal_title'=>'Általános Szerződési Feltételek','modal_content'=>'pages/eula'),false);
    }
     
    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    
    
    
}
