<?php include("cabecalho.php"); ?>

<html>
    <form action="insereprodutos.php">
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
                <td><input name="imagem" type="file"/></td>
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