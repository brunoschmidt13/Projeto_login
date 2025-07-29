<?php
include("conexao.php");

// Pega os dados do formulário
$email = $_POST['email'];
$senha = sha1($_POST['senha']); // Criptografa a senha

// Verifica se o email já existe
$sql_verifica = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = $conexao->query($sql_verifica);

if ($resultado->num_rows > 0) {
    echo "Email já cadastrado. <a href='cadastro.html'>Tente outro</a>";
} else {
    // Insere o novo usuário
    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
    if ($conexao->query($sql) === TRUE) {
        header("Location: otarios.html");
    exit();
    } else {
        echo "Erro: " . $conexao->error;
    }
}
?>
