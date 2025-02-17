
    <?php
        header("content-type: application/json");

        require 'Alunno.php';

        $alunno1 = new Alunno("Mario","Rossi", 14);
        $alunno2 = new Alunno("Giuseppe","Costantini", 18);
        $alunno3 = new Alunno("Giacomo","Pietrini", 19);
        $alunni  = array($alunno1, $alunno2, $alunno3);

        $json = json_encode($alunni);
        $alunni2 = json_decode($json, true);

        foreach($alunni2 as $al) {
            $a = new Alunno($al['nome'], $al['cognome'], $al['eta']);
            $alunni [] = $a;
        }
        echo json_encode($alunni);

    ?>
