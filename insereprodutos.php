<?php include("cabecalho.php"); ?>



<?php include("rodape.php"); ?>


<?php

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$detalhes = $_GET['detalhes'];
$imagem = $_GET['imagem'] ['tmp_name'];
$tamanho_imagem = $_FILES['imagem']['size'];
$tipo_imagem = $_FILES['imagem']['type'];
$nome_imagem = $_FILES['imagem']['name'];


function insereProduto($conexao, $nome, $preco, $detalhes, $imagem, $nome_imagem, $tamanho_imagem, $tipo_imagem){
    $query = "insert into produtos (nome, preco, detalhes, imagem, nome_imagem, tamanho_imagem, tipo_imagem) values ('{$nome}','{$preco}','{$detalhes}', '{$imagem}', '{$nome_imagem}','{$tamanho_imagem}','{$tipo_imagem}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
   }
   


if(insereProduto($conexao, $nome, $preco, $detalhes, $imagem, $nome_imagem, $tamanho_imagem, $tipo_imagem)) {
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