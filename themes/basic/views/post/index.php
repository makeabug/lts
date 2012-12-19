<div class="block">
    <div class="block_head">
    	<div class="bheadl"></div>
    	<div class="bheadr"></div>
        <h2>Posts</h2>
		<?php
		$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
			     array('label'=>'Create page', 'url'=>array('create'), 'itemOptions'=>array('class'=>'nobg')),
			),
		));
		?>
	</div>		
	<!-- .block_head ends -->
    <div class="block_content">
        <form action="" method="post">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td width="10"><?php echo CHtml::checkBox('', false, array('class'=>'check_all'));?></td>
					<th>ID</th>
					<th>Page title</th>
					<th>Date created</th>
					<th>Author</th>
					<td>&nbsp;</td>
				</tr>
				
				<?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_view',
                    )); 
                ?>

			</table>
				
			<div class="tableactions">
				<select>
					<option>Actions</option>
					<option>Delete</option>
					<option>Edit</option>
				</select>
				<input type="submit" class="submit tiny" value="Apply to selected" />
			</div>		
			<!-- .tableactions ends -->
						
			<div class="pagination right">
				<a href="#">&laquo;</a>
				<a href="#" class="active">1</a>
				<a href="#">2</a>

				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#">&raquo;</a>
			</div>		
			<!-- .pagination ends -->
					
		</form>
	</div>		
	<!-- .block_content ends -->			
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		
<!-- .block ends -->
			