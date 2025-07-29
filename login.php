<?php
include("conexao.php");

$email = $_POST['email'];
$senha = sha1($_POST['senha']); // Criptografar igual ao banco

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    // Login ok, redirecionar
    header("Location: welcome.html");
    exit();
} else {
    echo "Email ou senha inválidos!";
}
?>
