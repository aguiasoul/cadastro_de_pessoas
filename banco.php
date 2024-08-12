<?php
 if(!isset($_SESSION)){
    session_start();
    
}

    $nome = $_SESSION ["nome"];
    $endereco = $_SESSION ["endereco"];
    $estado = $_SESSION ["estado"];
    $cidade = $_SESSION ["cidade"];
    $telefone = $_SESSION ["telefone"];
    $email = $_SESSION ["email"];
    $datadenascimento = $_SESSION ["datadenascimento"];
    $cpf = $_SESSION ["cpf"];
    $senha = $_SESSION ["senha"];




    /*
 if(isset($_POST["bt_nome"])){


    $nome = $_POST["bt_nome"];
    $endereco = $_POST["bt_endereco"];
    $estado = $_POST["estados"];
    $cidade = $_POST["bt_cidade"];
    $telefone = $_POST["bt_telefone"];
    $email = $_POST["bt_email"];
    $datadenascimento = $_POST["bt_datadenascimento"];
    $telefone = $_POST["bt_telefone"];
    $email = $_POST["bt_email"];
    $senha = $_POST["bt_senha"];
    $repetirasenha = $_POST["bt_rsenha"];
    $cpf = $_POST["cpf"];
  

    $senha = $_POST["bt_senha"];
    $rsenha = $_POST["bt_rsenha"];      

   }
    */
 ?>

<!DOCTYPE html>
<html lang="pt-pr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <div class="container">

        <p>nome: <?php echo ($nome);?> </p>
        <p>endereco: <?php echo ($endereco);?></p>
        <P>estado: <?php echo ($estado);?></p>
        <p>cidade: <?php echo ($cidade);?></p>
        <p>telefone: <?php echo ($telefone);?></p>
        <p>email: <?php echo ($email);?></p>
        <p>datadenascimento: <?php echo ($datadenascimento);?></p>
        <p>cpf: <?php echo ($cpf);?></p>
        <p>senha: <?php echo ($senha);?></p>        

        <a class="btn btn-success" href="cadastro_de_pessoas.php">Voltar </a>
    </div>
</body>

</html>