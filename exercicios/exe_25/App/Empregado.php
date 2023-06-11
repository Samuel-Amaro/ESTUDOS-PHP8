<?php

namespace Empregado;
use Funcionario\Funcionario;
include_once("Funcionario.php");


class Empregado extends Funcionario {
    private $setor;

    public function __construct($cargoP, $cpfP, $nomeP, $salarioP, $setorP)
    {
        parent::__construct($cargoP, $cpfP, $nomeP, $salarioP);
        $this->setor = $setorP;
    }

    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }


}