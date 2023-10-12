<?php
// Conexão com o banco de dados (substitua com suas configurações)
//$servername = "127.0.0.1:3306";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
    // Aqui você pode continuar com suas operações no banco de dados
}

// Consulta SQL para selecionar os dados da tabela "estoque"
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
}

$conn->close();

// Incluir o arquivo HTML para exibir os dados
include 'estoque.html';
?>
