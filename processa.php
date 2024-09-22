<?php
If ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "localhost"; // ou o endereço do seu servidor
$username = "root"; // seu usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "siteNoticias"; // nome do banco de dados

 $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Obter dados do formulário
    $email = $_POST['email'];
    $nome = $_POST['nome']; // Corrigido para 'nome'
    $senha = $_POST['senha']; // Corrigido para 'senha'

    // Inserir dados na tabela
    $sql = "INSERT INTO assinantes (email, nome, senha) VALUES ('$email', '$nome', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>
