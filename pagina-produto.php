<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>

<?php $id= $_GET['id'] ?>

<?php $produto = buscaProduto($conexao, $id);?>

<div class="flex-viewport2" style="overflow: hidden; position: relative;">

        <img class="gmae-image" src=<?= $produto['imagem'] ?> alt="game-01">

                <div class="info-do-produto">
                        <p class="nome-produto"><b><?= $produto['nome'] ?><br></b></p><br>

                        <p class="preço"><b>R$<?= $produto['preco'] ?></b></a><br>

                </div>
                <?php
                                if(isset($_COOKIE["admin_logado"])) {
                                ?>
                                <div class="comprar">
                                <a href="pagina-altera.php?id=<?=  $produto['id'] ?>"><button>Editar </button><br>
                                </div>
                                <?php
                                }else {
                                ?>

                                <div class="comprar">
                                <a href="carrinho.php?id=<?=  $produto['id'] ?>"> <button><img src="img/carrinhoDeCompras.png">Comprar </button><br></a>
                                </div>
                                <?php
                                }
                                ?>
    </div>

<?php include("rodape.php");  ?>