<?php

//EXEMPLO #2 page2.php

/**
 * Após acessar page1.php, a segunda página page2.php magicamente terá os dados da seção. 
*/

//obtem o resumo da seção ativa, ou inicia uma nova seção
if(session_start()) {
    echo 'Bem vindo à página #2 </br>';
    //mostrando informações do usuario que esta navegando, essas informações estão setadas na seção, por meio da variavel global session, recupera as informações do usuario por meio da seção
    echo $_SESSION['favcolor'] . "</br>"; //green
    echo $_SESSION['animal'] . "</br>"; //cat
    echo date('d/m/Y:H:i:s', $_SESSION['time']);
    //Você pode querer usar o SID aqui, como fizemos em page1.php
    //Funciona se o cookie de seção foi aceito
    echo '<br/><a href="Exemplo3.php">page 1</a>';
}else{
    echo "Sessão não iniciada, falha! </br>";
}
?>