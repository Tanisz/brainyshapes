<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UserForm extends CFormModel
{
	public $username;
        public $email;
        public $email_again;
        public $reg_date;
        
	public $password;
        public $password_again;
        
        //public $activation_code;
        public $activate;
        
        //public $eula;
        
        public $first_name;
        public $last_name;
        public $zip_code;
        public $city;
        public $street;
        public $hnumber;
        public $floor;
        public $dnumber;
        
	public $rememberMe;
        //public $verifyCode;
        //public $text;

	private $_identity;
        
        const WEAK = 'weak';
        const STRONG = 'strong';
        const DEF = 'def'; 

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('email,email_againeula', 'required'),
                        array('username,zip_code', 'length', 'max' => 45), 
                        array('email,email_again', 'length', 'max' => 200), 
                        array('password,password_again', 'length', 'max' => 60), 
                        array('first_name,last_name,city,street', 'length', 'max' => 100),
                        array('hnumber,floor,dnumber', 'length', 'max' => 20),
                        array('activate', 'length', 'max' => 1),
                        //array('text', 'length', 'max' => 2000),
                        //array('activationcode', 'length', 'max' => 2000), 
                        array('email,email_again', 'email', 'message' => 'Nem megfelelő email cím!'), 
                        array('email', 'unique', 'message' => 'Az email cím már foglalt!'),
                        array('username', 'unique', 'message' => 'A felhasználónév már foglalt!'),
                        //array('password', 'ext.validators.EPasswordStrength', 'min' => 7, 'strength' => self::DEF), 
                        //array('password_again', 'ext.validators.EPasswordStrength', 'min' => 7, 'strength' => self::DEF), 
                        array('password_again', 'compare', 'compareAttribute' => 'password', 'message' => 'A jelszavak nem egyeznek meg!'),
                        array('email_again', 'compare', 'compareAttribute' => 'email', 'message' => 'Az email címek nem egyeznek meg!'),
                        //array('eula', 'required','message'=>'Az Általános Szerződési Feltételek elfogadása kötelező!'),
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
                        'reg_date' => 'Regisztráció dátuma',
                        'activate' => 'Státusz',
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
	/*public function login()
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
	}*/
        
        public function userupdate($user_id=null)
	{
           try{
            $users = Users::model()->findByPk($user_id);
            //$users->username = $this->username;
            $users->email    = $this->email;
            //echo Yii::trace(CVarDumper::dumpAsString($this->password), 'userupdate1');
            if (!empty($this->password)) {
                $users->password = $this->password;
            }    
            //echo Yii::trace(CVarDumper::dumpAsString($users->password), 'userupdate2');
            if ($users->save()) {
            
                $user_address = UsersAddress::model()->findByAttributes(array('users_id' => $user_id) );

                $user_address->first_name  = $this->first_name;
                $user_address->last_name   = $this->last_name;
                $user_address->zip_code    = $this->zip_code; 
                $user_address->city        = $this->city; 
                $user_address->street      = $this->street; 
                $user_address->hnumber     = $this->hnumber; 
                $user_address->floor       = $this->floor; 
                $user_address->dnumber     = $this->dnumber; 
                $user_address->save();
                return true;
            }
            else {
              echo Yii::trace(CVarDumper::dumpAsString($users), 'userupdate');   
              return false;  
            }    
          
            
          }
            catch (Exception $e) { echo Yii::trace(CVarDumper::dumpAsString($e->getMessage()), 'userupdate_error'); return false; }  
	}
        
        public function generateActivationCode($email) {
            return sha1(mt_rand(10000, 99999) . time() . $email);
        } 
}
