<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Banco de Dados</title>
    <style>
        body{
            background-color: purple;
        }
    </style>
</head>
<body>
    <h1>Bem Vindo ao PHP :)</h1>

    <form action="" method="post">
        <label>
            Digite uma valor: 
        </label>
        <input type="text" name="valor">
        <!-- O PHP utiliza do "name" como se fosse o "id" -->
        <button type="submit">Enviar</button>
    </form>
<!-- 
    Para funcionar o PHP -->

    <?php
    // Para escrever na tela estilo document.write
    echo "Hello World";
    echo "<br>";

    //Criando variáveis

    $numero1 = 2;

    $numero2 = 7;

    $soma = $numero1 + $numero2;

    echo $numero1;

    echo "<br>";

    echo $numero2;

    echo "<br>";

    echo "A soma dos números é: ".$soma;

    echo "<br>";

    // Estrutura de decisão

    if($soma >= 7){
        echo "Aluno Aprovado";
    }else{
        echo "Aluno Reprovado";
    }

  echo "<br>";


  //If para tirar o erro de input vazio
    if(isset($_POST['valor'])){

        $valorDigitado = $_POST['valor'];

        echo "<br>";
    
        echo "Valor digitado: ".$valorDigitado;

    }

   
   
    ?>

    
</body>
</html>