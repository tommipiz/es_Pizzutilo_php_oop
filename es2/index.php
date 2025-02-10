<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
        //require_once 'Automobile.php';
        //require_once 'Veicolo.php';

        $auto = new Automobile("Fiat", 2020,"500");
        echo "Marca: ". $auto->getMarca() . "<br>";
        echo "Anno: ". $auto->getAnno() . "<br>";
        echo "Modello: ". $auto->getModello() . "<br>";

    ?>

    
</body>
</html>