<html lang="pt-br">

<link rel="stylesheet" type="text/css" href="css/slide.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<?php include("cabecalho.php"); ?>

<html>
    <form action="adiciona-produto.php">
        <table class="table">
            <tr>
                <td>Nome</td> 
                <td><input type="text" class="form-control" name="nome" /></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco" /></td>
            </tr>

            <tr>
                <td>Detalhes</td>
                <td><textarea name="detalhes" class="form-control"></textarea>
            </tr>

            <tr>
                <td>Imagem</td>
                <div><input name="imagem" type="file"/></div>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Cadastrar" class="btnbtn-primary" /></td>
            </tr>

            
        </table>
    </form>
</html>

<?php include("rodape.php"); ?>

<script src="js/principal.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</div>


</html>