<!DOCTYPE html>
<html lang="pt_BR>
<head>
    <meta charset=" utf-8">
<title>Crud Exibe Vendas MemoCash</title>

<!-- Apenas JavaScript -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/javascriptpersonalizado.js"></></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<!-- Apenas CSS -->
<link href="assets/css/estilos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<br/><br/>

<div class="container">
    <div class="row">
        <div class=".col-md-8" style="margin-bottom: -40px">
            <a href="index.php">
                <img src="assets/img/logo.png"></a>
        </div>

    </div>

    <br/><br/><br/>
    <div class="gravar">
        <div class="inputgravar">
            <div class="tituloinput">Venda:</div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control first" id="nomedoproduto" placeholder="Nome do Produto"/>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control first" id="quantidade" placeholder="Quantidade"/>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control first" id="valorunitario" placeholder="Valor"/>
                    </div>

                    <div class="col">
                        <button name="venda" class="btn btn-success" type="submit" onclick="insereLista()">Lançar
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <section class="exibe_venda">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor Unidade</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>
    <div class="row">
        <div class="col col-lg-2">
            <form class="form-floating">
                <input type="text" class="form-control" id="vendedor" value="Erik Marques"/>
                <label for="vendedor">Vendedor:</label>
            </form>
        </div>
        <div class="col col-lg-3" style="float: right">
            <h2>Total: <span id="totalvendas">0</span></h2>
        </div>

    </div>
    <div class="col" style="float: right">
        <button class="btn btn-primary btn-lg" type="submit" onclick="insereVenda()">Salvar
            Venda
        </button>
    </div>
    <div id="retorna1"></div>
</div>
</body>
</html>