<?php include("cabecalho.php"); ?>



<?php include("rodape.php"); ?>

<?php include("conexao.php");?>

<?php

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$detalhes = $_POST["detalhes"];
$imagem = $_FILES['imagem']['name'];
$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
$pasta_dir = "imagem/";
$arquivo_nome = $imagem;

move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta_dir.$arquivo_nome);


function insereProduto($conexao, $nome, $preco, $detalhes, $arquivo_nome){
    $query = "insert into produtos (nome, preco, detalhes, imagem) values ('{$nome}','{$preco}','{$detalhes}','{$arquivo_nome}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
   }
   


if(insereProduto($conexao, $nome, $preco, $detalhes, $arquivo_nome, )) {
?>
<p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?>, <?= $detalhes; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O produto <?= $nome; ?> não foi adicionado: <?=$msg ?></p>
<?php
}
mysqli_close($conexao);
?>