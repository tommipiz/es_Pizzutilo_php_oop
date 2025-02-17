<?php
    class Voto implements JsonSerializable {




        public function jsonSerialize(): array {
            return [
                'materia' => $this->materia,
                'valore' => $this->valore,
                'indirizzo' => $this->indirizzo
            ];
        }

    }


?>