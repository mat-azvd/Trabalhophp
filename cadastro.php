

<html lang="pt-br">

<link rel="stylesheet" type="text/css" href="css/slide.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

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






            <footer class="rodape">

                <img class="redes" src="img/036-facebook.png">
                <a class="rede-endereço">facebook.com/RobotGames</a><br>
                <img class="redes" src="img/029-instagram.png">
                <a class="rede-endereço">@RobotGames</a><br>
                <img class="redes" src="img/008-twitter.png">
                <a class="rede-endereço">@LojaRobotGames</a><br>
                <img class="redes" src="img/005-whatsapp.png">
                <a class="rede-endereço">(71) 9 9185-5338</a><br> &Copf; Robot Games


            </footer>




        </div>

    </div>



    <script src="js/principal.js"></script>
</body>


</html>