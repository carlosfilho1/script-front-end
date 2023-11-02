<?php
include './conection.php';
include './modelBody.php';

$htmlContent = file_get_contents('../html/criarAcesso.html');
echo $htmlContent;

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Capturar os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografar a senha
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir os dados no banco de dados
    $query = "INSERT INTO acessos (nome, email, senhaCriptografada, dataRegistro) VALUES ('$nome', '$email', '$senhaCriptografada', NOW())";

    if (mysqli_query($conn, $query)) {
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }
}

mysqli_close($conn);


include '../php/modelFooter.php';
