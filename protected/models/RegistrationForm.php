<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegistrationForm extends CFormModel
{
	public $username;
        public $email;
        public $email_again;
        
	public $password;
        public $password_again;
        
        public $eula;
        
        public $first_name;
        public $last_name;
        public $zip_code;
        public $city;
        public $street;
        public $hnumber;
        public $floor;
        public $dnumber;
        
	public $rememberMe;
        public $verifyCode;
        public $text;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password,password_again,email,email_againeula', 'required'),
                        array('eula', 'required','message'=>'Az Általános Szerződési Feltételek elfogadása kötelező!'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			//array('password', 'authenticate'),
                        array('verifyCode', 'CaptchaExtendedValidator', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username'=>'Felhasználónév',
                        'password'=>'Jelszó',
                        'password_again'=>'Jelszó ismét',
                        'email'=>'E-mail cím',
                        'email_again'=>'E-mail cím ismét',
                        'rememberMe'=>'Remember me next time',
                        'verifyCode' => 'Ellenőrző kód',
                        'text' => 'Megjegyzés',
                        'first_name' =>'Keresztnév',
                        'last_name' =>'Vezetéknév',
                        'zip_code' =>'Irányítószám',
                        'city' =>'Város,település',
                        'street' =>'Utca',
                        'hnumber' =>'Házszám',
                        'floor' =>'Emelet',
                        'dnumber' =>'Ajtó',
                        'eula' =>'Elfogadom az Általános Szerződési Feltételeket '
                    
                    
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
