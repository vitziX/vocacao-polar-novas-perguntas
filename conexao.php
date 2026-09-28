<?php

// Dados de conexão (substitua pelos seus dados)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_data";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

