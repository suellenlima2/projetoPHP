<?php
   session_start();  

   if(isset ($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {

    include_once('conexao.php');
    $usuario = $_POST['usuario'];        
    $senha = $_POST['senha'];        

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";

    $result = $conexao->query($sql);
   
    if(mysqli_num_rows($result) < 1 )
    {
       unset($_SESSION['email']);
       unset($_SESSION['senha']);      
       header('Location: telaLogin.php');  
       echo "Usuário ou senha inválidos";
    }
    else
    {
       $_SESSION['email'] = $email;
       $_SESSION['senha'] = $senha;
       header('Location: formularioInicial.html');
    
    }

   }

?>