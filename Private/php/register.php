<?php 

    class Register {

        private $codigo;
        private $nome;
        private $pessoa;
        private $unidade;
        private $status;
        private $dataCriacao;
        private $dataUpdate;

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }

    }

?>