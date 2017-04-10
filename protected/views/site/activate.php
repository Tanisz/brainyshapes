<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>    
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('activate'); ?>
</div>    

<h4> 
        <div class="row">
            <div style="float: left">
                <?php echo CHtml::label("Azonnal továbbítunk a bejelentkező oldalra ..... ",'');?>
            </div>
            <div>
                <?php echo CHtml::label('','',array('id'=>'lblCountDown'));?>
                <?php echo CHtml::label('','',array('id'=>'LabelTimer','visible'=>'false')); ?>
            </div>
        </div>
    </h4>
    </br>
    <p>
        Ha az idő leteltével mégsem sikerülne, akkor kérem kattintson <?php echo CHtml::link('ide',YII::app()->createUrl('site/belepes',array('username'=>$model->email)))?> . 
    </p>   


<?php
$baseUrl=Yii::app()->baseUrl;
$cs=Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/timerSuccess.js');

echo CHtml::script('function loginredirect(){ window.location.replace("'.YII::app()->createUrl('site/belepes',array('username'=>$model->email)).'");} ');
?>
