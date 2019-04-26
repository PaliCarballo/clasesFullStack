<?php
    include_once('Profesor.php');
    include_once('ProfesorAdjunto.php');
    include_once('ProfesorTitular.php');
    include_once('Alumno.php');

    class Curso {

        private $nombreCurso;
        private $codigoCurso;
        private $profesorTitular;
        private $profesorAdjunto;
        private $cupoMaximo;
        private $alumnosInscriptos;


        public function __construct($nombreCurso, $codigoCurso, ProfesorTitular $profesorTitular, ProfesorAdjunto $profesorAdjunto, $cupoMaximo, Array $alumnosInscriptos)
        {
            $this->nombreCurso = $nombreCurso;
            $this->codigoCurso = $codigoCurso;
            $this->profesorTitular = $profesorTitular;
            $this->profesorAdjunto = $profesorAdjunto;
            $this->cupoMaximo = $cupoMaximo;
            $this->alumnosInscriptos = $alumnosInscriptos;
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
            return $this->codigoCurso;
        }

        public function setCodigoCurso($idCurso)
        {
            $this->codigoCurso = $codigoCurso;
        }

        public function getProfesorTitular()
        {
            return $this->profesorTitular;
        }

        public function setProfesorTitular($profesorTitular)
        {
            $this->profesorTitular = $profesorTitular;
        }

        public function getProfesorAdjunto()
        {
            return $this->profesorAdjunto;
        }

        public function setProfesorAdjunto($profesorAdjunto)
        {
            $this->profesorAdjunto = $profesorAdjunto;
        }

        public function getCupoMaximo()
        {
            return $this->cupoMaximo;
        }

        public function setCupoMaximo($cupoMaximo)
        {
            $this->cupoMaximo = $cupoMaximo;
        }

        public function listarAlumnos()
        {
            $mensaje = "Los alumnos incriptos son ";

            foreach($this->alumnosInscriptos as $alumno){
                $mensaje .= ($alumno->getNombre()).", ";
            }
            return $mensaje;
        }

        public function listarProfesores()
        {
            $profesorTitular = $this->getProfesorTitular();
            $profesorAdjunto = $this->getProfesorAdjunto();

            $message = "El profesor $profesorTitular->getNombre() es el titular, acompañado por $profesorAjunto->getNombre() como adjunto";

            return $message;
        }

    }