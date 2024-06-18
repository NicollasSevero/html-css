<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "reservas_pousadas";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_errno) {
    die("Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

// Obter os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$praia = $_POST['praia'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$valor_diaria = $_POST['valor_diaria'];
$valor_total = $_POST['hidden_total'];

// Preparar e vincular a declaração SQL para inserir os dados no banco de dados
$stmt = $conn->prepare("INSERT INTO reservas (nome, telefone, praia, checkin, checkout, valor_diaria, valor_total) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nome, $telefone, $praia, $checkin, $checkout, $valor_diaria, $valor_total);

// Executar a declaração preparada para inserir os dados no banco de dados
if ($stmt->execute()) {
    //echo "Reserva feita com sucesso!";
    // Exibir uma mensagem de sucesso se a inserção for bem-sucedida
     header("index.php?funcionou=true");
} else {
    echo "Erro: " . $stmt->error; // Exibir uma mensagem de erro se ocorrer algum problema na inserção
}

// Fechar a declaração e a conexão
$stmt->close();
$conn->close();
?>
