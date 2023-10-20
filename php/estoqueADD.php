<?php
include 'conection.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $data = $_POST["data"];
    $notaFiscal = $_POST["notaFiscal"];
    $descricao = $_POST["descricao"];
    $codigoProduto = $_POST["codigoProduto"];
    $categoria = $_POST["categoria"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    
    // Prepara uma consulta SQL para inserir os dados no banco de dados
        $sql = "INSERT INTO estoque (data, nota_fiscal, descricao_produto, codigo_produto, categoria, quantidade_em_estoque, preco_unitario) VALUES ('$data','$notaFiscal','$descricao', '$codigoProduto','$categoria', $quantidade, $preco)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Os dados foram salvos com sucesso no banco de dados.";
    } else {
        echo "Erro ao salvar os dados no banco de dados: " . $conn->error;
    }
} 

?>