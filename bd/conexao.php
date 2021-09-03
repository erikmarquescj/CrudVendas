<?php
	$servidor = "127.0.0.1";
	$usuario = "root";
	$senha = "";
	$dbname = "crud_memo";
	//Criar a conexao
	$link = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$link){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}
