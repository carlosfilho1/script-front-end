<?php

$htmlContent = file_get_contents('../html/index.html');
echo $htmlContent;

session_start();

include './conection.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar as credenciais
    $query = "SELECT id, nome, senhaCriptografada FROM access WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verifique se a senha corresponde
        if (password_verify($password, $row['senhaCriptografada'])) {
            // Autenticação bem-sucedida, crie uma sessão
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nome'];
            header("Location: home.php");
        } else {
            echo "Credenciais inválida.";
        }
    } else {
        echo "Credenciais inválidas.";
    }
}

mysqli_close($conn);


?>