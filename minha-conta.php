
<?php include("cabecalho.php");?>



            <div class="caixa-acesso">
                <div>
                    <h4 for="username">Email:</h4>
                    <input id="campo-username" name="username" type="text" placeholder="digite o seu username" class="campo"><br>

                </div>

                <div>

                    <h4 for="senha">Senha:</h4>
                    <input id="campo-senha" type="password" placeholder="digite sua senha" class="campo campo-medio"><br>
                </div>
                <div>
                    <br><button id="acessar" type="button" class="botao-adicionar" onclick="login()">Acessar</button>
                </div>
            </div>






            <?php include("rodape.php");  ?>



        </div>

    </div>

    <script src="js/principal.js"></script>



</body>


</html>