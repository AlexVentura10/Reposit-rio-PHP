<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>

    <h1> Declarando Variáveis e Constantes</h1>
    
    <?php 
    
    $nome = "Alex"; // Variável

    const Pais = "Brasil"; // Constante

    echo "Olá, $nome, tudo bem? Você mora no " .Pais;

    // Utilização de "camelCase" para métodos e atributos

    echo "<br>"; // Pulando linha

    $nomeCompleto = "Camel Case";

    // Utilização de "Snake CASE" para nomear constantes

    $telefone_particular = "Snake CASE";
    
    $endereçodocliente = "Não é errado, mas não recomendado e confuso";

    // Variáveis Bool

    $variavelBool = false;

    var_dump($variavelBool);
    
    // Comentário: Para uma variável do tipo Bool, se eu mando imprimir na tela com o echo ou print, o valor para true é "1" e o valor para false é " " (vazio).
    
    echo "<br>";

    echo "O valor para da variavelBool é: $variavelBool";

    ?>
</body>
</html>