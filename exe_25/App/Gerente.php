<?php

namespace Gerente;
include_once("Funcionario.php");
use Funcionario\Funcionario;

class Gerente extends Funcionario
{

    private $equipes = array();

    public function __construct($cargoP, $cpfP, $nomeP, $salarioP, $equipes)
    {
        parent::__construct($cargoP, $cpfP, $nomeP, $salarioP);
        $this->equipes = $equipes;
    }

    /**
     * @return array
     */
    public function getEquipes()
    {
        return $this->equipes;
    }

    /**
     * @param array $equipes
     */
    public function setEquipes($equipes)
    {
        $this->equipes = $equipes;
    }


}
?>