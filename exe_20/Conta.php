<?php 

//definição da classe
class ContaBancaria{
    
    //propriedades da classe
    public string $numero;
    public string $agencia;
    public float $saldo;
    public int $codigo_tipo; # 1 = conta Corrente, 2 = Poupança
    public string $nome_tipo = "";

    public function validaTipo(int $codigo_tipo) {
        if($codigo_tipo === 1 || $codigo_tipo === 2) {
            return true;
        }else{
            return false;
        }
    }

    //metodo construtor da classe, com paramentros obrigatorios para instanciar objetos
    public function __construct(string $numeroP = "00000-0", string $agenciaP = "0000-0", float $saldoP = 0.0, int $codigo_tipoP = 1) {
        $respCod = $codigo_tipoP == 1 || $codigo_tipoP == 2 ? true : false;
        if($respCod) {
            //codigo == 1 || codigo == 2
            $this->numero = $numeroP;
            $this->agencia = $agenciaP;
            $this->saldo = $saldoP;
            $this->codigo_tipo = $codigo_tipoP;
            if($this->codigo_tipo === 1){
                $this->nome_tipo = "Conta Corrente";
            }else{
                $this->nome_tipo = "Poupança";
            }
        }else{
            print 'Tipo de conta inválida: escolha Conta Corrente ou Poupança';
        }
        
    }

    

    public function mostraSaldo() {

        if($this->saldo === 0.0) {
?>
            <p>Sua Conta esta zerada.</p>
<?php
        }else{
?>
            <p>O Seu Saldo é <?php echo $this->saldo; ?></p>
<?php
        }
    }

    public function depositar(float $valor) {
        if($valor === 0.0) {
?>
            <p>Este valor não pode ser depositado.</p>
<?php
        }else{
             $this->saldo = $this->saldo + $valor;    
        }
    }

    public function sacar(float $valor) {
        if($this->saldo >= $valor) {
           $this->saldo = $this->saldo - $valor;
        }else{
?>
            <p>Este valor não pode ser sacado.</p>
<?php
        }
    }
}

?>