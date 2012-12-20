<?php 
$this->breadcrumbs = array(
    'Posts' => array('index'),
    'Create'
);
$this->contentTitle = 'Create Post';
$this->menu = array(
	array('label'=>'List Post', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
);
?>

<?php 
	echo $this->renderPartial('_form', array('model'=>$model)); 
?>    
    
	