<?php
include 'conection.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM estoque";
$result = $conn->query($sql);

$estoqueData = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Calcular o valor total em estoque
        $valorTotal = $row["quantidade_em_estoque"] * $row["preco_unitario"];
        $row["valor_total"] = $valorTotal;
        $estoqueData[] = $row;
   }
};

$conn->close();



// Ler o conteúdo do arquivo "estoque.html"
$htmlContent = file_get_contents('../estoque.html');

// Inserir dinamicamente os valores no conteúdo HTML
// $htmlContent = str_replace('{{DATA}}', $estoqueData[0]["data"], $htmlContent);
// $htmlContent = str_replace('{{NOTA_FISCAL}}', $estoqueData[0]["nota_fiscal"], $htmlContent);
// $htmlContent = str_replace('{{DESCRICAO_PRODUTO}}', $estoqueData[0]["descricao_produto"], $htmlContent);
// $htmlContent = str_replace('{{CODIGO_PRODUTO}}', $estoqueData[0]["codigo_produto"], $htmlContent);
// $htmlContent = str_replace('{{CATEGORIA}}', $estoqueData[0]["categoria"], $htmlContent);
// $htmlContent = str_replace('{{QUANTIDADE_EM_ESTOQUE}}', $estoqueData[0]["quantidade_em_estoque"], $htmlContent);
// $htmlContent = str_replace('{{PRECO_UNITARIO}}', "R$ " . number_format($estoqueData[0]["preco_unitario"], 2, ",", "."), $htmlContent);
// $htmlContent = str_replace('{{VALOR_TOTAL}}', "R$ " . number_format($estoqueData[0]["valor_total"], 2, ",", "."), $htmlContent);


// Exibir o conteúdo HTML
echo $htmlContent;

?>

