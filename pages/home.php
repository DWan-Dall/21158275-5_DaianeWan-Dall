<?php
require 'dados/produtos.php';
?>
<div class="row">
    <?php
    foreach ($produtos as $id => $produto) {
        ?>
        <div class="col-lg-3 text-center">
            <img src="<?php echo $produto['imagem']; ?>" class="img-thumbnail bd-placeholder-img rounded-circle shadow" width="200" height="200"/>
            <h5><?php echo $produto['nome']; ?></h5>

            <p><a class="btn btn-secondary btn-sm" href="/21158275-5_DaianeWan-Dall/?pagina=produto&id=<?php echo $id; ?>">Mais detalhes &raquo;</a></p>
        </div>
        <?php
    }
    ?>

</div>
