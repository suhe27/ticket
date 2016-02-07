<?php
$this->breadcrumbs=array(
	'订单'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'订单列表', 'url'=>array('index')),
	array('label'=>'创建订单', 'url'=>array('create')),
	array('label'=>'查看订单', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理订单', 'url'=>array('admin')),
);
?>

<h1>编辑订单 <?php echo $model->order_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
