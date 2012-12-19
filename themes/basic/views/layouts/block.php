<?php $this->beginContent('//layouts/main'); ?>
<div class="block">	
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2><?php echo $this->pageTitle;?></h2>
		
		<?php
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
		));
		?>
	</div>		
	<!-- .block_head ends -->
	
   	<?php echo $content;?>   
    
	<div class="bendl"></div>
	<div class="bendr"></div>	
</div>
<?php $this->endContent(); ?>