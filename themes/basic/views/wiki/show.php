<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    $model->title,
);
$this->contentTitle = $model->title;
?>

<?php
    echo $model->parseContent();
?>

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


