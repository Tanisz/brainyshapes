<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PswSalt
 *
 * @author csiki.istvan
 */
class IdentityTools
{
    
    public function CryptPassword($psw) {
       $passwordhash = CPasswordHelper::hashPassword($psw);
       return $passwordhash;
    }
    
    public function PasswordVerify($psw,$hashpsw) {
      $result = CPasswordHelper::verifyPassword($psw,$hashpsw);
      return $result;
    }  
    
    public static function EmailRegExp($szoveg) {
      return preg_match ('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $szoveg);  
      
    } 
    
    public function CheckAdminEmail($email) {
       $subject = $email;
       $pattern = '[@brainyshapes.hu]';
        
       if (preg_match($pattern, $subject, $matches)) {
           return '1';
       } 
       else {
           return '0';
       }
    }

}