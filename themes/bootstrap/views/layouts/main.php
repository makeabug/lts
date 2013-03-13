<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <style type="text/css" media="all">
        @import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css");
        @import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css");
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/bootstrap.js"></script>
  </head>
  <body>	
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="#">Track</a>
                <div class="nav-collapse collapse">
                    <?php 
                    $this->widget('zii.widgets.CMenu', array(
                    'id' => 'nav',
                    'htmlOptions' => array(
                        'class' => 'nav'
                    ),
                    'items' => array(
                        array('label' => 'Dashboard', 'url'=>array('/site/index')),
                        //array('label' => 'Blog', 'url'=>array('/post')),
                        array('label' => 'Wiki', 'url'=>array('/wiki')),
                    	array('label' => 'Demo', 'url'=>array('/demo')),
                        array('label' => 'Account', 'url'=>array('/account')),
                    ),
                    ));
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <?php echo $content;?>    
    </div>
    
  </body>
</html>