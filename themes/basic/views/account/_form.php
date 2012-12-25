<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<p class="row">
		<?php echo $form->labelEx($model,'Username:'); ?> <br>
		<?php echo $form->textField($model,'username', array('class'=>'text small')); ?>
		<?php echo $form->error($model,'username'); ?>
	</p>

	<p class="row">
		<?php echo $form->labelEx($model,'Password:'); ?> <br>
		<?php echo $form->passwordField($model,'password', array('class'=>'text small')); ?>
		<?php echo $form->error($model,'password'); ?>
	</p>

	<p class="row">
		<?php echo $form->labelEx($model,'Type:'); ?> <br>
		<?php echo $form->dropDownList($model,'type', $model->getTypeOptions(), array('class'=>'styled')); ?>
		<?php echo $form->error($model,'type'); ?>
	</p>


	<p class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'submit mid')); ?>
	</p>

<?php $this->endWidget(); ?>

</div><!-- form -->