<?php
include './conection.php';
include './modelBody.php';


$htmlContent = file_get_contents('../html/financeiro/form_orcamento.html');
echo $htmlContent;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $razaoSocial = $_POST["razao_social"];
    $nCNPJ = $_POST["cnpj_num"];
    $endereco = $_POST["endereco_txt"];
    $Email = $_POST["Email_txt"];
    $data = $_POST["data_txt"];
    $desconto = $_POST["desconto_txt"];
    $validade = $_POST["validade_num"];
    $telefone = $_POST["telefone_tel"];

    $codigo = $_POST["codigo"];
    $descricao = $_POST["descricaoProduto"];
    $quantidade = $_POST["quantidade"];
    $unitario = $_POST["precoUnitario"];
    $total = $_POST["precoTotal"];


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Prepara uma consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO orcamento (razaoSocial, cnpj, endereco, email, data, validade, telefone) VALUES ('$razaoSocial', '$nCNPJ', '$endereco', '$Email', '$data', '$validade', '$telefone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Conta cadastrada com sucesso.";
    } else {
        echo "Erro ao salvar os dados no banco de dados: " . $conn->error;
    }

    $sql1 = "INSERT INTO ItensOrcamento (Codigo, DescricaoProduto, Quantidade, PrecoUnitario, total) VALUES ('$codigo', '$descricao', '$quantidade', '$unitario', '$total')";

    if ($conn->query($sql1) === TRUE) {
        echo "Conta cadastrada com sucesso.";
    } else {
        echo "Erro ao salvar os dados no banco de dados: " . $conn->error;
    }
}


include './modelFooter.php';
