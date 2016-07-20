<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<?php include('head.php') ?>

<?php $title = "Home" ?> 

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
								<?php if(isset($_SESSION['nome'])){ ?>
									<li><a href="logout.php"><i class="fa fa-lock"></i>Sair</a></li>
									<li>Ola <?php echo $_SESSION['nome'] ?></li>
								<?php }else{ ?>
 									<li><a href="login.php"><i class="fa fa-lock"></i>Entrar</a></li>
								<?php } ?>
								
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
								<li><a href="index.php" >Home</a></li>
								<li><a href="contato.php">Contato</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<?php include('listaCategorias.php') ?>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Mais Vendidos</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
								<?php 
								$query = $connection->query("select * from produtos where id_produto = 9"); 
								$produtos = mysqli_fetch_array($query);
								?>
										<div class="productinfo text-center">
											<img src="image/<?php echo $produtos['imagem'] ?>" alt="" style="height:237px;width:255px;" />
											<h2>R$<?php echo $produtos['preco'] ?></h2>
											<p><?php echo $produtos ['nome'] ?></p>
											<a href="comprarProduto.php?id_produto=<?php echo $produtos['id_produto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</a>
										</div>

								
								</div>
							
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
								<?php 
								$query = $connection->query("select * from produtos where id_produto = 14"); 
								$produtos = mysqli_fetch_array($query);
								?>
									<div class="productinfo text-center">
										<img src="image/<?php echo $produtos['imagem'] ?>" alt="" style="height:237px;width:255px" />
										<h2>R$<?php echo $produtos ['preco'] ?></h2>
										<p><?php echo $produtos ['nome'] ?></p>
											<a href="comprarProduto.php?id_produto=<?php echo $produtos['id_produto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</a>
									</div>
									
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
								<?php 
								$query = $connection->query("select * from produtos where id_produto = 35"); 
								$produtos = mysqli_fetch_array($query);
								?>
									<div class="productinfo text-center">
										<img src="image/<?php echo $produtos['imagem'] ?>" alt="" style="height:237px;width:255px" />
										<h2>R$<?php echo $produtos['preco'] ?></h2>
										<p><?php echo $produtos['nome'] ?></p>
										<a href="comprarProduto.php?id_produto=<?php echo $produtos['id_produto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</a>
									</div>
									</div>
						
								</div>
								
							</div>
						</div>
								<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
								<?php 
								$query = $connection->query("select * from produtos where id_produto = 43"); 
								$produtos = mysqli_fetch_array($query);
								?>


										<div class="productinfo text-center">
											<img src="image/<?php echo $produtos['imagem'] ?>" alt="" style="height:237px;width:255px;" />
											<h2>R$<?php echo $produtos['preco'] ?></h2>
											<p><?php echo $produtos ['nome'] ?></p>
											<a href="comprarProduto.php?id_produto=<?php echo $produtos['id_produto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</a>
										</div>

								
								</div>
							
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
								<?php 
								$query = $connection->query("select * from produtos where id_produto = 50"); 
								$produtos = mysqli_fetch_array($query);
								?>
									<div class="productinfo text-center">
										<img src="image/<?php echo $produtos['imagem'] ?>" alt="" style="height:237px;width:255px" />
										<h2>R$<?php echo $produtos ['preco'] ?></h2>
										<p><?php echo $produtos ['nome'] ?></p>
											<a href="comprarProduto.php?id_produto=<?php echo $produtos['id_produto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</a>
									</div>
									
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
								<?php 
								$query = $connection->query("select * from produtos where id_produto = 65"); 
								$produtos = mysqli_fetch_array($query);
								?>
									<div class="productinfo text-center">
										<img src="image/<?php echo $produtos['imagem'] ?>" alt="" style="height:237px;width:255px" />
										<h2>R$<?php echo $produtos['preco'] ?></h2>
										<p><?php echo $produtos['nome'] ?></p>
										<a href="comprarProduto.php?id_ptoduto=<?php echo $produtos['id_ptoduto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</a>
									</div>
									</div>
						
								</div>
								
							</div>
					</div><!--features_items-->
				
				</div>
			</div>
		</div>
	</section>
	
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