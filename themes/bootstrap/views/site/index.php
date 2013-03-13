<?php
$this->contentTitle = 'Welcome to <i>' . CHtml::encode(Yii::app()->name) . '</i>';
?>

<div class="tab_content" id="tab1" style="display: block;">
	<?php if(!Yii::app()->user->isGuest):?>
    <p>You last logged in on <?php echo date('l, F d, Y, g:i a', Yii::app()->user->lastLoginTime); ?>.</p>
    <?php endif;?>
	<p>Congratulations! You have successfully created your Yii application.</p>					
</div>