<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de precedência</title>
</head>
<body>
    <h1>Ordem de precedência</h1>

    <?php 
    /*
     ---------- Ordem de precedência ------------
     () - Os parenteses não são operadores aritiméticos, são modificadores da ordem de procedência 
     1- ** (potência)
     2- *  
     3- / 
     4- %
     5- +
     6- -

     Comentário: Na ordem de precendência sempre começamos da esquerda para direita
    */
    
    $resultado1 = 50 / 2 + 3 ** 2;

    echo "O resultado é = $resultado1 <br> <br>"; 

    // Inserindo parenteses na operação
   
    $resultado2 = 50 / (2 + 3) ** 2;
    
    echo "O resultado é = $resultado2";

    
    ?>
</body>
</html>




