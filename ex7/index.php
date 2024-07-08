<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furmulário PHP</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>  
    <header> 
    
    <h1>Informe seus dados</h1>

    </header> 
    
<section> <!-- tag para agrupar conteúdo (formulários, parágrafos...) -->

 <form action="cad.php" method="get"> <!-- tag formulário // "cad.php" para onde os dados serão enviados // method="get" Relacionado ao envio de dados de formulário via URL.-->
      
     <label for="nome">Nome</label> <!--  Define um rótulo, texto ou uma descrição, associada a um campo de formulário -->

     <input type="text" name ="nome" id = "idnome"> <!--  Controle de entrada de dados do formulário // name="nome" nome do campo -->


     <label for="sobrenome">Sobrenome</label>

     <input type="text" name ="sobrenome" id = "idsobrenome">


     <input type="submit" value="Enviar"> <!-- Define um botão Enviar -->

 </form> <!-- Fim tag formulário -->

</section>

    <?php 
    
    ?>
</body>
</html>