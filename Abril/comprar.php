
<?php include('abrir_conexao.php'); 
session_start();
$sql = "select quantidade from produtos where id_produto = " . $_GET['id_produto'];

$resultado = $connection->query($sql);
$quantidade = mysqli_fetch_array($resultado)['quantidade'];

$sql = "insert into carrinho(id_produto, nome, quantidade, preco, tipoPagamento) value(?,?,?,?,?)";

var_dump($_POST);
if (!($statement = $connection->prepare($sql))) {
    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
}

if(!$statement->bind_param('isiss', $_POST['id_produto'], $_POST['nome'], $_POST['quantidade'], 
	$_POST['preco'], $_POST['tipoPagamento'])){
	echo "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
}

if($quantidade > 0){

	$sql = "update produtos set quantidade = (quantidade-1) where id_produto = " . $_GET['id_produto'];


	if (!($statement = $connection->prepare($sql))) {
	    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
	}

	if (!$statement->execute()) {
	   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
	}

	$sql = "insert into pedidos(id_produto, id_cliente) values (" . $_GET['id_produto'] . "," . $_SESSION['id_cliente'] . ", now())";

	if (!($statement = $connection->prepare($sql))) {
	    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
	}

	if (!$statement->execute()) {
	   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
	}

	$_SESSION['mensagem'] = "Compra feita com sucesso";
}else{
 	$_SESSION['mensagem'] = "Nao ha produtos disponiveis no estoque";
}



include ('fecha-conexao.php');

header('Location: carrinho.php?id='. $_GET['id_produto']);

?>