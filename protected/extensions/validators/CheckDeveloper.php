<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CheckDeveloper
 *
 * @author csiki.istvan
 */
class CheckDeveloper extends CValidator {
    
//    public $condition;
//    public $validator;
//
//    protected $_validator;
//    protected $_params = array();

//    public function __set($key, $val)
//    {
//        $this->_params[$key] = $val;
//    }

    protected function validateAttribute($object, $attribute)
    {
//        if ($this->condition && $this->evaluateExpression($this->condition, array(
//            'model' => $object, 
//            'attribute' => $attribute))) 
//        {
            $this->initValidator($object)->validateAttribute($object, $attribute);
        //}
    }

 

    public function clientValidateAttribute($object, $attribute)
    {
//        $conditionFn = 'condition'.ucfirst($attribute).'Validate';
//        return 'if (typeof ' . $conditionFn . ' != "function" || ' . $conditionFn. '(value, messages, attribute)) {'.
//            $this->initValidator($object)->clientValidateAttribute($object, $attribute).
//        '}';
        
        $condition="value == JQuery('#User_developer').is(':checked')";
        $hiba = 'Developer hiba';
        return "
        if(".$condition.") {
            messages.push(".CJSON::encode($hiba).");
        }
        ";
    }

}