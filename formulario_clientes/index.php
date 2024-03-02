<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(20,147,220), rgb(17,54,71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0%;
            padding: 30px;
            border-radius: 15px;
            color: aliceblue;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputsubmit{
            background-color: dodgerblue;
            border-radius: 10px;
            border: none;
            padding: 15px;
            width: 50%;
            color: aliceblue;
            font-size: 17px;
            cursor: pointer;   
        }
        .inputsubmit:hover{
            background-color: deepskyblue;
        }
        @media screen and (max-width: 400px){
            div{
                width: 80%;
                top: 20px;
            }
        }
        @media screen and (max-width: 400px){
            p{
                width: 80%;
                top: 200px;
            }
        }
        


    </style>
</head>
<body>
    
    
    
    
    <div>
        <h1>Login</h1>
        <form action="testlogin.php"method="POST">
        <input type="text" name="nome" placeholder="nome">
        <br><br>
        <input type="password" name="senha" placeholder="senha">
        <br><br>
        <input class="inputsubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>