<div class="block small center login">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>		
		<h2>Login</h2>
		<ul>
			<!--<li><a href="#">back to the site</a></li>-->
			<?php echo CHtml::link('back to the site', array('index')); ?>
		</ul>
	</div>		
	<!-- .block_head ends -->		
	<div class="block_content form">				
		<div class="message info">
		  <p class="note">Fields with <span class="required">*</span> are required.</p>
		</div>			
		<?php
		  $form = $this->beginWidget('CActiveForm', array(
		      'id' => 'login-form'
		  ));
		?>
		
		<p>
		  <?php echo $form->labelEx($model, 'Username:');?> <br/>
		  <?php echo $form->textField($model, 'username', array('class'=>'text'));?>
		  <?php echo $form->error($model,'username'); ?>
		</p>
		
		<p>
		  <?php echo $form->labelEx($model, 'Password:');?> <br/>
		  <?php echo $form->passwordField($model, 'password', array('class'=>'text'));?>
		  <?php echo $form->error($model,'password'); ?>
		</p>
		
		<p>
		  <?php echo CHtml::submitButton('Login', array('class'=>'submit'));?> &nbsp; 
		  <?php echo $form->checkBox($model, 'rememberMe', array('class'=>'checkbox', 'checked'=>'checked')); ?>
		  <?php echo $form->label($model,'Remember me'); ?>
		  <?php echo $form->error($model,'rememberMe'); ?>
		</p>
		
		<?php $this->endWidget();?>

	</div>		
	<!-- .block_content ends -->
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		
<!-- .login ends -->