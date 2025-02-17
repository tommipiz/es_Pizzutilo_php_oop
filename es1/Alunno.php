<?php
    class Alunno implements JsonSerializable{
        private $nome;
        private $cognome;
        private $eta;

        public function __construct($nome, $cognome, $eta) {
            $this -> nome = $nome;
            $this -> cognome = $cognome;
            $this -> eta = $eta;
        }

        public function jsonSerialize(): array {
            return [
                'nome' => $this->nome,
                'cognome' => $this->cognome,
                'eta' => $this->eta
            ];
        }


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
            echo "Nome: {$this->nome} , Cognome: {$this->cognome}, Età: {$this->eta}";
        }

        }
    ?>