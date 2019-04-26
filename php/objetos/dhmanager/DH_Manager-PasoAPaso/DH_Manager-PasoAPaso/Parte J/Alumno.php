<?php
  namespace MiApp;
  require_once(Identificable.php);

    class Alumno {
        use Identificable;

        private $codigoAlumno;

        public function __construct($nombre, $apellido, $codigoAlumno)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->codigoAlumno = $codigoAlumno;
        }

        public function getCodigoAlumno()
        {
            return $this->codigoAlumno;
        }

        public function setCodigoAlumno($codigoAlumno)
        {
            $this->codigoAlumno = $codigoAlumno;
        }
    }
