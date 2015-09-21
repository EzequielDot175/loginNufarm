<?php include 'inc/header.php' ?>

<div class="container-fluid" id="login">

	<div class="login-top">
		<img src="assets/images/logo-white.png" id="Nufarm" title="Nufarm" alt="Imagen no encontrada">
		<img src="assets/images/logo-green.png" id="Nufarm Gold" title="Nufarm Gold" alt="Imagen no encontrada">
	</div>

	<div class="login-dialog">
		<form action="" method="post" id="">
			<label>
				usuario
			</label>
			<input type="text" name="nf_username" value="">
			<p>
				<!-- Complete los campos obligatorios. -->
			</p>

			<label>
				clave
			</label>
			<input type="password" name="nf_password" value="">
			<p>
				<!-- Complete los campos obligatorios. -->
			</p>
			<input type="hidden" name="_token" value="<?php Token::printToken(); ?>">
			<div class="btn">
				<button type="submit">ingresar</button>
			</div>
		</form>
	</div>

</div>


<?php include 'inc/footer.php' ?>