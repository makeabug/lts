<div class="block">
    <div class="block_head">
    	<div class="bheadl"></div>
    	<div class="bheadr"></div>
    	<h2>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>
    	<ul class="tabs">
    		<li class="nobg active" style=""><a href="#tab1">Tab 1</a></li>
    		<li class=""><a href="#tab2">Tab 2</a></li>
    	</ul>
    </div>		
    <!-- .block_head ends -->
    
    <div class="block_content tab_content" id="tab1" style="display: block;">
    	<?php if(!Yii::app()->user->isGuest):?>
        <p>You last logged in on <?php echo date('l, F d, Y, g:i a', Yii::app()->user->lastLoginTime); ?>.</p>
        <?php endif;?>
    	<p>Congratulations! You have successfully created your Yii application.</p>					
    </div>		
    <!-- .block_content ends -->
    
    <div class="block_content tab_content" id="tab2" style="display: none;">
    	<h3>This is the second tab</h3>
    	<p>Praesent vitae sapien orci. Mauris nec purus in mi accumsan convallis non et lorem. Nunc tincidunt consequat risus, ac tincidunt nibh hendrerit at. Nullam sit amet nisi eget magna lacinia ullamcorper non sed sem. Ut ornare consequat commodo. Donec vitae justo risus. Nulla ornare posuere egestas. Nulla varius purus quis lacus placerat tincidunt. Maecenas facilisis interdum rhoncus. Sed laoreet vulputate lacus sit amet aliquam.</p>
    </div>		
    <!-- .block_content ends -->
    
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>