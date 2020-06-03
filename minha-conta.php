
<?php include("cabecalho.php");?>



            <div class="caixa-acesso" >

            <form class="acesso" action="login.php" method="post">
                <tr>
                    <td> Email:</td>
                    <td><input class="form-control" type="email" name="email"></td>

                </tr>

                <tr>

                    <td>Senha</td>
                        <td><input class="form-control" type="password" name="senha"></td>
                     </tr>

                </tr>
                <div>
                    <br><button id="acessar" type="submit" class="botao-adicionar">Acessar</button>
                </div>
                </form>
            </div>






            <?php include("rodape.php");  ?>



        </div>

    </div>





</body>


</html>