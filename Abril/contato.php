<!DOCTYPE html>
<html lang="en">

<?php include('head.php') ?>

<?php include('abrir_conexao.php') ?>

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
	
	
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    				 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h4 style="color:green">
							<?php if(isset($_SESSION['mensagem'])){ 
								echo $_SESSION['mensagem']; 
								$_SESSION['mensagem'] = null; 
							} ?>		
							</h4>	
	    				<p><h3>Contato</h3></p>
	    				<br/>
	    				<div class="form-one">
								<form action="contatoSql.php" method="post">
									<input type="text" name="nome" placeholder="Nome">
									<input type="text" name="email" placeholder="Email">
									<input type="text" name="assunto" placeholder="Assunto">
									<input type="text" name="mensagem" placeholder="Sua mensagem aqui!">	
									<button  type="submit" class="btn btn-default" >Enviar</button>	
								</form>
						</div>
	    			</div>
	    		</div> 			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
					<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 Teste Abril Inc. All rights reserved.</p>
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
