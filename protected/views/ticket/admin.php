<?php
$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	'运单管理',
);

$this->menu=array(
	array('label'=>'运单列表', 'url'=>array('index')),
	array('label'=>'创建运单', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ticket-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<!--
<h1>Manage Tickets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
!-->
<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ticket-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'order_id',
		'order_number',
		'send_time',
		'user_code',
		'package_name',
		'package_num',
		'weight',
		'size',
		'total_money',
		'package_size',
		'package_type',
		'density',
		'price',
		'evalatue_money',
		'insurance',
		'packages',
		'pay_before',
		'receive_by',
		'exchange_rate',
		'sender_city',
		'receive_city',
		'delivery_type',
		//'comment',
		//'partner',
		//'user_id',
		//'reward',
		//'normal_price',
		//'pay_money',
		/*
		'create_time',
		'update_time',
		'valid',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
