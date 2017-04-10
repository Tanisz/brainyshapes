<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/bootstrap/css/bootstrap.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
?>

<section>
    <h3>Regisztráció</h3>
    
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'registration-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    <div class="row uniform 50%">
        
        <div class="4u 12u$(xsmall)">
            <p class="small">A * (csillagozott) mezők kitöltése kötelező!  </p>

            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
            <hr>
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email'); ?>
            <?php echo $form->error($model, 'email'); ?>

            <?php echo $form->labelEx($model, 'email_again'); ?>
            <?php echo $form->textField($model, 'email_again'); ?>
            <?php echo $form->error($model, 'email_again'); ?>
            <hr>
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>

            <?php echo $form->labelEx($model, 'password_again'); ?>
            <?php echo $form->passwordField($model, 'password_again'); ?>
            <?php echo $form->error($model, 'password_again'); ?>


        </div>
        

        <div class="2u 12u$(xsmall)">

        </div>
        
        <div class="6u 12u$(xsmall)">
            <p class="small">Ezeknek az adatoknak a megadása opcionális, ha nem tölti ki, akkor nem fogjuk tudni postázni a nyereményét!</p>
        </div>
        
        <div class="2u 12u$(xsmall)">

        </div>

        <div class="3u 12u$(xsmall)">
            <?php echo $form->labelEx($model, 'last_name'); ?>
            <?php echo $form->textField($model, 'last_name'); ?>
            <?php echo $form->error($model, 'last_name'); ?>
        </div>  
        
        <div class="3u 12u$(xsmall)">
            <?php echo $form->labelEx($model, 'first_name'); ?>
            <?php echo $form->textField($model, 'first_name'); ?>
            <?php echo $form->error($model, 'first_name'); ?>
        </div>  
        
        <div class="2u 12u$(xsmall)">

        </div> 
        <div class="2u 12u$(xsmall)">    
            <?php echo $form->labelEx($model, 'zip_code'); ?>
            <?php echo $form->textField($model, 'zip_code'); ?>
            <?php echo $form->error($model, 'zip_code'); ?>
        </div> 

        <div class="4u 12u$(xsmall)">  
            <?php echo $form->labelEx($model, 'city'); ?>
            <?php echo $form->textField($model, 'city'); ?>
            <?php echo $form->error($model, 'city'); ?>
        </div>

        <div class="2u 12u$(xsmall)">

        </div>

        <div class="6u 12u$(xsmall)">    
            <?php echo $form->labelEx($model, 'street'); ?>
            <?php echo $form->textField($model, 'street'); ?>
            <?php echo $form->error($model, 'street'); ?>  
        </div>  
        <div class="2u 12u$(xsmall)">

        </div>
        <div class="2u 12u$(xsmall)">    
            <?php echo $form->labelEx($model, 'hnumber'); ?>
            <?php echo $form->textField($model, 'hnumber'); ?>
            <?php echo $form->error($model, 'hnumber'); ?> 
        </div>       
        <div class="2u 12u$(xsmall)">        
            <?php echo $form->labelEx($model, 'floor'); ?>
            <?php echo $form->textField($model, 'floor'); ?>
            <?php echo $form->error($model, 'floor'); ?>
        </div>  
        <div class="2u 12u$(xsmall)">    
            <?php echo $form->labelEx($model, 'dnumber'); ?>
            <?php echo $form->textField($model, 'dnumber'); ?>
            <?php echo $form->error($model, 'dnumber'); ?>

        </div>  

        <div class="2u 12u$(xsmall)">

        </div>

<!--       <div class="6u 12u$(xsmall)">    
            <?php //echo $form->labelEx($model, 'text'); ?>
            <?php //echo $form->textArea($model, 'text', array('rows' => 5)); ?>
            <?php //echo $form->error($model, 'text'); ?>

        </div>-->

      
       <div class="12u 12u$(xsmall)">
            <hr>
        </div>
        
               
        
        
        <div class="12u 12u$(xsmall)">
            <?php echo $form->checkBox($model, 'eula'); ?>
            <?php
            echo $form->label($model, 'eula');
            
            $htmlOption = array(
                'ajax' => array(
                    'url' => $this->createUrl('site/eula'),
                    'type' => 'POST',
                    'update' => '#req_res',
                ),
                'data-toggle' => 'modal',
                'data-target' => '#myModal',
                'type' => 'link',
                'class' => 'location_link'
            );
            echo Chtml::link('ÁSZF megtekintése', "#", $htmlOption);
            //echo CHtml::link('ÁSZF megtekintése', '#', array('data-toggle' => 'modal', 'data-target'=>'#exampleModal'));
            ?>
            <?php echo $form->error($model, 'eula'); ?>
        </div>
        
        <div class="12u 12u$(xsmall)">
            <hr>
        </div>
        
        <div class="3u 12u$(xsmall)">   
            <br>
            <?php $this->widget('CCaptcha'/* ,array('buttonOptions'=>array('class'=>'link-button small')) */); ?>

        </div> 
        
        <div class="3u 12u$(xsmall)">   
            <?php echo $form->labelEx($model, 'verifyCode'); ?> 
            <?php echo $form->textField($model, 'verifyCode'); ?>
        </div> 
        <div class="12u 12u$(xsmall)">
            <?php echo $form->error($model, 'verifyCode'); ?>
        </div> 
    </div>
    <hr>
    <?php echo CHtml::submitButton('Registration',array('class'=>'special')); ?>
    <?php $this->endWidget(); ?>  
</section>

<div id ="req_res"></div>
