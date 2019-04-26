<?php
    
    include_once('Profesor.php');

    class ProfesorAdjunto extends Profesor {

        private $horasConsulta;

        public function __construct($nombre, $apellido, $antiguedad, $codigoProfesor, $horasConsulta)
        {
            parent::__construct($nombre, $apellido, $antiguedad, $codigoProfesor);
            $this->horasConsulta = $horasConsulta;
        }

        public function getHorasConsulta()
        {
            return $this->horasConsulta;
        }

        public function setHorasConsulta($horasConsulta)
        {
            $this->horasConsulta = $horasConsulta;
        }
    } 

    // $nuevoProfesor = new ProfesorAdjunto("Rodo", "Raskovsky", 0, "004", 24);

    // var_dump($nuevoProfesor);