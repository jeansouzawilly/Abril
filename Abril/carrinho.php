<!DOCTYPE html>
<html lang="en">
<?php $title = "Carrinho"; ?>

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
		<h1><?php if(isset($_SESSION['mensagem'])){
		 echo $_SESSION['mensagem'];
	}
	$_SESSION['mensagem'] = null;
	?></h1>
			<div class="table-responsive cart_info">

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Preço</td>
							<td class="quantity">Quantidade</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<?php 
					$query = $connection->query("select * from produtos where id_produto = " . $_GET['id_produto']); 
					$produtos = mysqli_fetch_array($query);
					?> 

					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="image/<?php echo $produtos['imagem'] ?>" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><?php echo $produtos['nome']; ?></h4>
								<p><?php echo $produtos['id_produto']; ?></p>
							</td>
							<td class="cart_price">
								<p>R$ <?php echo $produtos['preco']; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">R$ <?php echo $produtos['preco']; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<select name="tipoPagamento">
							<option> Tipo de Pagamento</option>
							<option value="Débito">Débito</option>
							<option value="Boleto">Boleto</option>
							<option value="PayPal">PayPal</option>
						</select>
						
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span>R$ <?php echo $produtos['preco']; ?></span></li>
						</ul>
							<a class="btn btn-default update" href="index.php">Continuar Comprando</a>
							<a class="btn btn-default check_out" href="/Abril/comprar.php?id_produto=<?php echo $_GET['id_produto']; ?>">Comprar</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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