<div class="container" align="center">
<div class="row">
<div class="col-md-8">
<!--<div class="span6 fondo-color">-->
<img src="../images/floreriatitulo.png"  width="1170" height="80">
<div style = background-color:#FFB5DF>


  	<h1>Florería Xalapa</h1> <br>

  	<div id="cosa" class="container">
	<div id="slider">
		<div><img src="../images/flores/dulcecorazon_24rosas.png" width="300" height="300"></div>
		<div><img src="../images/flores/rosasyflores.png" width="300" height="300"></div>
		<div><img src="../images/flores/eresdivina.png" width="300" height="300"></div>
		<div><img src="../images/flores/mujerbonita.png" width="300" height="300"></div>
		<div><img src="../images/flores/florescolores.png" width="300" height="300"></div>
		<div><img src="../images/flores/canastarosa.png" width="300" height="300"></div>
		<div><img src="../images/flores/dulcecorazon_24rosas.png" width="300" height="300"></div>
		<div><img src="../images/flores/blancopuro.png" width="300" height="300"></div>
	</div>
	</div>

  <h1>Iniciar sesion</h1> <br>
 

	<?php
	$login = array(
		'name'	=> 'login',
		'id'	=> 'login',
		'value' => set_value('login'),
		'maxlength'	=> 80,
		'size'	=> 30,
	);
	if ($login_by_username AND $login_by_email) {
		//$login_label = 'Email or login';
		$login_label = 'Correo o Usuario';
	} else if ($login_by_username) {
		$login_label = 'Login';
	} else {
		$login_label = 'Email';
	}
	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'size'	=> 30,
	);
	$remember = array(
		'name'	=> 'remember',
		'id'	=> 'remember',
		'value'	=> 1,
		'checked'	=> set_value('remember'),
		'style' => 'margin:0;padding:0',
	);
	$captcha = array(
		'name'	=> 'captcha',
		'id'	=> 'captcha',
		'maxlength'	=> 8,
	);
	?>
	<?php echo form_open($this->uri->uri_string()); ?>
	<table>
		<tr>
			<td><?php echo form_label($login_label, $login['id']); ?></td>
			<td><?php echo form_input($login); ?></td>
			<td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
		</tr>
		<tr>
			<td><?php echo form_label('Contraseña', $password['id']); ?></td>
			<td><?php echo form_password($password); ?></td>
			<td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
		</tr>
	
		<?php if ($show_captcha) {
			if ($use_recaptcha) { ?>
		<tr>
			<td colspan="2">
				<div id="recaptcha_image"></div>
			</td>
			<td>
				<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
				<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
				<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="recaptcha_only_if_image">Enter the words above</div>
				<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
			</td>
			<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
			<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
			<?php echo $recaptcha_html; ?>
		</tr>
		<?php } else { ?>
		<tr>
			<td colspan="3">
				<p>Enter the code exactly as it appears:</p>
				<?php echo $captcha_html; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
			<td><?php echo form_input($captcha); ?></td>
			<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
		</tr>
		<?php }
		} ?>
	
		<tr>
			<td colspan="3">
				<?php echo form_checkbox($remember); ?>
				<?php echo form_label('Recordar', $remember['id']); ?>
				<?php echo anchor('/auth/forgot_password/', 'Olvide mi Contraseña'); ?>
				<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Registrar'); ?>
			</td>
		</tr>
	</table>
	<?php echo form_submit ('submit', 'Ingresar'); ?> 
	<!--<?php echo form_submit('loginSubmit', 'Login',"class='btn btn-primary'"); ?> -->
	<!-- <button  type="submit" class="btn btn-primary" id="crear" name="crear" href=".base_url()."main/verAdmi/" >Crear</button> -->
	<?php echo form_close(); ?>
	
    <!--<a href="<?=base_url()?>main/admin" style="text-decoration:none"><h2>Iniciar como administrador</h2></a> -->
	<a href="<?=base_url()?>main/admin"><h3>Iniciar como administrador</h3></a>
	
	<!--<img src="../images/pelicula.gif"  width="1100" height="100">-->

	<a href="<?=base_url()?>main/inventarioInvitado"><h3>Vista de invitado</h3></a>
	<div align="center">
	  	<style>
			.container{
				color:FF00B3;
				width: 1170px;
				height: 320px;
				padding: 4px;
				margin: auto;
			}
			#slider{
				position: relative;
				width: 300px;
				height: 300px;
				padding: 15px;
				background-color: #FF3DED;
				margin: 0 auto;
			}
			#slider > div{
				position: absolute;
			}
			#pie{
				position: absolute;
				width: 1170px;
				height: 60px;
				padding: 0px;
				background-color: #;
				margin: 0 auto;
			}
		</style>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#slider div:gt(5)').hide();
				setInterval(function(){
					$('#slider div:first-child').fadeOut(3000)
					.next('div').fadeIn(3000)
					.end().appendTo('#slider');
				},3000);
			})
		</script>
	</div>
	<div id="pie">
		<div><img src="../images/subtitulo.png"  width="1170" height="40"></div>
	</div>
</div>
</div>
</div>
</div>




