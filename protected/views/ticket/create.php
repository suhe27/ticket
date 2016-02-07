<?php
$this->breadcrumbs=array(
	'订单'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'订单列表', 'url'=>array('index')),
	array('label'=>'订单管理', 'url'=>array('admin')),
);
?>

<h1>Create Ticket</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
