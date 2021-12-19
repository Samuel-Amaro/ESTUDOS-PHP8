<?php

namespace EmpregadoTerceirizado;
include_once("Funcionario.php");
use Funcionario\Funcionario;

class EmpregadoTerceirizado extends Funcionario{

    private $funcao;

    public function __construct($cargoP, $cpfP, $nomeP, $salarioP, $funcaoP)
    {
        parent::__construct($cargoP, $cpfP, $nomeP, $salarioP);
        $this->funcao = $funcaoP;
    }

    /**
     * @return mixed
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * @param mixed $funcao
     */
    public function setFuncao($funcao): void
    {
        $this->funcao = $funcao;
    }


}