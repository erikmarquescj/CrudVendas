<?php
//Incluir a conexão com banco de dados
include_once('conexao.php');


//Pesquisar no banco de dados a venda
$vendas = "SELECT * FROM venda";
$resultado_vendas = mysqli_query($link, $vendas);

if (mysqli_num_rows($resultado_vendas) <= 0) {
    echo "Nenhuma venda feita...";
} else {
    while ($rows = mysqli_fetch_assoc($resultado_vendas)) {
        echo "<tr>";
        echo "<th scope='row'>" . $rows['id'] . "</th>";
        echo "<td>" . date("d/m/Y", strtotime($rows["data"])) . "-" . $rows["hora"] . "</td>";
        echo "<td>" . utf8_encode($rows["vendedor"]) . "</td>";
        echo "<td> R$ " . number_format($rows["total"], 2, ',', '.') . "</td>";
        echo "</tr>";
    }
}

?>

