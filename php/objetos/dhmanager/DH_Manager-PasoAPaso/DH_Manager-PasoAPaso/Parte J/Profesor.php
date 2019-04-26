<?php
  namespace MiApp;
  require_once(Identificable.php);

    abstract class Profesor {
        use Identificable;

        private $antiguedad;
        private $codigoProfesor;

        public function __construct($nombre, $apellido, $antiguedad, $codigoProfesor)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->antiguedad = $antiguedad;
            $this->codigoProfesor = $codigoProfesor;
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
