<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/users_generic';

	/**
	 * @return array action filters
	 */
        
        protected function beforeAction($action) {
            if (!parent::beforeAction($action))
                return false;
                $this->setPageTitle(CHtml::encode('Brainy Shapes'));

                return true;
        }
        
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','updateuser'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->users_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->users_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdateUser()
	{   
                $id = Yii::app()->user->user_id;
                $users = $this->loadModel($id);
		$users_address = UsersAddress::model()->findByAttributes(array('users_id' => $id) );
                //echo Yii::trace(CVarDumper::dumpAsString($users), 'actionUpdateUser2');  
                
                //echo Yii::trace(CVarDumper::dumpAsString($users_address), 'actionUpdateUser3');  
                $model = new UserForm;
                
                $model->email = $users->email;
                $model->username = $users->username;
                $model->reg_date = $users->reg_date;
                $model->activate = $users->activate;
                
                
                $model->first_name  = $users_address->first_name;
                $model->last_name   = $users_address->last_name;
                
                $model->zip_code    = $users_address->zip_code; 
                $model->city        = $users_address->city; 
                $model->street      = $users_address->street; 
                $model->hnumber     = $users_address->hnumber; 
                $model->floor       = $users_address->floor; 
                $model->dnumber     = $users_address->dnumber; 
                

		if(isset($_POST['UserForm']))
		{
			$model->attributes=$_POST['UserForm'];
                        if (!empty($model->password) && !empty($model->password_again) ) {
                            echo Yii::trace(CVarDumper::dumpAsString($model->password), 'actionUpdateUser1');
                            echo Yii::trace(CVarDumper::dumpAsString($model->password_again), 'actionUpdateUser2');
                            if (!IdentityTools::PasswordVerify($users->password,$model->password)) {
                                echo Yii::trace(CVarDumper::dumpAsString($model->password), 'actionUpdateUser3');
                                //$model->password = IdentityTools::CryptPassword($model->password); 
                                echo Yii::trace(CVarDumper::dumpAsString($model->password), 'actionUpdateUser4');
                                //$model->password_again = $model->password;
                            }
                        
                        }
                        else {
                           //$model->password =  $users->password;
                           //$model->password_again = $users->password; 
                        }
                        
                            
                        
			if($model->userupdate($id)) {
                                echo Yii::trace(CVarDumper::dumpAsString('siker'), 'userupdate'); 
				Yii::app()->user->setFlash('updateuser', 'Sikeres mentés!');
                                $model->password = '';
                                $model->password_again = '';
                        }        
		}

		$this->render('updateuser',array(
			'model'=>$model
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
