<div class="block">	
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Create Page</h2>
		
		<?php
		$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
			    array('label'=>'List Post', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
			),
		));
		?>
	</div>		
	<!-- .block_head ends -->
	
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>    
    
	<div class="bendl"></div>
	<div class="bendr"></div>	
</div>