<?php
    
    Class ConexaoBD{
        public $professor;
        public $senha;
        public $email;

        private $pdo;
        public $msg = "";
        public function conectar($dbname,$host,$usuario,$senha){
            global $pdo;
            try {                
                $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);
            } catch (PDOException $erro) {
                global $msg;
                    $msg = $erro->getMessage();
            }
        }
        public function cadastrar($professor,$senha, $email){
            global $pdo;
            $senhaMD5=$senha;
            $sql = $pdo->prepare("SELECT professor FROM tb_login WHERE professor = '$professor'");
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;
            }else{
                $sql = $pdo->prepare("INSERT INTO tb_login (professor,senha, email) VALUES ('$professor','$senhaMD5', '$email')");
                $sql->execute();
                return true;
            }
        }
        public function logar($login,$senha){
            global $nome;
            global $pdo;
            $senhaMD5=MD5($senha);
            // //  Verifica se está cadastrado
            $sql = $pdo->prepare("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senhaMD5'");
            $sql->execute();
            
            if($sql->rowCount() > 0){
                // está cadastrado
                $dado = $sql->fetch();
                $nome = $dado['login'];
                session_start();
                $_SESSION['ID'] = $dado['login'];
                //$_SESSION['NOME'] = $dado['nome'];
                //$_SESSION['EMAIL'] = $dado['email'];
                return true;
            }else{
                // não está cadastrado
                return false;
            }
        }
        public function dados($login,$senha){
            global $nome;
            global $pdo;
            $senhaMD5=MD5($senha);
            // //  Verifica se está cadastrado
            $sql = $pdo->prepare("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senhaMD5'");
            $sql->execute();
            
            if($sql->rowCount() > 0){
                // está cadastrado
                $dado = $sql->fetch();
                $login = $dado['login'];
                //$nome = $dado['nome'];
                //$email = $dado['email'];

                session_start();
                $_SESSION['ID'] = $dado['login'];
                return true;
            }else{
                // não está cadastrado
                return false;
            }
        }
    }

?>