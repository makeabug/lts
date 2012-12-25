<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Create',
);

$this->contentTitle = 'Create Account';

$this->menu=array(
	array('label'=>'List Account', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
	array('label'=>'Manage Account', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>