<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    'Create'
);
$this->contentTitle = 'Create Page';
$this->menu = array(
    array('label'=>'Home', 'url'=>Yii::app()->createUrl('wiki/home'), 'itemOptions'=>array('class'=>'nobg')),
	array('label'=>'All Pages', 'url'=>array('list')),
);
?>

<?php 
	echo $this->renderPartial('_form', array('model'=>$model)); 
?>    
    
	