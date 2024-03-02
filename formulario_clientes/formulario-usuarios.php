<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['nome'];

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);

    //print_r($result);

?>

<?php

    if(isset($_POST['submit']))
    {
        print_r('Email:' . $_POST['email']);
       print_r('<br>');
        
       print_r('Nome:' . $_POST['nome']);
       print_r('<br>');
    
        print_r('Sobrenome:' . $_POST['sobrenome']);
        print_r('<br>');
        
        print_r('Senha:' . $_POST['senha']);
        print_r('<br>');
        
    
       
     include_once('config.php');

     $email = $_POST['email'];
     $nome = $_POST['nome'];
     $sobrenome = $_POST['sobrenome'];
     $senha = $_POST['senha'];
   

 
     $result = mysqli_query($conexao, "INSERT INTO  usuarios(email,nome,sobrenome,senha)
     VALUES ('$email','$nome','$sobrenome','$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela login</title>
    <style>
        body{
            
            background-color: rgba(255, 201, 5, 0.846);  
            font-family: Arial, Helvetica, sans-serif;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(249, 255, 131, 0.695);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            color: rgb(15, 15, 15);
        }
        .inputbox{
            position: relative;
           
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid rgb(11, 11, 11);
            outline: none;
            color: rgb(8, 8, 8);
            font-size: 15px;
            width: 100%;
            letter-spacing: 3px; 
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
            color: rgb(3, 3, 3);
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        .button{
            background-color: rgb(253, 253, 154);
            padding: 15px;
            border-radius: 15px;
            position: absolute;
            
        }
        .inputsubmit
        {
            background-image: linear-gradient(to right,rgb(173, 220, 20), rgb(43, 43, 18));
            width: 100%;
            border: none;
            padding: 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
        }
        .inputsubmit:hover
        {
            background-image: linear-gradient(to right,rgb(43, 43, 18), rgb(173, 220, 20));
        }
        @media screen and (max-width: 400px){
            .box{
                width: 80%;
                top: 20px;
            }
        }
        @media screen and (max-width: 720px){
            .box{
                width: 80%;
                top: 300px;
            }
        }
       
       

    </style>
</head>
<body>

    <center><h1>Olá usuário !</h1></center>
    
    <br><br><br><br><br>
    
    <center><h2>Sistema de registro de fucionário.</h2></center>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="button">
        <a href="formulario.php">Acesse o sistema aqui</a>
        
    </div>
   
    
        <div class="box">
            <h3>Cadastre-se</h3>
            <form action="formulario-usuarios.php" method="POST">
                <legend><b>Preencha seus dados</b></legend>
                <br>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">email</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">nome</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required>
                    <label for="sobrenome" class="labelInput">sobrenome</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                <br>
                <br>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
  
</body>
</html>