<?php
/* @var $this GpLobbyCfgController */
/* @var $model GpLobbyCfg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gp-lobby-cfg-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'game_lobby'); ?>
		<?php echo $form->textField($model,'game_lobby'); ?>
		<?php echo $form->error($model,'game_lobby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lobby_name'); ?>
		<?php echo $form->textField($model,'lobby_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lobby_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->