<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Zone</title>
</head>
<body>
    <h1>Data e hora atual</h1>
    <?php 
        date_default_timezone_set("Europe/Lisbon");
        echo "A data de hoje é ". date("d/m/y");
        echo " e a hora atual é ". date("G:i:s");
        echo " Horário de Lisboa";
    
    ?>

</body>
</html>