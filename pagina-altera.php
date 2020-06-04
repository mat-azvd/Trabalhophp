<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>

<?php
$produto = buscaProduto($conexao);
?>

<form method="POST" action="altera-produto.php" enctype="multipart/form-data">
    <h1>Alterar produto</h1>
        <table class="table">
            <tr>
                <td>Nome</td> 
                <td><input type="text" class="form-control" name="nome" value="<?= $produto['nome']?>" /></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco" value="<?= $produto['preco']?>" /></td>
            </tr>

            <tr>   
                <td>Categoria</td>
                <td><select name="categoria"  >
                    <option value="<?php $produto['categoria'] ?>"><?php echo $produto['categoria'] ?></option>
                    <option value="playstation">Playstation</option>
                    <option value="xbox">Xbox</option>
                    <option value="Nintendo">Nintendo</option>
                    <option value="classicos">Classicos</option>
                </td>
            </tr>

            <tr>
                <td>Detalhes</td>
                <td><textarea class="form-control" name="detalhes"><?= $produto['detalhes']?></textarea></td>
            </tr>

            <tr>
                <td>Imagem</td>
                <td> Atual: <?php echo $produto['imagem'] ?> <br><input name="imagem" src="<?= $produto['imagem'] ?>" type="file" id="imagem" /></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Alterar" class="btnbtn-primary" /></td>
            </tr>
           
        </table>
    </form>






<?php include("rodape.php");  ?>