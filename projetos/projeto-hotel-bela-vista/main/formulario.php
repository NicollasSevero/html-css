<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Reserva</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">

    <style>
        body {
            background-color: lightblue;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hotel Bela Vista</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
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
    </nav>

    <div class="container mt-5">
        <h2>Formulário de Reserva</h2>
        <form id="reservationForm" action="salvar_reserva.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="praia">Praia</label>
                <select class="form-control" id="praia" name="praia" required>
                    <option value="Praia de Copacabana">Praia de Copacabana</option>
                    <option value="Praia de Ipanema">Praia de Ipanema</option>
                    <option value="Praia do Forte">Praia do Forte</option>
                    <option value="Praia da Joaquina">Praia da Joaquina</option>
                    <option value="Praia de Jericoacoara">Praia de Jericoacoara</option>
                    <option value="Praia de Pipa">Praia de Pipa</option>
                    <option value="Praia do Espelho">Praia do Espelho</option>
                    <option value="Praia dos Carneiros">Praia dos Carneiros</option>
                    <option value="Praia do Francês">Praia do Francês</option>
                    <option value="Praia da Pitanga">Praia da Pitanga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="checkin">Data de Check-in</label>
                <input type="date" class="form-control" id="checkin" name="checkin" required>
            </div>
            <div class="form-group">
                <label for="checkout">Data de Check-out</label>
                <input type="date" class="form-control" id="checkout" name="checkout" required>
            </div>
            <div class="form-group">
                <label for="dailyRate">Valor da Diária (R$)</label>
                <input type="number" class="form-control" id="dailyRate" name="valor_diaria" step="0.01" required>
            </div>
            <div class="form-group mt-3">
                <label for="total">Valor Total (R$)</label>
                <input type="text" class="form-control" id="total" name="valor_total" readonly>
                <input type="hidden" id="hidden_total" name="hidden_total">
            </div>
            <button type="button" class="btn btn-primary btn-calculate" onclick="calculateTotal()">Calcular Diária</button>
            <button type="submit" class="btn btn-success">Enviar Reserva</button>
        </form>
    </div>

    <script>
        function calculateTotal() {
            const checkinDate = new Date(document.getElementById('checkin').value);
            const checkoutDate = new Date(document.getElementById('checkout').value);
            const dailyRate = parseFloat(document.getElementById('dailyRate').value);

            if (checkinDate && checkoutDate && !isNaN(dailyRate)) {
                const diffTime = Math.abs(checkoutDate - checkinDate);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                const total = diffDays * dailyRate;

                document.getElementById('total').value = total.toFixed(2);
                document.getElementById('hidden_total').value = total.toFixed(2);
            } else {
                alert('Por favor, preencha todos os campos e selecione as datas corretamente.');
            }
        }
    </script>
</body>
</html>
