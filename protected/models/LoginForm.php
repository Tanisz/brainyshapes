<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {

    public $username;
    public $password;
    public $rememberMe;
    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            // password needs to be authenticated
            array('password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'rememberMe' => 'Remember me next time',
            'username' => 'Felhasználónév/E-mail cím',
            'password' => 'Jelszó'
        );
    }

    public function authenticate($attribute, $params) {
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
    }

    public function login() {

        if ($this->_identity === null) {
            //echo Yii::trace(CVarDumper::dumpAsString('ez itt bent'), 'loginform001');
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }

        if (
                ($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_INVALID) or ( $this->_identity->errorCode === UserIdentity::ERROR_PASSWORD_INVALID) or ( $this->_identity->errorCode === UserIdentity::ERROR_UNKNOWN_IDENTITY)
        ) {
            $this->addError('email', '');
            $this->addError('password', Yii::t('models/LoginForm', 'Incorrect credentials!'));
        } else if ($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_NOT_ACTIVE) {
            $this->addError('email', Yii::t('models/LoginForm', 'User is currently not active, please activate using the activation URL in your email then retry again.'));
        } else if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else
            return false;
    }

}
