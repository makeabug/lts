<?php 
$this->menu = array(
    array('label'=>'List Post', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
    array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<?php 
echo $this->renderPartial('_form', array('model'=>$model)); 
?>    