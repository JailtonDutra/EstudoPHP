
<?php 
	//Informações sobre o banco de dados.
	$host = 'localhost';
	$database = 'sigeesc';
	$user = 'root';
	$password = '';
	//função para conectar ao servidor do banco de dados.
	$conn = new mysqli($host, $user, $password, $database);
	$conn -> set_charset("utf8");
	mysqli_set_charset($conn,'utf8');
	if($conn->connect_error){
		die("Erro ao se conectar!");
	}
 ?>