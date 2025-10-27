<?php
    namespace Projeto\DAO;
    require_once('conexao.php');
    use Projeto\Dao\Conexao;

    class Cadastrar{
        public function cadastrarEndereco(Conexao $conexao,
                                          string $logradouro, 
                                          int $numero,
                                          string $complemento,
                                          string $bairro,
                                          string $cep,
                                          string $cidade,
                                          string $estado,
                                          string $pais
        
        ){
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "insert into endereco(codigo, logradouro, numero, complemento, 
                        bairro, cep, cidade, estado, pais) values('', '$logradouro', '$numero', 
                        '$complemento', '$bairro','$cep', '$cidade', '$estado', '$pais')";
                $result = mysqli_query($conn, $sql);//Fazendo o commit

                //Fechar a conexao
                mysqli_close($conn);
                if($result){
                    echo "<br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido";
            }catch(Exception $erro){
                return "<br><br>Algo deu errado <br><br>$erro";
            }//fim do catch
        }//fim do cadastrarEndereco

        public function cadastrarCliente(Conexao $conexao, 
                                         int $cpf,
                                         string $nome,
                                         string $telefone,
                                         float $totalCompras,
                                         int $codigoEndereco
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "insert into cliente(codigo, cpf, nome, telefone, totalCompras, 
                         codigoEndereco) values('', '$cpf', '$nome', '$telefone', '$totalCompras',
                        '$codigoEndereco')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
            }catch(Exception $erro){
                return "<br><br>Algo deu errado <br><br> $erro";
            }//fim do try...catch
        }//fim do cadastrarCliente  
    }//fim da classe cadastrar
?>