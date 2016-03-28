<?php
	use Helpers\Form;
 ?>

<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1><?=$title;?></h1>
		</div>
		<div class="panel-body">
			<p><?=$welcomeMessage;?></p>

			<?php echo Form::open(array('method' => 'post')); ?>

				<!-- Username -->
				<div class='input-group' style='width: 100%; margin-bottom: 25px'>
					<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
					<?php echo Form::input(array('id' => 'username', 'name' => 'username', 'class' => 'form-control', 'placeholder' => 'UserName')); ?>
					<span id='resultun' class='input-group-addon'></span>
				</div>

				<!-- Password 1 -->
				<div class='input-group' style='width: 100%; margin-bottom: 25px'>
					<span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
					<?php echo Form::input(array('id' => 'passwordInput', 'type' => 'password', 'name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')); ?>
					<span id='password01' class='input-group-addon'></span>
				</div>

				<!-- Password 2 -->
				<div class='input-group' style='width: 100%; margin-bottom: 25px'>
					<span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
					<?php echo Form::input(array('id' => 'confirmPasswordInput', 'type' => 'password', 'name' => 'passwordc', 'class' => 'form-control', 'placeholder' => 'Confirm Password')); ?>
					<span id='password02' class='input-group-addon'></span>
				</div>

				<!-- Email -->
				<div class='input-group' style='width: 100%; margin-bottom: 25px'>
					<span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
					<?php echo Form::input(array('id' => 'email', 'type' => 'text', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'E-Mail')); ?>
					<span id='resultemail' class='input-group-addon'></span>
				</div>

				<!-- reCAPTCHA -->
				<div id="html_element"></div>

				<!-- CSRF Token -->
				<input type="hidden" name="token_register" value="<?= $data['csrfToken']; ?>" />

				<!-- Error Msg Display -->
				<span id='resultun2' class='label'></span>
				<span class='label' id='passwordStrength'></span>
				<span id='resultemail2' class='label'></span>

				<hr>
				<button class="btn btn-md btn-success" name="submit" type="submit">
					Register
				</button>
			<?php echo Form::close(); ?>

    </div>
  </div>
</div>
