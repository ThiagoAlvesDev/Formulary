<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário</title>
</head>

<body>
    <div>
        
        <form method="get" action="./dados.php">
            <h1>INFORME SEUS DADOS</h1>

                <span>Nome completo:</span><br>
                <input id="name" class="name" name="first" type="text" >
                
                <br>
                
                <span>E-mail:</span><br>
                <input type="email" placeholder="exemplo@exemplo.com">
                
                <br>

                <span>Cidade:</span><br>
                <input class="city" name="city" type="text" />

                <br>

                <span>Estado:</span><br>
                <input class="state" name="state" type="text">

                <br>
            
                <span>Resumo:</span><br>
                <textarea cols="30" rows="8" name= "bio" placeholder="Descreva em poucas palavras quem é você!"></textarea>

                <br>
                
                <button class="confirm">Confirmar</button>
                <button type="reset" value="Limpar">Limpar</button>           
        </form>

    </div>
    <script src="../js/index.js"></script>
</body>

</html>