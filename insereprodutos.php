<?php include("cabecalho.php"); ?>



<?php include("rodape.php"); ?>

<?php include("conexao.php");?>

<?php

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


function insereProduto($conexao, $nome, $preco, $categoria, $detalhes, $arquivo_nome){
    $query = "insert into produtos (nome, preco, categoria, detalhes, imagem) values ('{$nome}','{$preco}','{$categoria}','{$detalhes}','{$diretorio}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
   }
   


if(insereProduto($conexao, $nome, $preco, $categoria, $detalhes, $arquivo_nome, )) {

    header("Location: produto-formulario.php?removido=true");
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