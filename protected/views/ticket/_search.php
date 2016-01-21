<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_number'); ?>
		<?php echo $form->textField($model,'order_number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'send_time'); ?>
		<?php echo $form->textField($model,'send_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_code'); ?>
		<?php echo $form->textField($model,'user_code',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_name'); ?>
		<?php echo $form->textField($model,'package_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_num'); ?>
		<?php echo $form->textField($model,'package_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_money'); ?>
		<?php echo $form->textField($model,'total_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_size'); ?>
		<?php echo $form->textField($model,'package_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_type'); ?>
		<?php echo $form->textField($model,'package_type',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'density'); ?>
		<?php echo $form->textField($model,'density',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evalatue_money'); ?>
		<?php echo $form->textField($model,'evalatue_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance'); ?>
		<?php echo $form->textField($model,'insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'packages'); ?>
		<?php echo $form->textField($model,'packages'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_before'); ?>
		<?php echo $form->textField($model,'pay_before'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receive_by'); ?>
		<?php echo $form->textField($model,'receive_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exchange_rate'); ?>
		<?php echo $form->textField($model,'exchange_rate',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sender_city'); ?>
		<?php echo $form->textField($model,'sender_city',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receive_city'); ?>
		<?php echo $form->textField($model,'receive_city',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delivery_type'); ?>
		<?php echo $form->textField($model,'delivery_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partner'); ?>
		<?php echo $form->textField($model,'partner',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reward'); ?>
		<?php echo $form->textField($model,'reward',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'normal_price'); ?>
		<?php echo $form->textField($model,'normal_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_money'); ?>
		<?php echo $form->textField($model,'pay_money'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valid'); ?>
		<?php echo $form->textField($model,'valid'); ?>
	</div>
!-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
