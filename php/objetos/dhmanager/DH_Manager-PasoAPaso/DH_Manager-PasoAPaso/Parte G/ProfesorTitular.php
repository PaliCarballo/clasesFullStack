<?php

    include_once('Profesor.php');

    class ProfesorTitular extends Profesor {

        private $especialidad;

        public function __construct($nombre, $apellido, $antiguedad, $codigoProfesor, $especialidad)
        {
            parent::__construct($nombre, $apellido, $antiguedad, $codigoProfesor);
            $this->especialidad = $especialidad;
        }

        public function getEspecialidad()
        {
            return $this->especialidad;
        }

        public function setEspecialidad($especialidad)
        {
            $this->especialidad = $especialidad;
        }
    } 