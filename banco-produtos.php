<?php

    function listaProdutos($conexao) {

        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos");

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
    return $produtos;
    }

    

?>

<?php

    function listaProdutosPlaystation($conexao) {

        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos where categoria = 'playstation'");

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
    return $produtos;
    }

?>

<?php

    function listaProdutosXbox($conexao) {

        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos where categoria = 'Xbox'");

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
    return $produtos;
    }

?>

<?php

    function listaProdutosNintendo($conexao) {

        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos where categoria = 'nintendo'");

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
    return $produtos;
    }

?>

<?php

    function listaProdutosClassicos($conexao) {

        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos where categoria = 'classicos'");

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
    return $produtos;
    }

?>

<?php

    function listaProdutosDestaques($conexao) {

        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos where destaque = 1");

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
    return $produtos;
    }

?>

<?php

function removeProduto($conexao, $id) {

 $query = "delete from produtos where id = {$id}";
 return mysqli_query($conexao, $query);
 
}

?>



<?php

function buscaProduto($conexao, $id){

    $idproduto = $id;

    //echo $nomeproduto;

    $query = "select * from produtos where id = '{$idproduto}'";
    $resultado = mysqli_query($conexao, $query);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;

}


?>

<?php

//function carrinhoQuantidade($conexao, )

function listaProdutoCarrinho($conexao, $iduser) {

        $carrinhos = array();
        $resultado = mysqli_query($conexao, "select * from carrinho where iduser = '{$iduser}'");

        while($carrinho = mysqli_fetch_assoc($resultado)) {
            array_push($carrinhos, $carrinho);
        }
    return $carrinhos;
    }

    /*$querycarrinho = 
    $resultado = mysqli_query($conexao, $querycarrinho);
    $carrinho = mysqli_fetch_assoc($resultado);
    return $carrinho;
    */

function addProdutoCarrinho($conexao, $iduser, $idproduto){
 
    $querycarrinho = "select * from carrinho where iduser = '{$iduser}' and idproduto = '{$idproduto}'";
    $resultado = mysqli_query($conexao, $querycarrinho);
    $carrinho = mysqli_fetch_assoc($resultado);

    if($carrinho!=null) {
        $carrinho['quantidade'] += 1;
        $novaquantidade = $carrinho['quantidade'];
        $query = "update carrinho set quantidade='{$novaquantidade}' where iduser='$iduser' and idproduto='$idproduto'";
        $resultado = mysqli_query($conexao, $query);
        //$carrinho = mysqli_fetch_assoc($resultado);
        return $carrinho;

    } else {

        $query = "insert into carrinho (iduser, idproduto, quantidade) values ('{$iduser}','{$idproduto}', '1')";
        $resultado = mysqli_query($conexao, $query);
        //$carrinho = mysqli_fetch_assoc($resultado);
        return $carrinho;

    }

}

?>

