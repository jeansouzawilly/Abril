<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<?php $title=('Compra') ?>
<?php include ('abrir_conexao.php') ?>
<?php include ('head.php') ?>

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
	
	
	<section>
		<div class="container">
			<div class="row">
				<?php include('listaCategorias.php') ?>
				
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
					<?php 

						$query = $connection->query("select * from produtos where id_produto = " . $_GET['id_produto']); 
						$produtos = mysqli_fetch_array($query);
					?> 
						
						<div class="col-sm-5">
							<div class="view-product">
								<img src="image/<?php echo $produtos['imagem'] ?>" alt="" />
							</div>
							

						</div>
					
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?php echo $produtos['nome']; ?></h2>
								<span>
									<span>R$ <?php echo $produtos['preco']; ?></span>
									<label>Quantidade:</label>
									<input type="text" value="" />
									<a href="carrinho.php?id_produto=<?php echo $_GET['id_produto']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Comprar</a>
									<!--<button href="carrinho.php" type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Comprar
									</button>-->
								</span>
								<p><b><?php echo $produtos['quantidade']; ?></b> Em Estoque</p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#descricao" data-toggle="tab">Descrição</a></li>
							</ul>
							<p><?php echo $produtos['descricao']; ?></p>
						</div>
						
					</div><!--/category-tab-->
					
					
					
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
