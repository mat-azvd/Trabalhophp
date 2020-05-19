

<?php include("cabecalho.php");?>


            <form class="cadastro">
                <div id="grupo">
                    <label for="username">Username:</label>
                    <input id="username" name="username" type="text" placeholder="digite o seu username" class="campo">
                </div>
                <div id="grupo">
                    <label for="senha">Senha:</label>
                    <input id="senha" name="senha" type="password" placeholder="digite sua senha" class="campo campo-medio">
                </div>
                <div id="grupo">
                    <label for="senha2">Repita sua Senha:</label>
                    <input id="senha2" name="senha2" type="password" placeholder="Repita sua senha" class="campo campo-medio">
                </div>
                <div id="grupo">
                    <label for="email">email:</label>
                    <input id="email" name="email" type="email" placeholder="digite o seu email" class="campo">
                </div>
                <div id="grupo">
                    <label for="1nome">Primeiro nome:</label>
                    <input id="primeironome" name="primeironome" type="text" placeholder="digite o seu primeiro nome" class="campo">
                </div>
                <div id="grupo">
                    <label for="sobrenome">Sobrenome:</label>
                    <input id="sobrenome" name="sobrenome" type="text" placeholder="digite o seu Sobrenome" class="campo">
                </div>
                <div id="grupo">
                    <label for="telefone">Telefone:</label>
                    <input id="telefone" name="telefone" type="number" placeholder="digite o seu Telefone" class="campo">
                </div>


                <button id="cadastrar" type="button" class="botao-adicionar" onclick="validaform()">Cadastrar</button>
            </form>






            <?php include("rodape.php");  ?>




        </div>

    </div>



    <script src="js/principal.js"></script>
</body>


</html>