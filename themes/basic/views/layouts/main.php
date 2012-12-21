<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <style type="text/css" media="all">
		@import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css");
		@import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css");
		<!-- @import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.wysiwyg.css");
		@import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/facebox.css");
		@import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/visualize.css");
		@import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/date_input.css"); -->
    </style>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=7" /><![endif]-->
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->
	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/jquery.js"></script>
</head>

<body>
	<div id="hld">
		<div class="wrapper">		
		<!-- wrapper begins -->	
			<div id="header">
				<div class="hdrl"></div>
				<div class="hdrr"></div>
				<h1><a href="#">Track</a></h1>
				<?php $this->widget('zii.widgets.CMenu', array(
				    'id' => 'nav',
				    'items' => array(
				        array('label' => 'Dashboard', 'url'=>array('/site/index')),
				        //array('label' => 'Blog', 'url'=>array('/post')),
				        array('label' => 'Wiki', 'url'=>array('/wiki')),
				        array('label' => 'Notebook', 'url'=>array('/notebook')),
				    ),
				));?>
						
				<p class="user">Hello, <?php echo CHtml::link(Yii::app()->user->name, '#'); ?> | <?php echo CHtml::link('Logout', array('/site/logout')); ?></p>
			</div>		
			<!-- #header ends -->
			
			<!-- breadcrumbs -->
			<?php if (isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ))?>
            <?php endif; ?>
            <!-- breadcrumbs -->

			<?php echo $content;?>	

			<div id="footer">
				<p class="left"><?php echo CHtml::link( $this->pageTitle, '#'); ?></p>
				<p class="right"><?php echo Yii::powered(); ?></p>		
			</div>
		</div>						
		<!-- wrapper ends -->
	</div>		
	<!-- #hld ends -->
	
</body>
</html>