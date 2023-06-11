<?php

/**
 * * PDOSTATEMENT::FETCH(BUSCAR)
 * 
 *  PDOStatement::fetch - Busca a próxima linha de um conjunto de resultados
 * 
 * * DESCRIÇÃO
 
    public PDOStatement::fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0): mixed

 * 
 * Busca uma linha de um conjunto de resultados associado a um objeto PDOStatement. O mode parâmetro determina como PDO retorna a linha.
 * 
 * * PARÂMETROS
 * 
 * mode(MODO): Controla como a próxima linha será retornada ao chamador. Este valor deve ser uma das PDO::FETCH_*constantes, assumindo o valor PDO::ATTR_DEFAULT_FETCH_MODE padrão de (o padrão é PDO::FETCH_BOTH).
 
    - PDO::FETCH_ASSOC: retorna uma array indexada pelo nome da coluna conforme retornado em seu conjunto de resultados

    - PDO::FETCH_BOTH (padrão): retorna uma array indexada pelo nome da coluna e número da coluna indexada 0 conforme retornado em seu conjunto de resultados

    - PDO::FETCH_BOUND: Retorna true e atribui os valores das colunas no conjunto de resultados para as variáveis PHP para o qual foram ligados com o PDOStatement::bindColumn() método

    - PDO::FETCH_CLASS: retorna uma nova instância da classe solicitada, mapeando as colunas do conjunto de resultados para propriedades nomeadas na classe e chamando o construtor depois, a menos que PDO::FETCH_PROPS_LATE também seja fornecido. Se mode inclui PDO::FETCH_CLASSTYPE (por exemplo PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE), o nome da classe é determinado a partir de um valor da primeira coluna.

    - PDO::FETCH_INTO: atualiza uma instância existente da classe solicitada, mapeando as colunas do conjunto de resultados para propriedades nomeadas na classe

    - PDO::FETCH_LAZY: combina PDO::FETCH_BOTH e PDO::FETCH_OBJ, criando os nomes das variáveis ​​do objeto à medida que são acessados

    PDO::FETCH_NAMED: retorna uma array com a mesma forma que PDO::FETCH_ASSOC, exceto que se houver várias colunas com o mesmo nome, o valor referido por essa chave será uma array de todos os valores na linha que tinha aquele nome de coluna

    - PDO::FETCH_NUM: retorna uma array indexada pelo número da coluna conforme retornado em seu conjunto de resultados, começando na coluna 0

    - PDO::FETCH_OBJ: retorna um objeto anônimo com nomes de propriedades que correspondem aos nomes das colunas retornados em seu conjunto de resultados

    - PDO::FETCH_PROPS_LATE: quando usado com PDO::FETCH_CLASS, o construtor da classe é chamado antes que as propriedades sejam atribuídas a partir dos respectivos valores da coluna.

 *
 * cursorOrientation(Orientação cursor): Para um objeto PDOStatement que representa um cursor de rolagem, este valor determina qual linha será retornada ao chamador. Este valor deve ser uma das PDO::FETCH_ORI_* constantes, assumindo como padrão PDO::FETCH_ORI_NEXT. Para solicitar um cursor rolável para seu objeto PDOStatement, você deve definir o PDO::ATTR_CURSOR atributo para PDO::CURSOR_SCROLL quando preparar a instrução SQL com PDO :: prepare().
 * 
 * offset(deslocamento): Para um objeto PDOStatement que representa um cursor rolável para o qual o cursor_orientation parâmetro é definido PDO::FETCH_ORI_ABS, este valor especifica o número absoluto da linha no conjunto de resultados que deve ser buscado. Para um objeto PDOStatement que representa um cursor rolável para o qual o cursor_orientation parâmetro é definido PDO::FETCH_ORI_REL, este valor especifica a linha a ser buscada em relação à posição do cursor antes de PDOStatement::fetch() ser chamado.
 * 
 * * VALOR RETORNADO:
 * 
 * O valor de retorno desta função em caso de sucesso depende do tipo de busca. Em todos os casos, false é devolvido em caso de falha.
*/

?>