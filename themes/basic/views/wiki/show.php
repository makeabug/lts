<?php 
$this->breadcrumbs = array(
    'Wiki' => array('index'),
    $model->title,
);
$this->contentTitle = $model->title;
?>

<?php
    echo $model->formatContent();
?>

<div class='wikiButtons'>
    <p class="row buttons">
        <input class="button" name="editpage" type="button" value="Edit Page" onclick=location.href="<?php echo Yii::app()->createUrl('wiki/update', array('id'=>$model->id)); ?>">
        <input class="button" name="deletepage" type="button" value="Delete Page" onclick="if(confirm('Are you sure you want to delete this page?')){location.href='<?php echo Yii::app()->createUrl('wiki/delete', array('id'=>$model->id)); ?>';}">
    </p>
</div>


