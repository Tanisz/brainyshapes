<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

     const ERROR_USERNAME_NOT_ACTIVE = 3;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    /* public function authenticate()
      {
      $users=array(
      // username => password
      'demo'=>'demo',
      'admin'=>'admin',
      );
      if(!isset($users[$this->username]))
      $this->errorCode=self::ERROR_USERNAME_INVALID;
      elseif($users[$this->username]!==$this->password)
      $this->errorCode=self::ERROR_PASSWORD_INVALID;
      else
      $this->errorCode=self::ERROR_NONE;
      return !$this->errorCode;
      } */
    public function authenticate() {
    
        $record = Users::model()->findByAttributes(array('email' => $this->username), 'storno = "N"');
        if ($record === null) {
            $record = Users::model()->findByAttributes(array('username' => $this->username), 'storno = "N"');
        }

        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($record->activate !== '1') {
            $this->errorCode = self::ERROR_USERNAME_NOT_ACTIVE;
        } else if (IdentityTools::PasswordVerify($this->password, $record->password) === false) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {

           // $this->setState('isAdmin', ($record->admin == 1));
            $this->setState('user_id', $record['users_id']);
            $this->setState('username', $record['username']);
            $this->setState('title', $record['email']);
            $this->errorCode = self::ERROR_NONE;
        }
       // echo Yii::trace(CVarDumper::dumpAsString('ez itt '.$this->errorCode),'authenticate1');
        return $this->errorCode;
    }

}
