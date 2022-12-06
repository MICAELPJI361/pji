<?php
    require_once("conexaoBD.php");
    $con = new ConexaoBD();
    if(isset($_POST['professor'])){
        $professor = addslashes($_POST['professor']);
        $senha = addslashes($_POST['senha']);
        $email = addslashes($_POST['email']);

        if(!empty($professor) && !empty($senha)){
            $con->conectar('ecohumus','localhost','root','498386');
            echo "Erro: ".$con->msg;
            if($con->msg == ""){
                if($con->cadastrar($professor,$senha,$email)){
                    session_start();
                    $_SESSION['PROFESSOR'] = $professor;
                    $_SESSION['EMAIL'] = $email;
                    header('Location:boaVindas.php');
                }
            }else{
                echo "Erro: ".$con->msg;
            }
        }
    }

?>