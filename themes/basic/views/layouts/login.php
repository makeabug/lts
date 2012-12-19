<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <style type="text/css" media="all">
		@import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css");
		@import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css");
    </style>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=7" /><![endif]-->
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->
	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>	
	<div id="hld">
		<div class="wrapper">		
		<!-- wrapper begins -->		
	       <?php echo $content;?>		
		</div>						
		<!-- wrapper ends -->
	</div>		
	<!-- #hld ends -->
</body>
</html>