<?php include("conexao.php");?> 

<?php

$email = $_POST["email"];
$senha = $_POST["senha"];


function buscaUsuario($conexao, $email, $senha) {
 //$senhaMd5 = md5($senha);
 $query = "select * from usuarios where email='{$email}' and
senha='{$senha}'";
 $resultado = mysqli_query($conexao, $query);
 $usuario = mysqli_fetch_assoc($resultado);
 return $usuario;
}

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
echo $usuario;

if($usuario == null) {
    $msg = mysqli_error($conexao);
   } else {
    header("Location: index.php?logado");
   }
   die();

?>