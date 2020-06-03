<?php include("conexao.php");?>

<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
$primeironome = $_POST["primeironome"];
$sobrenome = $_POST["sobrenome"];
$telefone = $_POST["telefone"];


function insereUsuario($conexao, $email, $senha, $primeironome, $sobrenome, $telefone){
    $query = "insert into usuarios(email, senha, primeironome, sobrenome, telefone) values ('{$email}','{$senha}','{$primeironome}','{$sobrenome}','{$telefone}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
   }
   


if(insereUsuario($conexao, $email, $senha, $primeironome, $sobrenome, $telefone)) {
    
    header("Location: minha-conta.php?removido=true");
    die();
?>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O usuario <?= $primeironome; ?> não foi adicionado: <?=$msg ?></p>
<?php
}
mysqli_close($conexao);
?>
