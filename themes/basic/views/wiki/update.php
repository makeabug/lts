<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    $model->title => $this->createUrl('wiki/show', array('title'=>CHtml::encode($model->title))),
    'Edit Page',
);
$this->contentTitle = 'Edit Page';
if ($model->title == Wiki::HOMEPAGE_TITLE )
{
    $this->menu = array(
        array('label'=>'Create Page', 'url'=>array('create'), 'itemOptions'=>array('class'=>'nobg')),
        array('label'=>'All Pages', 'url'=>array('list')),
    );
} else {
    $this->menu = array(
        array('label'=>'Create Page', 'url'=>array('create'), 'itemOptions'=>array('class'=>'nobg')),
        array('label'=>'Home', 'url'=>Yii::app()->createUrl('wiki/home')),
        array('label'=>'All Pages', 'url'=>array('list')),
    );
}
?>

<?php 
echo $this->renderPartial('_form', array('model'=>$model)); 
?>    