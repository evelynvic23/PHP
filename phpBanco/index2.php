<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Banco de Dados</title>
</head>
<body>

<h1>
    Cadastro de alunos
</h1>

    <?php
    //Definir as informações de conexão do banco de dados
    
    $servidor = "localhost";
    $suario = "root";
    $senha = "";
    $dbname = "bancodadosphp";

    // Criar a conexão com o Banco de Dados
    $conn = mysqli_connect($servidor, $suario, $senha, $dbname);

    //Define a consulta SQL para selecionar todos os registros da tabela "alunos"
    $result_tabela = "SELECT * FROM aluno";

    //Executar a consulta SQL e armazenar em uma variável

    $resultado_tabela = mysqli_query($conn, $result_tabela);

    //Imprimir os valores na página

    while($row_usuario = mysqli_fetch_assoc($resultado_tabela)){
        echo "ID - ".$row_usuario['id']. "<br>";

        echo "Nome: ".$row_usuario['nome']. "<br>";

        echo "Sobrenome: ".$row_usuario['sobrenome']. "<br><hr>";
    }
    ?>
    
</body>
</html>