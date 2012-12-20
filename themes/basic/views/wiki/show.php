<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    $model->title,
);
$this->contentTitle = $model->title;
?>

<?php
    echo $model->content;
?>

<div class='wikiButtons'>
    <p class="row buttons">
        <?php echo CHtml::link('Edit Page', array('update', 'id'=>$model->id));?>
        <?php echo CHtml::link('Delete Page', array('class'=>'button'));?>
    </p>
</div>


