<?php

/**
 * Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raio Circulo</title>
</head>
<body>
    
    <h1>Raio de Circulo e Perimetro</h1>

    <form action="action.php" method="post">
        <label for="raio">Raio do Circulo:</label>
        <input type="number" id="raio" name="raiocirculo"/>
        <input type="submit" id="sub" value="Calcular!"/>
    </form>

    
</body>
</html>