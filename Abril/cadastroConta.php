<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<?php include('head.php') ?>


<?php include('abrir_conexao.php'); ?>

<body>
		<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							
						</div>
					</div>
			
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="image/logo/1.jpg" alt="" style="width:229px;height:139px;"/></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="carrinho.php"><i class="fa fa-shopping-cart"></i> Carrinho</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Entrar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								
								<li><a href="contato.php">Contato</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	<section id="cart_items">
		<div class="container">

			
			

			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">	
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<h4 style="color:green">
							<?php if(isset($_SESSION['mensagem'])){ 
								echo $_SESSION['mensagem']; 
								$_SESSION['mensagem'] = null; 
							} ?>		
							</h4>


							<p><h3>Cadastro de Conta</h3></p>
							<div class="form-one">
								<form action="cadastraCliente.php" method="post">
									<p><h5>Nome</h5></p>
									<input type="text" name="nome" placeholder="">
									<p><h5>Email</h5></p>
									<input type="text" name="email" placeholder="">
									<p><h5>Senha</h5></p>
									<input type="password" name ="senha" placeholder="">
									<p><h5>Telefone</h5></p>
									<input type="text" name="telefone" placeholder="">
									
									<button  type="submit" class="btn btn-default" >Cadastrar
									</button>
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 Teste Abril   Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank">Jean Willy</a></span></p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
