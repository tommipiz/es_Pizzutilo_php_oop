<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunno</title>
</head>
<body>
    <?php
        class Alunno {
            private $nome;
            private $cognome;
            private $eta;

            //getter
            public function getNome() {
                return $this->nome;
            }

            public function getCognome() {
                return $this->cognome;
            }
            public function getEta() {
                return $this->eta;
            }

            //setter
            public function setNome($nome) {
                $this->nome = $nome;
            }

            public function setCognome($cognome) {
                $this->cognome = $cognome;
            }

            public function setEta($eta) {
                $this->eta = $eta;
            }

            //stampa 
            public function stampa() {
                echo "Nome: {this->nome} , Cognome: {this->cognome}, Età: {this->eta}";
            }

        }
    ?>
    
</body>
</html>