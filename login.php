<?php include("conexao.php");?> 

<?php //include("logica-usuario.php");?> 

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
    header("Location: minha-conta.php?erro");
    $msg = mysqli_error($conexao);
   } else {
    
    if($usuario["admin"] == 1){

        setcookie("admin_logado", $usuario["email"]);

        header("Location: index.php?adminlogado");

    }else{

        setcookie("usuario_logado", $usuario["email"]);
        setcookie("usuario_id", $usuario["iduser"]);

        header("Location: index.php?usuariologado");
        }
    }
   die();

?>