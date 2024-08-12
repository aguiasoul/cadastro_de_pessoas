<?php
if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['bt_senha'])){
    $senha = $_POST['bt_senha'];
    $rsenha = $_POST['bt_rsenha'];

    $_SESSION["nome"] = $_POST['bt_nome'];

    $_SESSION["endereco"] = $_POST['bt_endereco'];

    $_SESSION["estado"] = $_POST['estados'];

    $_SESSION["cidade"] = $_POST['bt_cidade'];

    $_SESSION["telefone"] = $_POST['bt_telefone'];

    $_SESSION["email"] = $_POST['bt_email'];

    $_SESSION["datadenascimento"] = $_POST['bt_datadenascimento'];

    $_SESSION["cpf"] = $_POST['cpf'];

    $_SESSION["senha"] = $_POST['bt_senha'];

}

if(isset($senha)){

    if($senha === $rsenha){
        /* so vai executar os codigos abaixo
        se for verdadeiro. ---------------*/



        header("location:banco.php"); /* mudar de pagina */                    

       
    }else{
        /* else é o senão */
        /* Quando for falso executar os codigos 
         abaixo: */   
         
         $mensagem = "<div class='alert alert-danger mt-3'> senha invalida </div";
        
        
    } 
} 

?>

<!DOCTYPE html>
<html lang="pt_br">

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
</head>

<body>
    <div class="container text-center">

        <h1 class="mt-3">Cadastro de Pessoas</h1>
    </div>
    <div class="container">
        <form action="" method="post"><br>
            <label for="">Nome:</label><br>
            <input class="form-control" type="text" name="bt_nome">


            <label for="">endereço:</label><br>
            <input class="form-control" type="text" name="bt_endereco">

            <div class="mb-3">
                <label for="">Selecione o seu estado:</label>
                <select class="form-select" id="estados" name="estados">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>

            <label for="">cidade:</label><br>
            <input class="form-control" type="text" name="bt_cidade">
            <label for="">telefone:</label><br>
            <input class="form-control" type="text" name="bt_telefone">
            <label for="">e-mail:</label><br>
            <input class="form-control" type="text" name="bt_email">
            <label for="">data de nascimento:</label> <br>
            <input class="form-control" type="text" name="bt_datadenascimento">
            <label for="">cpf:</label> <br>
            <input class="form-control" type="text" name="cpf">
            <label for="">senha:</label> <br>
            <input class="form-control" type="text" name="bt_senha">
            <label for="">repetir a senha:</label> <br>
            <input class="form-control" type="text" name="bt_rsenha">

            
            <input class="mt-2 btn btn-success" type="submit" value="Cadastrar">
            <input class="mt-2 btn btn-danger" type="reset" value="Redefinir">

            <?php
            if(isset($mensagem)){
                echo $mensagem;
            }
                
            ?>
        </form>
    </div>
</body>

</html>