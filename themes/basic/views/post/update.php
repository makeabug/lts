<div class="block">	
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Update Page</h2>
		
		<?php
		$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
			    array('label'=>'List Post', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
			    array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
			),
		));
		?>
	</div>		
	<!-- .block_head ends -->
	
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>    
    
	<div class="bendl"></div>
	<div class="bendr"></div>	
</div>