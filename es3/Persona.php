<?php
    class Persona{
        private $nome;
        private $cognome;

        public function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($cognome) {
            $this->cognome = $cognome;
        }

        public function getCognome() {
            return $this->cognome;
        }

        public function setCognome($cognome) {
            $this->cognome = $cognome;
        }



        public function presentati() {
            return "Ciao,sono {$this->nome} {$this->cognome}";
    }


}




?>