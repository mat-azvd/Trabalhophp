<?php include('conexao.php');?>

<?php include('banco-produtos.php')?>


<?php

$produto = buscaProduto($conexao);

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$detalhes = $_POST["detalhes"];
$imagem = $_FILES['imagem']['name'];
$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
$pasta_dir = "imagem/";
$arquivo_nome = $imagem;

move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta_dir.$arquivo_nome);

$diretorio = $pasta_dir.$arquivo_nome;

function alteraProduto($conexao, $nome, $preco, $categoria, $detalhes, $diretorio) {
 $query = "update produtos set nome = '{$nome}', preco = {$preco}, categoria = '{$categoria}', detalhes = '{$detalhes}', diretorio = '{$diretorio}' where id = '{$id}'";
 $resultadoDaInsercao = mysqli_query($conexao, $query);
 return $resultadoDaInsercao;
}



/*if(alteraProduto($conexao, $nome, $preco, $categoria, $detalhes, $diretorio, )) {

header("Location: pagina-produto.php?id=<?=  $produto['id'] ?>");

die();
?>
<?php
} else {
$msg = mysqli_error($conexao);
?>
<p class="alert-danger">O produto <?= $nome; ?> não foi adicionado: <?=$msg ?></p>
<?php
}
mysqli_close($conexao);
?>
*/