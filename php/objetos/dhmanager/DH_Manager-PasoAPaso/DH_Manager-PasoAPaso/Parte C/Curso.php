<?php

    class Curso {

        private $nombreCurso;
        private $codigoCurso;

        public function __construct($nombreCurso, $codigoCurso)
        {
            $this->nombreCurso = $nombreCurso;
            $this->codigoCurso = $codigoCurso;
        }

        public function getNombreCurso()
        {
            return $this->nombre;
        }

        public function setNombreCurso($nombreCurso)
        {
            $this->nombre = $nombreCurso;
        }

        public function getCodigoCurso()
        {
            return $this->id;
        }


        public function setCodigoCurso($codigoCurso)
        {
            $this->id = $codigoCurso;
        }
    }