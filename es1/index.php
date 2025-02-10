<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
        require_once 'Alunno.php';

        $alunno1 = new Alunno();
        $alunno1 ->setNome("Mario");
        $alunno1 ->setCognome("Rossi");
        $alunno1 ->setEta(18);

        $alunno2 = new Alunno();
        $alunno2 ->setNome("Tommaso");
        $alunno2 ->setCognome("Martini");
        $alunno2 ->setEta(18);

        $alunno3 = new Alunno();
        $alunno3 ->setNome("Giuseppe");
        $alunno3 ->setCognome("giustini");
        $alunno3 ->setEta(18);

        $alunni  = [$alunno1, $alunno2, $alunno3];

        foreach ($alunni as $alunno) {
            $alunno->stampa();
        }

    

    ?>
    
</body>
</html>