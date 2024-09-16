<?php
    header("Refresh: 10; url=index.php ");
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";

    $escolhidos = $_POST['check'];
    $aposta = $_POST['aposta'];

    $numeros = range(1, 50);
    shuffle($numeros);
    $numeros = array_slice($numeros, 0, 25);

    sort($numeros);
    
    echo "<div class='resultado'>";
    foreach ($numeros as &$numero) {
        $numero = str_pad($numero, 2, '0', STR_PAD_LEFT);
    }
    unset($numero);    

    $numerosEmComum = array_intersect($numeros, $escolhidos);

    echo "<p class='numeros'>Números gerados: " . implode(', ', $numeros) . "<br>";
    echo "<p class='numeros'>Valores escolhidos: " . implode(', ', $escolhidos) . "<br>";
    echo "<p class='numeros'>Números em comum: " . implode(', ', $numerosEmComum);

    if (count($numerosEmComum) === 25 || count($numerosEmComum) === 0 ){
        echo "<br><a class='ganhou'> PARABÉNS, VOCÊ GANHOU!!! </a>";
        $aposta = 50 * $aposta;
    }
    else {
        echo "<br><a class='perdeu'> Você perdeu q-q) , tente novamente! </a>";
        $aposta = 0;
    }
    echo "<br> <p class='numeros'>O seu resultado final:</p> " . "<p class='aposta'>" . $aposta . "</p>";
    echo "</div>";
?>
