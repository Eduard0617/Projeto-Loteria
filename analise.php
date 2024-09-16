<?php
    $nome = $_POST["nome"];
    echo "<body>";
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    echo "<a class='analise'>Bem vindo $nome, escolha 25 valores para começar:</a><br>";
    echo "<form action='resultado.php' method='post'>";
    $opcao = 1;
    echo "<div class='check'>";
    while ($opcao <= 50) {
        $opcao_formatado = str_pad($opcao, 2, "0", STR_PAD_LEFT);
        
        if ($opcao % 10 == 1) {
            echo "<br>";    
        }

        $mula = "<label><input type='checkbox' name='check[]' value='$opcao_formatado'>$opcao_formatado</label>";
        echo $mula;
        $opcao += 1;
    }
    echo "<br><button type='submit'>Resultado</button> ";
    echo "<input type='number' name='aposta' placeholder='qual o valor da aposta?' required ></input>";
    echo "</div>";
    echo "</body>";
    echo "</form>";
?>
