<?php
    session_start();
    include_once('config.php');
    print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);

    print_r($result);

?>


<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sistema</title>
            <style>
                body{
                background-image: linear-gradient(223,225,145,752);
                }
                nav{
                    background-color: dodgerblue;
                    text-align: center
                }
                table{
                    background-color: yellow;
                    text-align: center;
                }
                div{
                    background-color: blue
                    ;
                }
                .navbar-toggler-icon{
                    
                }
                .btn{
                    background-color: red;
                    padding: 3px;
                    border: none;
                    color: black;
                }
               

            </style>
        </head>
    <body>
        <nav>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <span class="navbar-toggler-icon"><a href="sair.php" class="btn btn-danger me-5">Sair</a></span>
            </button>
            <div class="d-flex">
            
            </div>
        </nav>
        
        <div class="box">Bem vindo ao sistema</div>
    
    
    </body>    
</html>    