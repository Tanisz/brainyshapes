<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'users_id'); ?>
		<?php echo $form->textField($model,'users_id'); ?>
		<?php echo $form->error($model,'users_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activation_code'); ?>
		<?php echo $form->textField($model,'activation_code',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'activation_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activate'); ?>
		<?php echo $form->textField($model,'activate'); ?>
		<?php echo $form->error($model,'activate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_date'); ?>
		<?php echo $form->textField($model,'reg_date'); ?>
		<?php echo $form->error($model,'reg_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storno'); ?>
		<?php echo $form->textField($model,'storno',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'storno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storno_date'); ?>
		<?php echo $form->textField($model,'storno_date'); ?>
		<?php echo $form->error($model,'storno_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->