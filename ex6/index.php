<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de String</title>
</head>
<body>

    <h1>Tipos de String</h1>
    <?php 

    // Tipo Double quoted (""): Com o uso das aspas duplas existe a interpretação do conteúdo. EX:

    echo "Tipo double quoted (aspas duplas). Ex: ";
    echo "Olá Mundo \u{1F30E} <br> <br>";
    
    $nome = 'Alex';
    $sobrenome = "Silva";
    
    echo "$nome $sobrenome <br> <br>";
    print '$nome $sobrenome';


    // O "\u" trata-se de uma sequência de escape, utilizada a partir do PHO vs 7, para exibir caracteres especiais Codepoint Unicode. Ex: Emoji  Código do emoji world: \u{1F30E}

    // Tipo Single quoted (''): Ao utilizar as aspas simples, estou dizendo que não preisa interpretar o conteúdo dentro da string, para exibir exatamente o que foi escrito. 
    
    // Cometário: A ação de exibir o conteúdo da variável é denominada de interpolação de string.  

    echo "<br> <br>"; // 

    echo 'Olá Mundo \u{1F30E}';

    echo "<br> <br>"; // 

    // E qual a exibição dessa constante?

    const ESTADO = "SP";

    echo "Moro em ESTADO";
    
    // Resposta: Para constantes a interpolação de string, seja em double ou single quoted, não funciona, pois ela não é uma variável.  Para isso, é preciso usar o operador de concatenação (.). Ex:

    echo "<br> <br>"; //

    echo "Moro em ". ESTADO;

    echo "<br> <br>"; //

    // Comentário: Para funções, eu também não posso fazer a interpolação de string (devemos concatenar)! Por quê? Pois ela não é uma insting, mas sim função. Ex:

    echo "O ano atual é " . date('Y');

    /*
    Aspas duplas dentro de asplas duplas: Não permitido
    Aspas simples dentro de asplas simples: Não permitido

    Aspas simples dentro de aspas duplas: Permitido
    Aspas duplas dentro de aspas simples: Permitido
    */ 
    
    echo "<br> <br>"; // 

    $nome = "Alex";
    $sobrenome = "Silva";
    
    // echo "$nome "Gato" $sobrenome"; Não permitido

    echo "$nome \"Gato\" $sobrenome"; // Permitido (\" \" sequência de escape)
   
    ?>
</body>
</html>