<?php

    abstract class Profesor {

        private $nombre;
        private $apellido;
        private $antiguedad;
        private $codigoProfesor;

        public function __construct($nombre, $apellido, $antiguedad, $codigoProfesor)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->antiguedad = $antiguedad;
            $this->codigoProfesor = $codigoProfesor;
        }

        
        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getApellido()
        {
            return $this->apellido;
        }

        public function setApellido($apellido)
        {
            $this->apellido = $apellido;

        }

        public function getAntiguedad()
        {
            return $this->antiguedad;
        }

        public function setAntiguedad($antiguedad)
        {
            $this->antiguedad = $antiguedad;
        }

        public function getCodigoProfesor()
        {
            return $this->codigoProfesor;
        }

        public function setCodigoProfesor($codigoProfesor)
        {
            $this->codigoProfesor = $codigoProfesor;
        }
    }