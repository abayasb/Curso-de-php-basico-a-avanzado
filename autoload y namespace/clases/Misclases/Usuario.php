<?php
    namespace Misclases;
    class Usuario{
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre = "Angel Bayas";
            $this->email = "angel@bayas";
        }
    }
?>