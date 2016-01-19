<?php

$this->breadcrumbs=array(
	'客户档案'=>array('index'),
	'用户管理',
);

$this->menu=array(
        array('label'=>'用户列表', 'url'=>array('index')),
        array('label'=>'创建用户', 'url'=>array('create')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_code',
		'name',
		'city',
		'phone',
		'email',
		/*
		'second_phone',
		'comment',
		'create_time',
		'update_time',
		'valid',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
