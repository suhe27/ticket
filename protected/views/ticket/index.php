<?php
$this->breadcrumbs=array(
	'订单',
);

$this->menu=array(
	array('label'=>'新建订单', 'url'=>array('create')),
	array('label'=>'订单管理', 'url'=>array('admin')),
);
?>

<h1>Tickets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
