<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    
    <main>

    <?php 

   /* 
    $_GET: Variável Super Global que está sempre acessível, independentemente do escopo do script, e é uma maneira de acessar dados de diferentes partes do programa. 
    Escopo: Determina a visibilidade e a disponibilidade de uma variável em diferentes partes do código

    Importante: Os dados recebidos através de $_GET são públicos e visíveis na URL
  */

   $n = $_GET["nome"] ?? "Sem nome"; // Capturando o "nome" do formulário HTML 
   $s = $_GET["sobrenome"] ?? "Desconhecido"; // Capturando o "sobrenome" do formulário HTML
   
   echo "Seja bem-vindo, <strong>$n $s</strong>!";
   
     ?>

    </main>

    <button onclick="history.back()">Voltar</button> 
    
    <!-- tag <button> é um elemento HTML usado para criar um botão clicável na página -->
    <!-- O método history.back(), pertencente ao javascript, é executado e permite que navegador volte para a página anterior no histórico.-->

</body>
</html>