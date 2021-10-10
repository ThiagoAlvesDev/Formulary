<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    
      
    

</head>
<body>
    <div>
        <form  method = "get" action="conclusao.php">
            <h1>Confirme seus dados por favor</h1>
            <h3>Caso verifique erros, clique em voltar para corrigir.</h3>
            
            <?php
                $f = $_GET["first"];                
                $s = $_GET["sex"];
                $c = $_GET["city"];
                $st = $_GET["state"];
                $b = $_GET["bio"];
                
                
                echo "<span>Nome: $f</span><br>",  
                "<br><span>Cidade: $c</span><br>",
                "<br><span>Estado: $st</span><br>",
                "<br><span>Resumo:</span><p>$b</p>";        
                              
            ?>
                    
            
    </div>
    <div class="bt">
            <button> Enviar</button> 
            <button onclick= back()> Voltar</button>
        </form>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>