<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_number'); ?>
		<?php echo $form->textField($model,'order_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'order_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_time'); ?>
		<?php echo $form->textField($model,'send_time'); ?>
		<?php echo $form->error($model,'send_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_code'); ?>
		<?php echo $form->textField($model,'user_code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_name'); ?>
		<?php echo $form->textField($model,'package_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'package_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_num'); ?>
		<?php echo $form->textField($model,'package_num'); ?>
		<?php echo $form->error($model,'package_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_money'); ?>
		<?php echo $form->textField($model,'total_money'); ?>
		<?php echo $form->error($model,'total_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_size'); ?>
		<?php echo $form->textField($model,'package_size'); ?>
		<?php echo $form->error($model,'package_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_type'); ?>
		<?php echo $form->textField($model,'package_type',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'package_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'density'); ?>
		<?php echo $form->textField($model,'density',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'density'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evalatue_money'); ?>
		<?php echo $form->textField($model,'evalatue_money'); ?>
		<?php echo $form->error($model,'evalatue_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance'); ?>
		<?php echo $form->textField($model,'insurance'); ?>
		<?php echo $form->error($model,'insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'packages'); ?>
		<?php echo $form->textField($model,'packages'); ?>
		<?php echo $form->error($model,'packages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_before'); ?>
		<?php echo $form->textField($model,'pay_before'); ?>
		<?php echo $form->error($model,'pay_before'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receive_by'); ?>
		<?php echo $form->textField($model,'receive_by'); ?>
		<?php echo $form->error($model,'receive_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exchange_rate'); ?>
		<?php echo $form->textField($model,'exchange_rate',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'exchange_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sender_city'); ?>
		<?php echo $form->textField($model,'sender_city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sender_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receive_city'); ?>
		<?php echo $form->textField($model,'receive_city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'receive_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_type'); ?>
		<?php echo $form->textField($model,'delivery_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'delivery_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partner'); ?>
		<?php echo $form->textField($model,'partner',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'partner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reward'); ?>
		<?php echo $form->textField($model,'reward',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'reward'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'normal_price'); ?>
		<?php echo $form->textField($model,'normal_price'); ?>
		<?php echo $form->error($model,'normal_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_money'); ?>
		<?php echo $form->textField($model,'pay_money'); ?>
		<?php echo $form->error($model,'pay_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid'); ?>
		<?php echo $form->textField($model,'valid'); ?>
		<?php echo $form->error($model,'valid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->