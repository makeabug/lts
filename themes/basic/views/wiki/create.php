<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    'Create'
);
$this->contentTitle = 'Create Page';
$this->menu = array(
	array('label'=>'List Pages', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
);
?>

<?php 
	echo $this->renderPartial('_form', array('model'=>$model)); 
?>    
    
	