
<?php
    session_start();
    include_once('conexao.php');
    //print_r($_SESSION);
   

    $sql = "SELECT * FROM clientes ORDER BY id DESC";

    $result = $conexao->query($sql);

    //print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar serviços</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #404040; 
            
        }
        h1{
            color: white;
        }
        a{
            display: flex;
            text-align: center;
            color: black;
            position: relative;
           
            
        }
        .buton:hover
        {
            background-image: linear-gradient(to right,rgb(202, 27, 0), rgb(202, 27, 0));
        }
        .table{
            background: rgba(0, 0, 0, 0.9);
           
            border-radius: 18px 18px 0 0;
            color: white;
            padding: 15px;
            font-size: 18px;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif 
        
        }
        nav{
            background-color: dodgerblue;
            padding: 5px
           
        }
        .btn {
            background-color: red;
            
        }
        .m-5{
            
            font-size: 15px;
        }
        tbody{
            color: black;
            font-size: 11px;
            background-color: yellow;
            text-align: center;
        }
        nav{
            background-color: dodgerblue;
            text-align: center
        }

        div{
            align:center;
            background-color: blue;
            position:absolute;
        }
        button{
            background-color: blue;
            outline: none;
            border: none;
            text-decoration: none;
        }
        a{
            text-decoration: none;
        }

    </style>
    </style>
</head>
<body>
<div class="button">
    <button><a href="formulario.php">Voltar</a></button>
</div><br><br>
<h1>Relatorio de serviços</h1>
<div class="m-5">
        <table class="box">
            <thead>
                <tr class="table">
                <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">cnpj</th>
                    <th scope="col">telefone</th>
                    <th scope="col">serviço</th>
                    <th scope="col">data_serv</th>
                    <th scope="col">cidade</th>
                    <th scope="col">estado</th>
                    <th scope="col">endereco</th>
                    <th scope="col">valor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="box">
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['cnpj']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['serviço']."</td>";
                        echo "<td>".$user_data['data_serv']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['estado']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                                                 
                        echo "</td>";
                    }
                ?>


            </tbody>
        </table>
    </div> 
</body>
</html>