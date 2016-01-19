<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'user_code',
		'name',
		'city',
		'phone',
		'email',
		'second_phone',
		'comment',
//		'create_time',
//		'update_time',
//		'valid',
	),
)); ?>
