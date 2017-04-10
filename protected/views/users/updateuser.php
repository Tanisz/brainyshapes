<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<style>
    .flash-success {
        color : red;
    }
</style>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usersform-form',
	'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
)); ?>
        <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('updateuser'); ?>
        </div> 
        <div class="row uniform 50%">
            
            
            <div class="4u 12u$(xsmall)">
            <?php
                echo $form->labelEx($model, 'username'); 
    
                echo CHtml::tag('p',array('id'=>'main_data'),$model->username);
                echo $form->error($model, 'username');
            ?>
            </div> 
            <div class="4u 12u$(xsmall)">
            <?php
                echo $form->labelEx($model, 'reg_date'); 
              
               echo CHtml::tag('p',array('id'=>'main_data'),$model->reg_date);
                echo $form->error($model, 'reg_date');
            ?>
            </div>    
            <div class="4u 12u$(xsmall)">
            <?php
                echo $form->labelEx($model, 'activate'); 
                if ($model->activate == '1') {
                    echo CHtml::tag('p',array('id'=>'main_data'),'Aktiválva');

                }
                else {
                  echo CHtml::tag('p',array('id'=>'main_data'),'Nincs aktiválva');  
    
                }
                echo $form->error($model, 'activate');
            ?>
            </div>
        </div>
        <br>
	<p class="small">A * (csillagozott) mezők kitöltése kötelező!  </p>
        
        
	<?php echo $form->errorSummary($model); ?>

	<div class="row uniform 50%">
             
            
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
        <div class="1u 12u$(xsmall)">

        </div>    
        <div class="5u 12u$(xsmall)">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
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
        
        <div class="1u 12u$(xsmall)">

        </div>    
            
        <div class="5u 12u$(xsmall)">
            <?php echo $form->labelEx($model,'password'); ?>
            <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>500)); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>     
            
        <div class="6u 12u$(xsmall)">    
            <?php echo $form->labelEx($model, 'street'); ?>
            <?php echo $form->textField($model, 'street'); ?>
            <?php echo $form->error($model, 'street'); ?>  
        </div>
        
        <div class="1u 12u$(xsmall)">

        </div>    
            
        <div class="5u 12u$(xsmall)">
            <?php echo $form->labelEx($model,'password_again'); ?>
            <?php echo $form->passwordField($model,'password_again',array('size'=>60,'maxlength'=>500)); ?>
            <?php echo $form->error($model,'password_again'); ?>
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
        

      
          
        </div>     
            
        <br>    
         <?php echo CHtml::submitButton('Mentés',array('class'=>'special')); ?>  
       <?php //echo CHtml::submitButton($model->isNewRecord ? 'Létrehozás' : 'Mentés',array('class'=>'special')); ?>
     
                  
            
<?php $this->endWidget(); ?>

</div><!-- form -->