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

function removeProduto($conexao, $id) {

 $query = "delete from produtos where id = {$id}";
 return mysqli_query($conexao, $query);
 
}

?>

