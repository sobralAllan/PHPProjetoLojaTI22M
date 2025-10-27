<?php
    namespace Projeto\DAO;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'lojaAllan');
                if($conn){
                    echo  "<br>Conectado com Sucesso!";
                    return $conn;
                }
                echo "Algo deu errado!";
            }catch(Exception $erro){
                echo "Algo deu errado!<br><br>$erro";
            }//fim do try Catch
        }//fim do conectar
    }//fim da classe
?>