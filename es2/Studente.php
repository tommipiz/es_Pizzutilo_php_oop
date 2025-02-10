<?php
    class Studente extends Persona{
        private $matricola;

        public function __construct($matricola) {
            parent::__construct($nome,$cognome);
            $this->matricola = $matricola;
        }

        public function presentati() {
            return parent::presentati() . " e la mia matricola è {$this->matricola}";
        }
}
?>