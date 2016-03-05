<?php
$this->breadcrumbs=array(
	'订单'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'订单列表', 'url'=>array('index')),
	array('label'=>'新建订单', 'url'=>array('create')),
	array('label'=>'编辑订单', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除订单', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'订单管理', 'url'=>array('admin')),
);
?>

<h1>订单详情 <?php echo $model->order_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order_id',
		'order_number',
		'send_time',
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
