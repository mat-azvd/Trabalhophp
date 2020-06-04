
<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>


            <div class="frist-thumb">
                <h1 id="mais-vendidos">Xbox</h1>
                <hr style="width:50%;">

            </div><br>
            <div class="corpo-produtos">

            <?php
                    $produtos = listaProdutosXbox($conexao);
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

                        <img class="gmae-image" src="img/AssassinsCreed.jpg" alt="game-01">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Asssaain's Creed Revelations - Xbox One</b></p><br>

                            <p>De </p>
                            <p class="preco-antigo">R$250,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$79,99</b></a><br>

                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>


                    </div>



                    <div class="flex-viewport2" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/resdent2.jpg" alt="game-02">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Residente Evil 2-Remake <br> - Xbox One</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$250,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$79,99</b></a><br>
                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>





                    </div>
                    <div class="flex-viewport" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/xboxEliteControler.jpg" alt="game-04">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Controle Xbox One <br> Elite Series 2 Wireless</b></p><br>

                            <p class="preco-parcelado">9x R$299,66</p><br>
                            <p>No Boleto:</p><br>
                            <p class="preço"><b>R$2.427,00</b></a><br>
                        </div>

                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>


                    </div>

                    <div class="flex-viewport4" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/fifa20.jpg" alt="game-04">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Fifa 20 - Xbox One</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$250,00</p><br>
                            <p>Por:</p>

                            <p class="preço"><b>R$220,00</b></a><br>

                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>


                    </div>
                    <div class="flex-viewport" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/xboxone.jpg" alt="game-04">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Xbox One S</b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$2.000,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$1.899,99</b></a><br>


                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>



                    </div>
                    <div class="flex-viewport" style="overflow: hidden;position: relative;">

                        <img class="gmae-image" src="img/ori.jpg" alt="game-04">

                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Ori And The Blind Forest <br> - Xbox One </b></p><br>

                            <p>De </p>
                            <p class="preco-antigo">R$250,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$80,00</b></a><br>
                        </div>
                        <div class="comprar">
                            <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                        </div>


                    </div>
                    <div class="flex-viewport" style="overflow: hidden;position: relative;">
                        <div class="imagem-produto">

                            <img class="gmae-image" src="img/Gta5-xbox.jpg" alt="game-04">
                        </div>
                        <div class="info-do-produto">
                            <p class="nome-produto"><b>Grand Theft Auto V <br> - Xbox One </b></p><br>
                            <p>De </p>
                            <p class="preco-antigo">R$250,00</p><br>
                            <p>Por:</p>
                            <p class="preço"><b>R$142,00</b></a><br>
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