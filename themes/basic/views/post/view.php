<div class="block">	
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Post View</h2>
		<?php
		$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
			    array('label'=>'List Post', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
			    array('label'=>'Create Post', 'url'=>array('create')),
            	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
            	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
			),
		));
		?>
	</div>		
	<!-- .block_head ends -->

	<div class="block_content tab_content" id="tab1" style="display: block;">	
		<h3><?php echo CHtml::encode($model->title); ?></h3>	
		<span>updated at: <?php echo CHtml::encode($model->update_time);?></span>
		<p><?php echo CHtml::encode($model->content); ?></p>
	</div>		
	<!-- .block_content ends -->

	<div class="bendl"></div>
	<div class="bendr"></div>
</div>