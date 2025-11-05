<?php
    namespace Projeto\DAO;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'lojaAllan');
                if($conn){
                    return $conn;
                }
            }catch(Exception $erro){
                echo "Algo deu errado!<br><br>$erro";
            }//fim do try Catch
        }//fim do conectar
    }//fim da classe
?>