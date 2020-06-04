<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>

<?php include("logica-usuario.php");?>

<?php $usuario = buscaUsuario($conexao, $email); ?>

<form class="cadastro" method="POST" action="altera-usuario.php">
                <!--<div id="grupo">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="email" placeholder="digite o seu email" class="campo">
                </div>-->
                <div id="grupo">
                    <label for="senha">Nova Senha:</label>
                    <input id="senha" name="senha" type="password" placeholder="digite sua senha" class="campo campo-medio">
                </div>
                <div id="grupo">
                    <label for="senha2">Repita sua Senha:</label>
                    <input id="senha2" name="senha2" type="password" placeholder="Repita sua senha" class="campo campo-medio">
                </div>
                
                <div id="grupo">
                    <label for="primeironome">Primeiro nome:</label>
                    <input id="primeironome" name="primeironome" type="text" value="<?= $usuario['primeironome']?>" placeholder="digite o seu primeiro nome" class="campo">
                </div>
                <div id="grupo">
                    <label for="sobrenome">Sobrenome:</label>
                    <input id="sobrenome" name="sobrenome" type="text" value="<?= $usuario['sobrenome']?>" placeholder="digite o seu Sobrenome" class="campo">
                </div>
                <div id="grupo">
                    <label for="telefone">Telefone:</label>
                    <input id="telefone" name="telefone" type="number" value="<?= $usuario['telefone']?>" placeholder="digite o seu Telefone" class="campo">
                </div>


                <button id="cadastrar" type="submit" class="botao-adicionar" >Alterar</button>
                <button id="cadastrar"  type="reset" class="botao-adicionar" >Cancelar</button>

            </form>




<?php include("rodape.php");  ?>