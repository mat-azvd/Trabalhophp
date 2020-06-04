<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>


            <div class="frist-thumb">
                <h1 id="mais-vendidos">Classicos</h1>
                <hr style="width:50%;">

            </div><br>
            <div class="corpo-produtos">

                <?php
                        $produtos = listaProdutosClassicos($conexao);
                        ?>

                    <div class="container">
        
                    <?php foreach($produtos as $produto) :?>

                        
                            <div class="flex-viewport" style="overflow: hidden;position: relative;">

                            <a href="pagina-produto.php?nome=<?=  $produto['nome'] ?>"><img class="gmae-image" src=<?= $produto['imagem'] ?> alt="game-01"></a>

                                <div class="info-do-produto">
                                    <p class="nome-produto"><b><?= $produto['nome'] ?><br></b></p><br>

                                    <p class="preço"><b>R$<?= $produto['preco'] ?></b></a><br>

                                </div>
                                <div class="comprar">
                                    <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                                </div>
                            </div>


                        
                    <?php endforeach ?>
<!--
                <div class="container">
                    <div class="flex-viewport" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/snes.jpg" alt="game-01">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Super Nintendo Mini</b></p><br>

                            <p>De </p>
                            <p class="preco-antigo">R$850,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$459,99</b></a><br>

                                </div>
                                <div class="comprar">
                                    <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                                </div>

                        
                    </div>



                    <div class="flex-viewport2" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/mastersys.jpg" alt="game-02">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Master System Mini</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$650,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$339,99</b></a><br>
                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>





                   


                    </div>

                    <div class="flex-viewport" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/supermarios.jpg" alt="game-04">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Fita Super Mario Wolrd</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$500,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$349,99</b></a><br>

                        </div>

                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>


                    </div>

                    <div class="flex-viewport3" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/atari.jpg" alt="game-03">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Atari flashback 8</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$300,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$250,00</b></a><br>

                        </div>

                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
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