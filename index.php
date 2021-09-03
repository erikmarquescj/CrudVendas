<?php
header('Content-type: text/html; charset=utf-8');
include "bd/conexao.php";
$consulta = "SELECT * FROM venda order by id DESC ";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Crud Exibe Vendas MemoCash</title>

    <!-- Apenas JavaScript -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/javascriptpersonalizado.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.0/datatables.min.js"></script>

    <!-- Apenas CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.0/datatables.min.css"/>

</head>
<body>

<div class="container">
    <div class="row">
        <div class=".col-md-8" style="margin-bottom: -40px">
            <img src="assets/img/logo.png">
        </div>

    </div>

    <br/><br/><br/>
    <h3>Pesquisar Vendas:</h3>
    <hr>
    <form method="POST" id="form-pesquisa" action="">
        Data: <input type="text" name="pesquisadata" id="pesquisadata">
        Vendedor: <input type="text" name="pesquisa" id="pesquisa">
        <input type="submit" name="enviar" value="Pesquisar">
    </form>

    <ul class="resultado1">

    </ul>

    <br>

    <table class="table table-striped table-bordered table-condensed table-hover" id="exibevendas">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" id="coldata">Data - Hora</th>
            <th scope="col">Vendedor</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody class="resultado">
        <?php while ($dado = $con->fetch_array()) { ?>
            <tr>
                <th scope="row"><?php echo $dado["id"] ?></th>
                <td><?php echo date("d/m/Y", strtotime($dado["data"])); ?> - <?php echo $dado["hora"] ?></td>
                <td><?php echo utf8_encode($dado["vendedor"]) ?></td>
                <td><?php echo "R$ " . number_format($dado["total"], 2, ',', '.') ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div style="float: right; margin-top:20px">
        <a href="venda.php" class="btn btn-primary">
            Nova BatVendas
        </a>
    </div>

</body>
</html>