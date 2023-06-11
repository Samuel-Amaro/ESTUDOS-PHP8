<?php

/**
 * * A EXTENSÃO DO FILTRO PHP
 * 
 *  Filtros PHP são usados ​​para validar e higienizar a entrada externa.
 * 
 * A extensão do filtro PHP tem muitas das funções necessárias para verificar a entrada do usuário e é projetada para tornar a validação de dados mais fácil e rápida.
 * 
 * A filter_list() função pode ser usada para listar o que a extensão do filtro PHP oferece:
*/

# filter_list(): array -> Retorna a lista de todos filtros suportados
# Valor Retornado: Retorna um array dos nomes de todos filtros suportados, um array vazio se não há filtros. Índices deste array não são IDs de filtros, eles podem ser obtidos com filter_id() a partir do nome.

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extensão do filtro PHP</title>
    <style>
        table, th, td{
            border-top: 1px;
            border-right: 1px;
            border-bottom: 1px;
            border-left: 1px;
            border-color: black;
            border-style: solid;
            border-collapse: collapse;
        }
        th, td{
            padding-top: 5px;
            padding-right: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nome Filtro</td>
            <td>ID Filtro</td>
        </tr>
        <?php 
            foreach(filter_list() as $id => $filter) {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
        ?>
    </table>
</body>
</html>