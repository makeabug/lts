<div class="span12">
<form action="" method="post">
	<table class="table table-striped">
		<tr>
			<th width="10"><?php echo CHtml::checkBox('', false, array('class'=>'check_all'));?></th>
			<th>ID</th>
			<th>Page title</th>
			<th>Date created</th>
			<th>Author</th>
			<td>&nbsp;</td>
		</tr>
	
		<?php
			$this->widget('zii.widgets.CListView', array(
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
	
			