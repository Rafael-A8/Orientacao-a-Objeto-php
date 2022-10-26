<?php 


try {
    echo '<h3> *** Try *** </h3>';

    $sql = 'select * from clientes';
    // mysql_querry($sql); //erro
    if(!file_exists('require_arquivo_a.php')) {
        throw new Exception('O arquivo em questão deveria estar ');
    }

} catch (Error $e) {
    echo '<h3> *** Catch Error *** </h3>';
    echo '<p style="color: red">' . $e . '</p>';
    //armazenando esse erro em banco de dados

} catch (Exception $e) {
    echo '<h3> *** Catch Exception *** </h3>';
    echo '<p style="color: red">' . $e . '</p>';
    //armazenando esse erro em banco de dados


 } finally {
    echo '<h3> *** Finally *** </h3>';
}

// /*
// //outra lógica
// try {
//     //aqui tenha uma  outra lógica, onde possa ocorrer um potencial erro(exceção)
// }
// */
