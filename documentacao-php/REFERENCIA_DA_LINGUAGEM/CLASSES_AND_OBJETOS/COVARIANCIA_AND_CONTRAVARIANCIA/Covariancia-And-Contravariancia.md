# Covariância e Contravariância

No PHP 7.2.0, a contravariância parcial foi introduzida removendo as restrições de tipo nos parâmetros em um método filho. A partir do PHP 7.4.0, suporte total para covariância e contravariância foi adicionado.

A covariância permite que o método de um filho retorne um tipo mais específico do que o tipo de retorno do método de seu pai. Enquanto a contravariância permite que um tipo de parâmetro seja menos específico em um método filho do que em seu pai.

Uma declaração de tipo é considerada mais específica no seguinte caso:

 - Um tipo é removido de um ```union type: Uma declaração de tipo de união aceita valores de vários tipos diferentes, em vez de um único. Os tipos de união são especificados usando a sintaxe T1|T2|.... Os tipos de união estão disponíveis a partir do PHP 8.0.0.```

 - Um tipo de classe é alterado para um tipo de classe filha

 - float foi alterado para int

 - iterable é alterado para array ou Traversable

 Uma classe de tipo é considerada menos específica se o oposto for verdadeiro.