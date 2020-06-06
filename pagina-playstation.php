<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>


            <div class="frist-thumb">
                <h1 id="mais-vendidos">Playstation</h1>
                <hr style="width:50%;">

            </div><br>

            <div class="corpo-produtos">

                <?php
                    $produtos = listaProdutosPlaystation($conexao);
                    ?>

                <div class="container">
        
                    <?php foreach($produtos as $produto) :?>

                        
                        <div class="flex-viewport" style="overflow: hidden;position: relative;">

                            <a href="pagina-produto.php?id=<?=  $produto['id'] ?>"> <img class="gmae-image" src=<?= $produto['imagem'] ?> alt="game-01"></a>

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
                                    if (isset($_COOKIE['usuario_logado'])){
                                        ?>
                                        <div class="comprar">
                                            <a href="carrinho.php?id=<?=  $produto['id'] ?>"> <button><img src="img/carrinhoDeCompras.png">Comprar </button><br></a>
                                        </div>
                                <?php
                                    } else {
                                ?>

                                <div class="comprar">
                                    <a href="carrinho.php?id=<?=  $produto['id'] ?>"> <button><img src="img/carrinhoDeCompras.png">Comprar </button><br></a>
                                </div>
                                <?php
                                }
                                }
                                ?>
                                
                        </div>


                        
                    <?php endforeach ?>
                </div>
                
            </div>
        </div>
       

        <?php include("rodape.php");  ?>



    <script src="js/principal.js"></script>
</body>
</div>


</html>