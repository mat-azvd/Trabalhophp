<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>


            <div class="frist-thumb">
                <h1 id="mais-vendidos">Nintendo</h1>
                <hr style="width:50%;">

            </div><br>
            <div class="corpo-produtos">

            <?php
                    $produtos = listaProdutosNintendo($conexao);
                    ?>

                <div class="container">
        
                    <?php foreach($produtos as $produto) :?>

                        
                            <div class="flex-viewport" style="overflow: hidden;position: relative;">

                            <a href="pagina-produto.php?id=<?=  $produto['id'] ?>"><img class="gmae-image" src=<?= $produto['imagem'] ?> alt="game-01"></a>

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
                                        <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                                </div>
                                <?php
                                }
                                ?>
                            </div>


                        
                    <?php endforeach ?>
<!--
                    <div class="container">
                    <div class="flex-viewport" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/StreetFigther-nintendo.jpg" alt="game-01">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Street Figther - Switch</b></p><br>

                            <p>De </p>
                            <p class="preco-antigo">R$250,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$159,99</b></a><br>

                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>


                    </div>



                    <div class="flex-viewport2" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/Zelda-nintendo.jpg" alt="game-02">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>The Legend Of Zelda: <br> Link's Awakening - Switch</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$250,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$239,99</b></a><br>
                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>








                    </div>

                    <div class="flex-viewport" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/nintendosw.jpg" alt="game-04">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Nintendo Switch Lite</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$2.000,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$1.349,99</b></a><br>

                        </div>

                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>


                    </div>

                    <div class="flex-viewport3" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/pokemon-sw.png" alt="game-03">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Pokemon Sword - Switch</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$300,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$250,00</b></a><br>

                        </div>



                    </div>








                    </div>
-->
                </div>
         </div>
        

        <?php include("rodape.php");  ?>



        <script src="js/principal.js"></script>
</body>
</div>


</html>