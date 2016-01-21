<?php
$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ticket', 'url'=>array('index')),
	array('label'=>'Create Ticket', 'url'=>array('create')),
	array('label'=>'Update Ticket', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ticket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>

<h1>View Ticket #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
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
		'comment',
		'partner',
		'user_id',
		'reward',
		'normal_price',
		'pay_money',
	//	'create_time',
	//	'update_time',
	//	'valid',
	),
)); ?>
