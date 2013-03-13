<div class="span12">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'htmlOptions' => array('class'=>'form-horizontal')
    )); ?>
    <fieldset>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'Title:', array('class'=>'control-label')); ?> 
        <div class="controls">
            <?php echo $form->textField($model, 'title', array('class'=>'input-xlarge')); ?>
            <?php echo $form->error($model,'title', array('class'=>'help-block')); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo $form->labelEx($model,'Content:' , array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textArea($model, 'content',array('rows'=>30, 'style'=>'width:600px'), array('class'=>'')); ?>
            <?php echo $form->error($model, 'content', array('class'=>'help-block')); ?>
        </div>
    </div>
    
    <div class="form-actions">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary'));?>
    </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>
<!-- .block_content ends -->