<?php
$this->breadcrumbs=array(
	'客户档案'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'创建用户', 'url'=>array('create')),
	array('label'=>'编辑用户', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除用户', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'用户管理', 'url'=>array('admin')),
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
