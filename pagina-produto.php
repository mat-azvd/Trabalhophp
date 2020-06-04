<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>


<?php $produto = buscaProduto($conexao);?>

<div class="flex-viewport" style="overflow: hidden; position: relative;">

        <img class="gmae-image" src=<?= $produto['imagem'] ?> alt="game-01">

                <div class="info-do-produto">
                        <p class="nome-produto"><b><?= $produto['nome'] ?><br></b></p><br>

                        <p class="preço"><b>R$<?= $produto['preco'] ?></b></a><br>

                </div>
                        <div class="comprar">
                        <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>
    </div>

<?php include("rodape.php");  ?>