<?php include("conexao.php"); ?>

<?php

$id=$_GET['id'];

$iduser = $_GET['iduser'];

 echo($iduser); ?><br><?php
 echo($id);


$query = "delete from carrinho where iduser= '{$iduser}' and idproduto='{$id}'";
$resultado = mysqli_query($conexao, $query);
//$carrinho = mysqli_fetch_assoc($resultado);

header("Location: carrinho.php");

?>