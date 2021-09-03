<?php
header('Content-Type: text/html; charset=utf-8');
require "conexao.php";

//Pegar dados da venda;

$vendedor = $_POST['vendedor'];
$totalvenda = $_POST['totalvenda'];
$data = date("Y-m-d");
$hora = date("H:i:s");

//Salva no banco de dados

$query = "INSERT INTO venda (vendedor, data, hora, total)
VALUES ('$vendedor','$data','$hora','$totalvenda')";
mysqli_set_charset($link, 'utf8');
mysqli_query($link, $query) or die(mysqli_error($link));

//Pega o último ID salvo no banco
$consulta = "SELECT id FROM venda ORDER BY id DESC LIMIT 1";
$con = $link->query($consulta) or die($link->error);
while ($dado = $con->fetch_array()) {
    $ultimavenda = $dado["id"];
}


//Pegar dados dos produtos
$vendafinal = $_POST['vendafinal'];

//Cadastrar produtos no Banco de Dados
foreach($vendafinal as $pr) {

    $queryproduto = "INSERT INTO venda_produtos (id_venda, nome, valor, quantidade) VALUES ('$ultimavenda','"
        .$pr["vendaproduto"]."', '"
        .$pr["vendavalor"]."', '"
        .$pr["vendaqtd"]."'); ";

    mysqli_query($link, $queryproduto) or die(mysqli_error($link));
    mysqli_set_charset($link, 'utf8');
}
echo "<script>window.location='index.php';alert('$vendedor, sua venda foi cadastrada com sucesso!');</script>";
?>

