<?php
/* @var $this WikiController */
/* @var $model Wiki */

$this->breadcrumbs=array(
	'Wikis'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Wiki', 'url'=>array('index')),
	array('label'=>'Create Wiki', 'url'=>array('create')),
	array('label'=>'Update Wiki', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Wiki', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wiki', 'url'=>array('admin')),
);
?>

<h1>View Wiki #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
