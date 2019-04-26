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

    $test = new ProfesorAdjunto("Nico", "Rodrigues", 0, "ad004", 36);

    //var_dump($test);