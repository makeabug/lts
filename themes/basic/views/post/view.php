<?php 
$this->menu = array(
	array('label'=>'List Post', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<div class="block_content tab_content" id="tab1" style="display: block;">	
	<h3><?php echo CHtml::encode($model->title); ?></h3>	
	<span>updated at: <?php echo CHtml::encode($model->update_time);?></span>
	<p><?php echo CHtml::encode($model->content); ?></p>
</div>