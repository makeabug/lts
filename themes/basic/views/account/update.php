<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Account', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
	array('label'=>'Create Account', 'url'=>array('create')),
	array('label'=>'View Account', 'url'=>array('view', 'id'=>$model->id))
);
?>

<h1>Update Account <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>