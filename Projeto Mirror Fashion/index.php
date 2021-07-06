<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/styl.css">
	<script src="./js/newjs.js" type="text/javascript"></script>
	<title>Mirror Fashion</title>

</head>


<body>
	<?php 
	include("header.php");
	?>


	<section id="main">
		<div class="container destaque">

			<section class="busca">
				<h2>Busca</h2>

				<form id="formBusca" name="formBusca" onsubmit="javascript: return BotaoBuscar();">
					<input type="search" id="txtBusca" name="txtBusca" placeholder="O que você procura">
					<input type="image" src="img/busca.png" alt="Buscar">
				</form>
			</section><!-- fim .busca -->

			<section class="menu-departamentos">
				<h2>Departamentos</h2>

				<nav>
					<ul>
						<li><a href="#">Blusas e Camisas</a></li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>

				</nav>
			</section><!-- fim .menu-departamentos -->

			<img src="img/destaque-home.png" alt="Promoção:
			Big City Night">
		</div><!-- fim .container .destaque -->

	</section>
	<!--section principal -->

	<div class="container paineis">
		<!-- os paineis de novidades e mais vendidos entrarão
		aqui dentro -->
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<!-- primeiro produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura4.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura6.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
			</ol>

		</section>
	</div>

	<section class="painel mais-vendidos">
		<h2>Mais Vendidos</h2>
		<ol>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura7.png">
						<figcaption>Fuzz Cardigan por R$129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura6.png">
						<figcaption>Fuzz Cardigan por R$129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura4.png">
						<figcaption>Fuzz Cardigan por R$129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura9.png">
						<figcaption>Fuzz Cardigan por R$129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura8.png">
						<figcaption>Fuzz Cardigan por R$129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura3.png">
						<figcaption>Fuzz Cardigan por R$129,90</figcaption>
					</figure>
				</a>
			</li>
		</ol>
	</section>


	<footer>
		<footer>
			<div class="container">
				<img id="logo"src="img/logo-rodape.png" alt="Logo Mirror Fashion">
				<ul class="social">
					<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
					<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
					<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
				</ul>
			</div>
		</footer>

	</footer><!-- footer-rodapé-->

</body>

</html>