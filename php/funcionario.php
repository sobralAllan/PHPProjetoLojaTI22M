<?php 
    namespace Projeto\php;
    require('pessoa.php');
    use Projeto\php\Pessoa;

    class Funcionario extends Pessoa{
        protected float $salario;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco,
                                    float $salario
        ){
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->salario = $salario;
        }//fim do construtor

        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $dado):void
        {
            $this->variavel = $dado;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Salário: ".$this->salario;
        }//fim do imprimir
    }//fim da classe
?>