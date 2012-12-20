<div class="form">
    <?php $form=$this->beginWidget('CActiveForm'); ?>
    <p class="row">
        <?php echo $form->labelEx($model,'Title:'); ?> <br>
        <?php echo $form->textField($model, 'title', array('class'=>'text medium')); ?>
        <?php echo $form->error($model,'title'); ?>
    </p>
    
    <p class="row">
        <?php echo $form->labelEx($model,'Content:'); ?> <br>
        <?php echo $form->textArea($model, 'content',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model, 'content'); ?>
    </p>
    
    <p class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'submit mid'));?>
    </p>
    <?php $this->endWidget(); ?>
</div>
<!-- .block_content ends -->