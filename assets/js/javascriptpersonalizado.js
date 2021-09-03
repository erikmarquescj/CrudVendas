//Olá, esse é nosso arquivo JS do Sistema

// Função para inserir produto na lista

function insereLista() {

    var corpoTabela = $(".exibe_venda").find("tbody");
    var produto = $("#nomedoproduto").val();
    var valor = $("#valorunitario").val().replace(',', '.');
    // var valorFormatado = Intl.NumberFormat('pt-BR', {style: 'currency', currency: 'BRL'}).format(valor);
    var quantidade = $("#quantidade").val();
    var totalproduto = quantidade * valor;
    var linha = novaLinha(produto, valor, quantidade, totalproduto);
    corpoTabela.prepend(linha);
    somaTotal();
}

//Função para adicionar nova linha de produtos

function novaLinha(produto, valor, quantidade, totalproduto) {
    var linha = $("<tr>");
    var colunaProduto = $("<td>").text(produto);
    var colunaQuantidade = $("<td>").text(quantidade);
    var colunaValor = $("<td>").text(valor);
    var colunaTotal = $("<td>").text(totalproduto);


    linha.append(colunaProduto);
    linha.append(colunaQuantidade);
    linha.append(colunaValor);
    linha.append(colunaTotal);

    return linha;

}

// Função para inserir uma nova venda via AJAX

function insereVenda() {
    var vendafinal = [];
    var linhas = $("tbody>tr");
    var vendedor = $("#vendedor").val();
    var totalvenda = $("#totalvendas").text();

    linhas.each(function () {
        var produto = $(this).find("td:nth-child(1)").text();
        var quantidade = $(this).find("td:nth-child(2)").text();
        var valor = $(this).find("td:nth-child(3)").text();


        var sale = {
            vendaproduto: produto,
            vendaqtd: quantidade,
            vendavalor: valor

        };

        vendafinal.push(sale);


    });


    var dados = {
        vendafinal: vendafinal,
        vendedor: vendedor,
        totalvenda: totalvenda
    };

    $.post("salvarvenda.php", dados, function (retorna) {
        $("#retorna1").html(retorna);
    });
}

// Função para pesquisa por vendedor

$(function () {
    //Pesquisar as vendas sem refresh na página
    $("#pesquisa").keyup(function () {

        var pesquisa = $(this).val();

        //Verificar se há algo digitado
        if (pesquisa != '') {
            var dados = {
                palavra: pesquisa
            }
            $.post('busca.php', dados, function (retorna) {
                //Mostra dentro da tabela os resultado obtidos
                $(".resultado").html(retorna);
            });
        } else {
            $(".resultado").load('buscatotal.php');
        }
    });
});

// Função para calcular a soma dos produtos e exibir na tela de vendas

function somaTotal() {
    var total = 0;
    $("tbody tr:visible  td:nth-child(4)").each(function () {
        total += parseInt($(this).text());
        $("#totalvendas").text(total);
        $('.first').each(function () {
            $(this).val('');
        });
    });
}

//DataTable para gerenciar e organizar a paginação da tabela

$(document).ready(function () {
    $('#exibevendas').DataTable({
        "paging": true,
        "ordering": false,
        "searching": false,
        "language": {
            "paginate": {
                "first": "Primeira",
                "last": "Ultima",
                "next": "Próxima",
                "previous": "Anterior"
            },
            "lengthMenu": "Exibir _MENU_ registros por página",
            "zeroRecords": "Nada encontrado, desculpe",
            "info": "Exibindo página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });
});

// Função para pesquisa por data

$(document).ready(function () {
    var table = $('#exibevendas').DataTable();

    // Event listener to the two range filtering inputs to redraw on input
    $('#pesquisadata').keyup(function () {
        table.draw();
    });
});
