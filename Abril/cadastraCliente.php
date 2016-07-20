<?php 

session_start();

include('abrir_conexao.php');

$sql = "insert into cliente(nome, email, senha, telefone) value(?,?,?,?)";

var_dump($_POST);
if (!($statement = $connection->prepare($sql))) {
    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
}

if(!$statement->bind_param('ssss', $_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['telefone'])){
	echo "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
}

if (!$statement->execute()) {
	echo "nao funcionou!";
   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
}

include ('fecha_conexao.php');

$_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";

header('Location: cadastroConta.php');

?>