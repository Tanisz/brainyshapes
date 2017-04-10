<?php
/**
 * 
 * EPasswordStrength class
 * 
 * Validate if password is strong enought
 *
 * The validator check if password has at least min characters,
 * and if password contain at least one lower case letter, at least one upper case letter,
 * and at least one number
 * 
 *
 *
 *
 * @see      http://www.yiiframework.com
 * @version  1.0
 * @access   public
 * @author   ivica Nedeljkovic (ivica.nedeljkovic@gmail.com)
 */
class EPasswordStrength extends CValidator{
    
    //Minimum password length
    public $min = 7;
    public $strength;
    
    private $weak_pattern='/^(?=.*[a-zA-Z0-9]).{5,}$/';
    private $strong_pattern='/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/';
    private $def_pattern="/^.*(?=.{7,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/";
    /**
	 * (non-PHPdoc)
	 * @see CValidator::validateAttribute()
	 */
    protected function validateAttribute($object,$attribute){
       // $this->addError($object,$attribute,"hülye");
    if(!$this->checkPasswordStrength($object->$attribute)){
        //    $message=$this->message!==null?$this->message:Yii::t("EPasswordStrength","{attribute} is weak. {attribute} must contain at least {$this->min} characters, at least one lower case letter, at least one upper case letter, and at least one number.");
            $message=$this->message!==null?$this->message:Yii::t("EPasswordStrength","{attribute} is weak. {attribute} must contain at least {min} characters, at least one lower case letter, at least one upper case letter, and at least one number.", array("{min}"=>$this->min));
			$this->addError($object,$attribute,$message);
       }
    }
    
    /**
     * Check if password is strong enought
     * @param string $password
     * @return boolean 
     */
    protected function checkPasswordStrength($password){
        
        if($this->strength == 'weak')
            $pattern=$this->weak_pattern;
        elseif($this->strength == 'strong')
            $pattern=$this->strong_pattern;
        elseif($this->strength == 'def')
            $pattern=$this->def_pattern;
        
        if (preg_match($pattern, $password)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function clientValidateAttribute($object,$attribute)
    {
        $pattern='';
        // check the strength parameter used in the validation rule of our model
        if($this->strength == 'weak')
            $pattern=$this->weak_pattern;
        elseif($this->strength == 'strong')
            $pattern=$this->strong_pattern;
        elseif($this->strength == 'def')
            $pattern=$this->def_pattern;

        
        $condition="!value.match({$pattern})";
        $message = Yii::t("EPasswordStrength","{attribute} is weak. {attribute} must contain at least {min} characters, at least one lower case letter, at least one upper case letter, and at least one number.", array("{min}"=>$this->min));
        $params['{attribute}']=$object->getAttributeLabel($attribute);
        $hiba = strtr($message,$params);
        return "
        if(".$condition.") {
            messages.push(".CJSON::encode($hiba).");
        }
        ";
    }
        
}

