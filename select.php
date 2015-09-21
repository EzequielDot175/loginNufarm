<?php include 'inc/header.php' ?>
<div class="container-fluid" id="select">
	
	<div class="col-xs-12 head">
		<div class="inner">
			<div class="col-xs-6">
				<img src="assets/images/logo-white.png" id="Nufarm" title="Nufarm" alt="Imagen no encontrada">
				<img src="assets/images/logo-green.png" id="Nufarm Gold" title="Nufarm Gold" alt="Imagen no encontrada">
			</div>
		</div>
	</div>

	<div class="col-xs-12 top-menu">
		<div class="inner">
			<a href="#">
				condiciones comerciales
			</a>
			<a href="#">
				contacto
			</a>
		</div>
	</div>

	<div class="col-xs-12 bg">
		<div class="inner">
			<div class="col-xs-12 col-sm-4 login-box" id="box1">
				<div class="icon">
					<img src="assets/images/icon-a.png">
				</div>
				<h3>Marketing<br><span>Net</span></h3>
				<p class="pre">
					Se trata de una iniciativa de cooperación integral, que Nufarm le brinda a un grupo de distribuidores...
				</p>
				<a href="#" class="show-more">
					<span>más info</span>
				</a>
				<a href="./marketingNet" class="goto">
					ver catálogo
				</a>
			</div>

			<div class="col-xs-12 col-sm-4 login-box" id="box2">
				<div class="icon">
					<img src="assets/images/icon-b.png">
				</div>
				<h3>vendedor<br><span>estrella</span></h3>
				<p class="pre">
					Se trata de una iniciativa de cooperación integral, que Nufarm le brinda a un grupo de distribuidores...
				</p>
				<a href="#" class="show-more">
					<span>más info</span>
				</a>
				<a href="./vendedor-estrella" class="goto">
					ver estado
				</a>
			</div>

			<?php if(Auth::user()->gold == 1): ?>
			<div class="col-xs-12 col-sm-4 login-box" id="box3">
				<div class="icon">
					<img src="assets/images/icon-c.png">
				</div>
				<h3>Plan<br><span class="de"> de </span><span>Negocios</span></h3>
				<p class="pre">
					Se trata de una iniciativa de cooperación integral, que Nufarm le brinda a un grupo de distribuidores...
				</p>
				<a href="#" class="show-more">
					<span>más info</span>
				</a>
				<a href="./plan-de-negocios" class="goto">
					ver estado
				</a>
			</div>
			<?php endif; ?>

			<div class="col-xs-12 info-box" id="box1">
				<a href="#" class="show-less">X</a>
				<div class="col-xs-4">
					<p>
						1 Se trata de una iniciativa de cooperación integral, que Nufarm le brinda a un grupo de distribuidores seleccionados, con el fin de realizar acciones de marketing en conjunto.
						<br>
						El objetivo de este programa es generar un vínculo directo entre Nufarm y su red de distribuidores, unificando la comunicación y la aplicación la imagen corporativa.
						<br>
						<br>
						<span>
							<i class="glyphicon glyphicon-chevron-right"></i> el logo de tu empresa
						</span>
						<span>
							<i class="glyphicon glyphicon-chevron-right"></i> el logo de nufarm
						</span>
					</p>
				</div>

				<div class="col-xs-4">
					<p>
						<span>
							ARTÍCULOS PROMOCIONALES<br>CON IDENTIFICACIÓN DE MARCA.
						</span>
						La realización de artículos promocionales permite crear una buena identificación de marca a la vez de unificar la imagen de Nufarm a nivel país.
						<br>
						La compra centralizada permite lograr buenos costos y por sobre todo una calidad homogénea y asegurada.
						<br>
						<br>
						Este programa te permitirá tener material promocional con:
					</p>
				</div>

				<div class="col-xs-4">
					<img class="img-responsive" src="assets/images/imagen-A.png">
				</div>

				<div class="col-xs-12">
					<a href="#" class="enter">
						ir a catálogo marketing net
					</a>
				</div>
			</div>

			
			<div class="col-xs-12 info-box" id="box2">
				<a href="#" class="show-less">X</a>
				<div class="col-xs-4">
					<p>
						2 Se trata de una iniciativa de cooperación integral, que Nufarm le brinda a un grupo de distribuidores seleccionados, con el fin de realizar acciones de marketing en conjunto.
						<br>
						El objetivo de este programa es generar un vínculo directo entre Nufarm y su red de distribuidores, unificando la comunicación y la aplicación la imagen corporativa.
						<br>
						<br>
						<span>
							<i class="glyphicon glyphicon-chevron-right"></i> el logo de tu empresa
						</span>
						<span>
							<i class="glyphicon glyphicon-chevron-right"></i> el logo de nufarm
						</span>
					</p>
				</div>

				<div class="col-xs-4">
					<p>
						<span>
							ARTÍCULOS PROMOCIONALES<br>CON IDENTIFICACIÓN DE MARCA.
						</span>
						La realización de artículos promocionales permite crear una buena identificación de marca a la vez de unificar la imagen de Nufarm a nivel país.
						<br>
						La compra centralizada permite lograr buenos costos y por sobre todo una calidad homogénea y asegurada.
						<br>
						<br>
						Este programa te permitirá tener material promocional con:
					</p>
				</div>

				<div class="col-xs-4">
					<img class="img-responsive" src="assets/images/imagen-A.png">
				</div>

				<div class="col-xs-12">
					<a href="#" class="enter">
						ver estado
					</a>
				</div>
			</div>
			
			<?php if(Auth::user()->gold == 1): ?>

			<div class="col-xs-12 info-box" id="box3">
				<a href="#" class="show-less">X</a>
				<div class="col-xs-4">
					<p>
						3 Se trata de una iniciativa de cooperación integral, que Nufarm le brinda a un grupo de distribuidores seleccionados, con el fin de realizar acciones de marketing en conjunto.
						<br>
						El objetivo de este programa es generar un vínculo directo entre Nufarm y su red de distribuidores, unificando la comunicación y la aplicación la imagen corporativa.
						<br>
						<br>
						<span>
							<i class="glyphicon glyphicon-chevron-right"></i> el logo de tu empresa
						</span>
						<span>
							<i class="glyphicon glyphicon-chevron-right"></i> el logo de nufarm
						</span>
					</p>
				</div>

				<div class="col-xs-4">
					<p>
						<span>
							ARTÍCULOS PROMOCIONALES<br>CON IDENTIFICACIÓN DE MARCA.
						</span>
						La realización de artículos promocionales permite crear una buena identificación de marca a la vez de unificar la imagen de Nufarm a nivel país.
						<br>
						La compra centralizada permite lograr buenos costos y por sobre todo una calidad homogénea y asegurada.
						<br>
						<br>
						Este programa te permitirá tener material promocional con:
					</p>
				</div>

				<div class="col-xs-4">
					<img class="img-responsive" src="assets/images/imagen-A.png">
				</div>

				<div class="col-xs-12">
					<a href="#" class="enter">
						ver estado
					</a>
				</div>
			</div>

			<?php endif ?>
		</div><!-- end inner -->
	</div><!-- end bg -->


<?php include 'inc/footer.php' ?>