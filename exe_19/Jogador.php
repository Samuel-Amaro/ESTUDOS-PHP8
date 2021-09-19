<?php 

    class Jogador{

        private string $nome;
        private string $posicao;
        private string $dataNascimento;
        private string $nacionalidade;
        private float $altura;
        private float $peso;

        public function __construct(string $nome, string $posicao, string $dataNascimento, string $nacionalidade, float $altura, float $peso) {
            $this->nome = $nome;
            $this->posicao = $posicao;
            $this->dataNascimento = $dataNascimento;
            $this->nacionalidade = $nacionalidade;
            $this->altura = $altura;
            $this->peso = $peso;
        }

        public function getNome() {
            return $this->nome;
        }
        public function setNome(string $nome) {
            $this->nome = $nome;
        }
        public function getPosicao() {
            return $this->posicao;
        }
        public function setPosicao(string $posicao) {
            $this->posicao = $posicao;
        }
        public function getDataNascimento() {
            return $this->dataNascimento;
        }
        public function setDataNascimento(string $dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function setNacionalidade(string $nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        public function getAltura() {
            return $this->altura;
        }
        public function setAltura(float $altura) {
            $this->altura = $altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function setPeso(float $peso) {
            $this->peso = $peso;
        }
        public function idade() {
            $anoNascimento = substr($this->dataNascimento, 6, strlen($this->dataNascimento));
            $anoAtual = 2021;
            $anoNascimento = intval($anoNascimento);
            $idade = $anoAtual - $anoNascimento;
?>

            <p>Possui <?= $idade; ?> de Idade.</p>

<?php 
        return $idade;
        }
        public function dadosJogador() {

?>

            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Posição</th>
                <th scope="col">Data Nascimento</th>
                <th scope="col">Nacionalidade</th>
                <th scope="col">Altura</th>
                <th scope="col">Peso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $this->nome; ?></td>
                    <td><?= $this->posicao; ?></td>
                    <td><?= $this->dataNascimento; ?></td>
                    <td><?= $this->nacionalidade; ?></td>
                    <td><?= $this->altura; ?> m</td>
                    <td><?= $this->peso; ?>Kgs</td>
                </tr>
            </tbody>
            </table>
<?php

        }
        public function aposentadoria() {
            $idade = $this->idade();
            if($idade < 40 && $this->posicao === "defesa") {
                $tempoFalta = 40 - $idade;
?>
            <p>Ainda Falta <?= $tempoFalta; ?> Anos Para se Aposentar</p>
<?php 

            }else if($idade < 35 && $this->posicao === "Atacante"){
                $tempoFalta = 35 - $idade;
?>
            <p>Ainda Falta <?= $tempoFalta; ?> Anos Para se Aposentar</p>
<?php 
            }else if($idade < 38 && $this->posicao === "meio-campo") {
                $tempoFalta = 38 - $idade;
?>
            <p>Ainda Falta <?= $tempoFalta; ?> Anos Para se Aposentar</p>
<?php       
            }else{
?>
                <p>Jogador Ja Passou do Tempo de se Aponsentar</p>
<?php 
            }
        }
    }

?>