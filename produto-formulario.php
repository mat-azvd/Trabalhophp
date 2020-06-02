<?php include("cabecalho.php"); ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto adicionado com sucesso.</p>
  
<?php } ?>

<html>
    <form method="POST" action="insereprodutos.php" enctype="multipart/form-data">
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
                <td>Categoria</td>
                <td><select name="categoria" >
                    <option value="playstation">Playstation</option>
                    <option value="xbox">Xbox</option>
                    <option value="Nintendo">Nintendo</option>
                    <option value="classicos">Classicos</option>
                </td>
            </tr>

            <tr>
                <td>Detalhes</td>
                <td><textarea name="detalhes" class="form-control"></textarea>
            </tr>

            <tr>
                <td>Imagem</td>
                <td><input name="imagem" type="file" id="imagem" /></td>
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