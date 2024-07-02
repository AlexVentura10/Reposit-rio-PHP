<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <H1>Concatenação e configuração de data e hora</H1>
    <?php 
    
    date_default_timezone_set("America/Sao_Paulo"); // <--Configure a área padrão da data
    
    echo "Hoje é dia: ". date("d/M/Y"); // Função
     
    echo " Hora atual: ". date("G:i:s: T") // Função

     // Sem o scrit da linha 11, a configuração timezone, por padrão, fica a do servidor (CET) e não a timezone cliente (UTC).

     // É importante destacar que todo esse scrit foi pré-processado e exibido para o cliente somente o resultado é mandado para o cliente.  
     
    ?>
</body>

</html>