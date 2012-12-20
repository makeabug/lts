<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    $model->title => $this->createUrl('wiki/show', array('title'=>CHtml::encode($model->title))),
    'Edit Page',
);
$this->contentTitle = 'Edit Page';
$this->menu = array(
    array('label'=>'List Page', 'url'=>array('index'), 'itemOptions'=>array('class'=>'nobg')),
    array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<?php 
echo $this->renderPartial('_form', array('model'=>$model)); 
?>    