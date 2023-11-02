<?php
include './conection.php';
include './modelBody.php';

$htmlContent = file_get_contents('../html/criarAcesso.html');
echo $htmlContent;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $nova_senha = $_POST["nova_senha"];
    $confirmar_senha = $_POST["confirmar_senha"];
    
    // Verifique se o e-mail existe no banco de dados
    // Se o e-mail for válido, verifique se as senhas coincidem
    if (verificarEmaileSenha($email, $nova_senha, $confirmar_senha)) {
        // Senha redefinida com sucesso, exiba uma mensagem de confirmação
        echo "Senha redefinida com sucesso!";
    } else {
        // Exiba uma mensagem de erro
        echo "Erro na redefinição de senha. Verifique as informações fornecidas.";
    }
}

function verificarEmaileSenha($email, $nova_senha, $confirmar_senha) {
    // Conexão com o banco de dados (substitua pelas suas informações)
    $conn = mysqli_connect("localhost", "root", "root", "portaldb");

    if (!$conn) {
        die("Erro na conexão: " . mysqli_connect_error());
    }

    // Verifique se o e-mail existe no banco de dados
    $query = "SELECT id, senhaCriptografada FROM acessos WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verifique se as senhas coincidem
        if ($nova_senha === $confirmar_senha) {
            // Atualize a senha no banco de dados
            $nova_senha_criptografada = password_hash($nova_senha, PASSWORD_DEFAULT);
            $user_id = $row['id'];
            $update_query = "UPDATE acessos SET senhaCriptografada = '$nova_senha_criptografada' WHERE id = $user_id";
            if (mysqli_query($conn, $update_query)) {
                // Senha redefinida com sucesso
                mysqli_close($conn);
                return true;
            } else {
                // Erro ao atualizar a senha
                mysqli_close($conn);
                return false;
            }
        } else {
            // Senhas não coincidem
            mysqli_close($conn);
            return false;
        }
    } else {
        // E-mail não encontrado no banco de dados
        mysqli_close($conn);
        return false;
    }
}

include '../php/modelFooter.php';

?>
