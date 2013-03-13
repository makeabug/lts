<?php
$this->actived = 'home';
?>

<div class="span12">
    <?php echo $model->parseContent();?>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id' => 'deleteWiki',
    'action' => array('delete', 'id'=>$model->id)
)); ?>
<fieldset>
    <div class="form-actions">
        <?php echo CHtml::hiddenField('id', $model->id);?>
        <?php echo CHtml::hiddenField('returnUrl', Yii::app()->createUrl('wiki/index'));?>
        <input class="btn" name="editpage" type="button" value="Edit Page" onclick=location.href="<?php echo Yii::app()->createUrl('wiki/update', array('id'=>$model->id));?>">
        <?php echo CHtml::submitButton('Delete', array('class'=>'btn btn-primary', 'confirm'=>'Are you sure you want to delete this page?'));?>
    </div>
</fieldset>
<?php $this->endWidget(); ?>


