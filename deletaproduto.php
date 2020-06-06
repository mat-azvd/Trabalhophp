<?php include("conexao.php"); ?>

<?php

$id=$_GET['id'];

echo($id);


$query = "delete from produtos where id='{$id}'";
$resultado = mysqli_query($conexao, $query);
//$carrinho = mysqli_fetch_assoc($resultado);

header("Location: index.php?deletado=$id");

?>