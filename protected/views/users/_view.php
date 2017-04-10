<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->users_id), array('view', 'id'=>$data->users_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activation_code')); ?>:</b>
	<?php echo CHtml::encode($data->activation_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activate')); ?>:</b>
	<?php echo CHtml::encode($data->activate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_date')); ?>:</b>
	<?php echo CHtml::encode($data->reg_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('storno')); ?>:</b>
	<?php echo CHtml::encode($data->storno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storno_date')); ?>:</b>
	<?php echo CHtml::encode($data->storno_date); ?>
	<br />

	*/ ?>

</div>