<?php
include './conection.php';
include './modelBody.php';


$htmlContent = file_get_contents('../html/financeiro/form_contasPagar.html');
echo $htmlContent;

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $classificacao = $_POST["classificacao1"];
    $valorPagar = $_POST["valorPagar1"];
    $dataVencimento = $_POST["dataVencimento1"];
    $empresa = $_POST["empresa1"];
    $contaBancaria = $_POST["contaBancaria1"];
    $valorAgendado = $_POST["valorAgendado1"];
    $dataAgendado = $_POST["dataAgendado1"];
    $pessoa = $_POST["pessoa1"];
    $dataCompetencia = $_POST["dataCompetencia1"];
    $descricaoLancamento = $_POST["descricaoLancamento1"];
    $comentarios = $_POST["comentarios1"];
    $status = $_POST["status1"];
    $valorPago = $_POST["valorPago1"];
    $saldoPagar = $_POST["saldoPagar1"];


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Prepara uma consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO contaspagar (classificacao, valorPagar, dataVencimento, empresa, contaBancaria, valorAgendado, dataAgendado, pessoa, dataCompetencia, descricaoLancamento, comentarios, status, valorPago, saldoPagar) VALUES ('$classificacao', '$valorPagar','$dataVencimento', '$empresa','$contaBancaria', '$valorAgendado', '$dataAgendado', '$pessoa', '$dataCompetencia', '$descricaoLancamento', '$comentarios', '$status','$valorPago', '$saldoPagar')";

    if ($conn->query($sql) === TRUE) {
        echo "Conta cadastrada com sucesso.";
    } else {
        echo "Erro ao salvar os dados no banco de dados: " . $conn->error;
    }
}


include './modelFooter.php';
