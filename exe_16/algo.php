<?php 

/**
 *  Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos
*/

$nome = 'Fulano de Schoereder';
$idade = 32;

if($idade  >= 18) {
    echo "$nome é maior que 18 e tem $idade Anos </br>";
}else{
    echo "$nome não é maior de 18 e tem $idade Anos </br>";
}
?>