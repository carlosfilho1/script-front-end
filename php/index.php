<?php

$htmlContent = file_get_contents('../html/index.html');
echo $htmlContent;

session_start();

include './conection.php';


if (isset($_POST['useremail']) && isset($_POST['password'])) {
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];

    // Consulta para verificar as credenciais
    $query = "SELECT id, email, senhaCriptografada FROM access WHERE email = '$useremail'";
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
            echo "Credenciais inválidas.";
        }
    } else {
        echo "Credenciais inválidas.";
    }
}

//mysqli_close($conn);


?>