<?php

/**
 * * TRANSAÇÕES E AUTO-COMMIT
 * 
 *  Agora que você está conectado via PDO, você deve entender como o PDO gerencia as transações antes de começar a fazer consultas. Se você nunca encontrou transações antes, elas oferecem 4 recursos principais: Atomicidade, Consistência, Isolamento e Durabilidade (ACID). Em termos leigos, qualquer trabalho realizado em uma transação, mesmo que em etapas, tem a garantia de ser aplicado ao banco de dados de forma segura e sem a interferência de outras conexões, quando for confirmado. O trabalho transacional também pode ser desfeito automaticamente a seu pedido (desde que você ainda não o tenha confirmado), o que torna mais fácil o tratamento de erros em seus scripts.
 * 
 * Normalmente, as transações são implementadas "economizando" seu lote de alterações a serem aplicadas de uma só vez; isso tem o bom efeito colateral de melhorar drasticamente a eficiência dessas atualizações. Em outras palavras, as transações podem tornar seus scripts mais rápidos e potencialmente mais robustos (você ainda precisa usá-los corretamente para colher esse benefício).
 * 
 * Infelizmente, nem todo banco de dados suporta transações, então o PDO precisa ser executado no que é conhecido como modo "auto-commit" quando você abre a conexão pela primeira vez. O modo de confirmação automática significa que cada consulta executada tem sua própria transação implícita, se o banco de dados oferecer suporte, ou nenhuma transação, se o banco de dados não oferecer suporte a transações. Se você precisar de uma transação, deve usar o método PDO :: beginTransaction () para iniciá-la. Se o driver subjacente não suportar transações, uma PDOException será lançada (independentemente das configurações de tratamento de erros: esta é sempre uma condição de erro grave). Assim que estiver em uma transação, você pode usar PDO::commit() ou PDO::rollBack() para finalizá-lo, dependendo do sucesso do código executado durante a transação.
 * 
 * Aviso O PDO verifica apenas os recursos de transação no nível do driver. Se certas condições de tempo de execução significam que as transações estão indisponíveis, PDO::beginTransaction() ainda retornará true sem erros se o servidor de banco de dados aceitar a solicitação para iniciar uma transação.
 * 
 * Um exemplo disso seria tentar usar transações em tabelas MyISAM em um banco de dados MySQL.
 * 
 * Quando o script termina ou quando uma conexão está prestes a ser fechada, se você tiver uma transação pendente, o PDO a reverterá automaticamente. Esta é uma medida de segurança para ajudar a evitar inconsistência nos casos em que o script termina inesperadamente - se você não confirmou explicitamente a transação, presume-se que algo deu errado, então a reversão é realizada para a segurança de seus dados.
 * 
 * A reversão automática só acontece se você iniciar a transação via PDO::beginTransaction() . Se você emitir manualmente uma consulta que inicia uma transação, o PDO não tem como saber sobre isso e, portanto, não pode revertê-la se algo de ruim acontecer.
*/

?>