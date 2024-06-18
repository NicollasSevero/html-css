<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Hotel Bela Vista</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">
    
    <style>
        body {
            padding-top: 56px; 
        }
        .form-section {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Hotel Bela Vista</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formulario.php">Formulário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h2 class="text-center mt-5">Contato</h2>
    <div class="form-section">
        <form id="contactForm">
            <div class="form-group">
                <label for="contactName">Nome</label>
                <input type="text" class="form-control" id="contactName" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="contactEmail">Email</label>
                <input type="email" class="form-control" id="contactEmail" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="contactMessage">Mensagem</label>
                <textarea class="form-control" id="contactMessage" rows="4" placeholder="Digite sua mensagem" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar Mensagem</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Mensagem enviada com sucesso!');
        // Aqui você pode adicionar o código para enviar o formulário para o servidor
    });
</script>

</body>
</html>
