<?php

session_start();

$htmlContent = file_get_contents('../html/index.html');
echo $htmlContent;

include './conection.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar as credenciais
    $query = "SELECT id, nome, email, senhaCriptografada FROM acessos WHERE email = '$email'";
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
            $login_error = "E-mail ou senha inválidos.";
            header("Location: ./");
            echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';

            exit(); // Encerra o script após redirecionamento
        }
    } else {
        $login_error = "E-mail ou senha inválidos.";
        header("Location: ./");
        echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
        exit();
    }
}

mysqli_close($conn);

?>

