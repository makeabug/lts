<?php
/* @var $this PostController */
/* @var $data Post */
?>

<tr>
	<td><?php echo CHtml::checkBox('', false);?></td>
	<td><?php echo CHtml::link($data->id, array('view', 'id'=>$data->id)); ?> </td>
	<td><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?> </td>
	<td><?php echo CHtml::encode($data->create_time); ?></td>
	<td><?php echo CHtml::link($data->create_user_id, '#'); ?></td>
	<td class="delete"><a href="#">Delete</a></td>
</tr>