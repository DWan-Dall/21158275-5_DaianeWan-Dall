<?php

require 'dados/produtos.php';

$id = $_GET['id'];
?>

<h1><?php echo $produtos[$id]['nome']; ?></h1>
<div class="row featurette">
    <div class="col-md-7">
        <p class="lead">Ingredientes: <?php echo $produtos[$id]['ingredientes']; ?></p>
    </div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <p class="lead"><?php echo $produtos[$id]['descricao']; ?></p>
        <p class="lead">Valor: R$ <?php echo number_format($produtos[$id]['preco'], 2, ',', ''); ?></p>
    </div>
    <div class="col-md-5 order-md-1">
        <img src="<?php echo $produtos[$id]['imagem']; ?>" width="100%" height="100%" class="img-thumbnail shadow">
    </div>
</div>

</div>