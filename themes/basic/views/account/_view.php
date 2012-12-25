<?php
/* @var $this PostController */
/* @var $data Post */
?>

<tr>
	<td><?php echo CHtml::checkBox('', false);?></td>
	<td><?php echo CHtml::link($data->id, array('view', 'id'=>$data->id)); ?> </td>
	<td><?php echo CHtml::link($data->username, array('view', 'id'=>$data->id)); ?> </td>
	<td><?php echo $data->getTypeText(); ?> </td>
	<td class="delete"><?php echo CHtml::link('Delete', array('delete', 'id'=>$data->id), array('confirm'=>'Are you sure you want to delete this item?'))?></td>
</tr>