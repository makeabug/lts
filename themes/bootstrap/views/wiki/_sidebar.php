<?php 
$cMenu = array(
    'htmlOptions' => array(
        'class' => 'nav nav-list'
    ),
    'items' => array(
        array(
            'label'=>'Wiki', 
            'itemOptions'=>array('class'=>'nav-header')),
        array(
            'label'=>'Home', 
            'url'=>Yii::app()->createUrl('wiki/home'), 
            'itemOptions'=>array('class'=>$action=='home'? 'active' : '')),
        array(
            'label'=>'Create Page', 
            'url'=>array('create'), 
            'itemOptions'=>array('class'=>$action=='create'? 'active' : '')),
        array(
            'label'=>'All Pages', 
            'url'=>array('list'),
            'itemOptions'=>array('class'=>$action=='list'? 'active' : ''))
    )
);
    
$this->widget('zii.widgets.CMenu', $cMenu);
?>