<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'barbearia';

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

$sql = "SELECT * FROM clientes";
$resultado = $conexao->query($sql);

// Verificar se há resultados
if ($resultado->num_rows > 0) {
    // Loop pelos resultados
    while ($row = $resultado->fetch_assoc()) {
        // Imprimir ou processar os dados conforme necessário
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fechar a conexão
$conexao->close();
?>