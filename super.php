<?php
// Conexão com o banco de dados (substitua com suas configurações)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portaldb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}

// Consulta SQL
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

include 'estoque.html';
?>
