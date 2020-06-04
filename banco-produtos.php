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

function buscaProduto($conexao){

    $idproduto = $_GET['id'];

    //echo $nomeproduto;

    $query = "select * from produtos where id = '{$idproduto}'";
    $resultado = mysqli_query($conexao, $query);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;

}


?>

