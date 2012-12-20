<?php 
$this->breadcrumbs = array(
    'Posts' => array('index'),
    $model->title,
);
$this->contentTitle = 'View Post';
$this->menu = array(
	array('label'=>'List Post', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>array('delete','id'=>$model->id), 'linkOptions'=>array('confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3><?php echo CHtml::encode($model->title); ?></h3>	
<span>updated at: <?php echo CHtml::encode($model->update_time);?></span>
<p><?php echo CHtml::encode($model->content); ?></p>
