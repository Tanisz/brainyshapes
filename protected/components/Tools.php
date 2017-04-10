<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tools
 *
 * @author István
 */
class Tools {
   
    public function SendMail($temp_name,$email_adr) {
        $user = Users::model()->findByAttributes(array('email'=>$email_adr));
        echo Yii::trace(CVarDumper::dumpAsString($user),'SendMail');
        //$mail_temp = Tools::FindEMailTempalte($temp_name);
        $full_name = $user->username; 
//        if (Yii::app()->language === 'hu') {
//            //$full_name = $user->first_name." ".$user->last_name;  
//            $full_name = $user->username;  
//        }
//        else {
//            $full_name = $user->last_name." ".$user->first_name;
//        }    
        $activation_url = Yii::app()->createAbsoluteUrl('site/activate', array('key'=>$user->activation_code));
        $user_name = $user->username;
        
        $subject='=?UTF-8?B?'.base64_encode("").'?=';
        
       
        if ($temp_name == 'activation') {
            $subject='=?UTF-8?B?'.base64_encode("Regisztráció aktiválás").'?=';
            $body = Yii::app()->controller->renderPartial('/emailTemplate/temps/activationMail',array('from_name'=>$full_name,'act_url'=>$activation_url),true);
        }
        
        if ($temp_name == 'registration'){
            $subject='=?UTF-8?B?'.base64_encode("Sikeres regisztráció").'?=';
            $body = Yii::app()->controller->renderPartial('/emailTemplate/temps/registrationMail',array('from_name'=>$full_name,'user_name'=>$user_name,'email'=>$email_adr),true);
        }
                
        return SmptMailSend::mailsend($user->email,Yii::app()->params['adminEmail'],$subject,$body,'admin',true);                               
    }
    
   
    
}
