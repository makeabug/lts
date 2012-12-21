<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    $model->title,
);
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
$this->contentTitle = $model->title;
$this->pageTitle = 'Track - Wiki - ' . $model->title;
?>
<div class="wikiContent">
<?php echo $model->parseContent();?>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id' => 'deleteWiki',
    'action' => array('delete', 'id'=>$model->id)
)); ?>
<div class='wikiButtons'>
    <p class="row buttons">
        <input class="button" name="editpage" type="button" value="Edit Page" onclick=location.href="<?php echo Yii::app()->createUrl('wiki/update', array('id'=>$model->id)); ?>">
        <?php echo CHtml::hiddenField('id', $model->id);?>
        <?php echo CHtml::hiddenField('returnUrl', Yii::app()->createUrl('wiki/index'));?>
        <?php echo CHtml::submitButton('Delete', array('class'=>'submit', 'confirm'=>'Are you sure you want to delete this page?'));?>
    </p>
</div>
<?php $this->endWidget(); ?>


