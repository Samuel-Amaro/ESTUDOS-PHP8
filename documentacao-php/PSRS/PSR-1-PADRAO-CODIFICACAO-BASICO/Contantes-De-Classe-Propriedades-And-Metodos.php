<?php

/**
 * * CONSTANTES DE CLASSE, PROPRIEDADES E MÉTODOS
 * 
 * O termo "classe" se refere a todas as classes, interfaces e características.
 * 
 * * CONSTANTES
 * 
 * As constantes de classe DEVEM ser declaradas em maiúsculas com separadores de sublinhado. Por exemplo:
*/

//declara um namespace de um nivel superior, com o fornecedor da classe
namespace Vendor\Model;

//declara uma classe
class Foo{
    //constantes da classe
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';
}

/**
 * * PROPRIEDADES
 *  
 * Este guia evita intencionalmente qualquer recomendação sobre o uso de $StudlyCaps, $camelCase ou $under_score nomes de propriedades.
 * 
 * Qualquer convenção de nomenclatura usada DEVE ser aplicada de forma consistente dentro de um escopo razoável. Esse escopo pode ser no nível do fornecedor, no nível do pacote, no nível da classe ou no nível do método.
 * 
 * * METODOS
 * 
 * Os nomes dos métodos DEVEM ser declarados em camelCase().
*/