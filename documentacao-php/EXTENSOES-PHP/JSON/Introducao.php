<?php

/**
 * * INTRODUÇÃO 
 * 
 *  Esta extensão implementa o formato de troca de dados » JavaScript Object Notation (JSON). A decodificação é feita por um parser baseado no JSON_checker de Douglas Crockford.
 * 
 * Nota: O PHP implementa uma extensção do JSON, além do especificado no » RFC 4627 - podendo também codificar e decodificar tipos escalares e null. RFC 4627 apenas suporta esses valores quando eles estão inseridos dentro de um objeto ou array. Embora isso seja consistente com a definição expandida de "texto JSON" na nova » RFC 7159 (que pretende susceder RFC 4627) e ECMA-404, isto pode causar problemas de interoperabilidade com parsers JSON antigos que aderem estritamente a RFC 4627 quando decodificando um valor escalar.
 * 
 * JSON (JavaScript Object Notation - Notação de Objetos JavaScript) é uma formatação leve de troca de dados. Para seres humanos, é fácil de ler e escrever. Para máquinas, é fácil de interpretar e gerar. Está baseado em um subconjunto da linguagem de programação JavaScript, Standard ECMA-262 3a Edição -Dezembro - 1999. JSON é em formato texto e completamente independente de linguagem, pois usa convenções que são familiares às linguagens C e familiares, incluindo C++, C#, Java, JavaScript, Perl, Python e muitas outras. Estas propriedades fazem com que JSON seja um formato ideal de troca de dados.
 * 
 * JSON está constituído em duas estruturas:
 
  - Uma coleção de pares nome/valor. Em várias linguagens, isto é caracterizado como um object, record, struct, dicionário, hash table, keyed list, ou arrays associativas.

  - Uma lista ordenada de valores. Na maioria das linguagens, isto é caracterizado como uma array, vetor, lista ou sequência.

 * Estas são estruturas de dados universais. Virtualmente todas as linguagens de programação modernas as suportam, de uma forma ou de outra. É aceitavel que um formato de troca de dados que seja independente de linguagem de programação se baseie nestas estruturas.
 * 
 * Em JSON, os dados são apresentados desta forma:
 
  - Um objeto é um conjunto desordenado de pares nome/valor. Um objeto começa com {chave de abertura e termina com }chave de fechamento. Cada nome é seguido por :dois pontos e os pares nome/valor são seguidos por ,vírgula.

 - 

  {
     "version" : 1.0,
     "nome" : sistema..... 
  }
*/


?>