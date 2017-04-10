<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SmptMailSend
 *
 * @author csiki.istvan
 */
class SmptMailSend
{

    public static function mailsend($to,$from,$subject,$message,$fromName,$IsHtml = false){
        //echo Yii::trace(CVarDumper::dumpAsString($to),'mailsend');
        $mail=Yii::app()->Smtpmail;
        $mail->SetFrom($from, $fromName);
        $mail->Subject  = $subject;
        
        
        $mail->CharSet = 'UTF-8';
        $mail->AddAddress($to, "");
        
        //$message = $message." /// ".CVarDumper::dumpAsString($mail);
        
        if ($IsHtml === true) {
          $mail->MsgHTML($message);  
        }
        else
            $mail->Body = $message;
        
        echo Yii::trace(CVarDumper::dumpAsString($mail),'mailsend');
        echo Yii::trace(CVarDumper::dumpAsString($message),'mailsendbody');
 
        if(!$mail->Send()) {
            echo Yii::trace(CVarDumper::dumpAsString($mail->ErrorInfo),'mailsend');
            return "A(z) ".$to." email címre nem sikerült az emailküldés! Hiba: " . $mail->ErrorInfo;
        }else {
            echo Yii::trace(CVarDumper::dumpAsString('OK '.$mail->ErrorInfo),'mailsend');
            return "A(z) ".$to." email címre elküldtük a regisztrációs adatait!";
        }
        
        $mail->ClearAddresses(); //clear addresses for next email sending
    }

}