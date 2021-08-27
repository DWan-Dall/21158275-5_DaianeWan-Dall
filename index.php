<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '';

switch ($pagina) {
    case '':
    case 'inicio':
        $arquivoPagina = 'home.php';
        break;
    case 'quemSomos':
        $arquivoPagina = 'quemSomos.php';
        break;
    case 'contato':
        $arquivoPagina = 'contato.php';
        break;
    case 'localizacao':
        $arquivoPagina = 'localizacao.php';
        break;
    case 'produto':
        $arquivoPagina = 'produto.php';
        break;
    default:
        $arquivoPagina = 'erro.php';
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/cookie.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>The_Cook_Store</title>
    <style>
        .marginal {
            margin-top: 120px;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/21158275-5_DaianeWan-Dall/">
                <img src="images/logo.JPG" style="width: 150px; height: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-4 mb-md-4">
                    <li class="nav-item me-auto">
                        <a class="nav-link <?php echo $arquivoPagina == 'home.php' ? 'active' : ''; ?>" aria-current="page" href="/21158275-5_DaianeWan-Dall/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $arquivoPagina == 'quemSomos.php' ? 'active' : ''; ?>" href="/21158275-5_DaianeWan-Dall/?pagina=quemSomos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $arquivoPagina == 'contato.php' ? 'active' : ''; ?>" href="/21158275-5_DaianeWan-Dall/?pagina=contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $arquivoPagina == 'localizacao.php' ? 'active' : ''; ?>" href="/21158275-5_DaianeWan-Dall/?pagina=localizacao">Localização</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="marginal">
    <div class="container marketing">

        <?php
        require 'pages/' . $arquivoPagina;
        ?>

        <hr class="featurette-divider">
    </div>

    <!-- FOOTER -->
    <footer class="container">
        <p class="text-center">&copy; 2021 - Daiane Wan-Dall Splitter da Silva - RA: 21158275-5</p>
    </footer>
</main>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>