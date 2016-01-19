<?php

$this->breadcrumbs=array(
	'客户档案',
);

$this->menu=array(
	array('label'=>'创建用户', 'url'=>array('create')),
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
