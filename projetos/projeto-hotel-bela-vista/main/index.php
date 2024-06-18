<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Bela Vista</title>
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: lightblue;
        }
        .content {
            flex: 1;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
        }
        .nav-link {
            margin-right: 20px;
        }
        .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }
        .btn-reserve {
            margin-top: 10px;
        }
        .vantagens {
            height: 300px;
            padding: 30px;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
        .extra-content {
            background-color: #f1f1f1;
            padding: 20px 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<?php 
    if (isset($_GET["funcionou"]))
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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

<div class="content">
    <div id="praiaCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens\copacabana.jpg" alt="Praia de Copacabana">
                <div class="carousel-caption">
                    <h5>Praia de Copacabana, Rio de Janeiro, Brasil</h5>
                    <p>Copacabana é uma das praias mais famosas do mundo, conhecida por sua vasta extensão de areia branca e vibrante vida noturna. A pousada oferece vistas deslumbrantes do mar e está localizada a poucos passos do calçadão icônico, ideal para caminhadas e ciclismo.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/ipanema.jpg" alt="Praia de Ipanema">
                <div class="carousel-caption">
                    <h5>Praia de Ipanema, Rio de Janeiro, Brasil</h5>
                    <p>Ipanema é uma praia icônica com uma atmosfera sofisticada e relaxante. Nossa pousada fica próxima aos melhores restaurantes e boutiques, proporcionando uma experiência única com um pôr do sol espetacular e a animada cultura local.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/sancho.jpg" alt="Praia do Sancho">
                <div class="carousel-caption">
                    <h5>Praia do Sancho, Fernando de Noronha, Brasil</h5>
                    <p>Considerada uma das praias mais bonitas do mundo, a Praia do Sancho encanta com suas águas cristalinas e rica vida marinha. Hospede-se em nossa pousada e desfrute de um paraíso natural perfeito para mergulho e relaxamento.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/forte.jpg" alt="Praia do Forte">
                <div class="carousel-caption">
                    <h5>Praia do Forte, Bahia, Brasil</h5>
                    <p>A Praia do Forte é um refúgio tropical com recifes de corais e águas mornas. Nossa pousada oferece acomodações aconchegantes e está a uma curta caminhada do Projeto Tamar, onde você pode observar tartarugas marinhas.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens\jecoacoara.jpg" alt="Praia de Jericoacoara">
                <div class="carousel-caption">
                    <h5>Praia de Jericoacoara, Ceará, Brasil</h5>
                    <p>Jericoacoara é famosa por suas dunas de areia e lagoas de água doce. Fique em nossa pousada e aproveite a tranquilidade deste paraíso, perfeito para a prática de kitesurf, windsurf e caminhadas nas dunas.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/pipa.jpg" alt="Praia de Pipa">
                <div class="carousel-caption">
                    <h5>Praia de Pipa, Rio Grande do Norte, Brasil</h5>
                    <p>Com falésias coloridas e baías encantadoras, a Praia de Pipa é um destino de sonho. Nossa pousada oferece uma estadia confortável com fácil acesso a trilhas e a chance de avistar golfinhos nadando na baía.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens\maragogii.jpg" alt="Praia de Maragogi">
                <div class="carousel-caption">
                    <h5>Praia de Maragogi, Alagoas, Brasil</h5>
                    <p>Conhecida como o "Caribe Brasileiro", Maragogi é famosa por suas piscinas naturais e águas azul-turquesa. Nossa pousada oferece um refúgio paradisíaco para relaxar e explorar a incrível vida marinha local.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/pitinga.jpg" alt="Praia da Pitinga">
                <div class="carousel-caption">
                    <h5>Praia da Pitinga, Arraial d'Ajuda, Bahia, Brasil</h5>
                    <p>Com falésias impressionantes e mar tranquilo, a Praia da Pitinga é um lugar encantador para se hospedar. Desfrute do charme rústico de nossa pousada e relaxe na serenidade deste belo cenário natural.</p>
                    <a href="http://localhost/main/formulario.php" class="btn btn-primary btn-reserve">Reserve agora</a>
                </div>
            </div>
        </div>
        <div class="vantagens">
            <h2>Vantagens de Reservar no Nosso Site</h2>
            <p>Ao reservar através do nosso site, você garante as melhores tarifas e condições exclusivas. Nossas pousadas oferecem cancelamento gratuito, atendimento personalizado e diversas opções de pagamento. Aproveite promoções e pacotes especiais que só estão disponíveis aqui. Faça sua reserva com segurança e conforto, e tenha uma experiência de hospedagem inesquecível nas melhores praias do Brasil.</p>
        </div>
        <a class="carousel-control-prev" href="#praiaCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#praiaCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container extra-content">
        <h3>Sobre Nossas Pousadas</h3>
        <p>Oferecemos pousadas em diversas praias paradisíacas do Brasil, com serviços de alta qualidade e conforto. Nossas acomodações são equipadas com todas as comodidades necessárias para tornar sua estadia inesquecível.</p>

        <h4>Serviços Oferecidos:</h4>
        <ul>
            <li>Café da manhã incluso</li>
            <li>Wi-Fi gratuito</li>
            <li>Piscina</li>
            <li>Serviço de quarto</li>
            <li>Estacionamento gratuito</li>
            <li>Spa e bem-estar</li>
        </ul>
    </div>
</div>

<footer>
    <div class="container">
        <p>&copy; 2024 Reservas de Pousadas. Todos os direitos reservados.</p>
        <p>Contato: contato@reservasdepousadas.com.br | Telefone: (00) 1234-5678</p>
        <p>
            <a href="#">Política de Privacidade</a> | 
            <a href="#">Termos de Uso</a>
        </p>
    </div>
</footer>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
