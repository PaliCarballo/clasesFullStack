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

        public function agregarUnAlumno(Alumno $unAlumno)
        {
            $cupoCurso = $this->getCupoMaximo();

            if(count($this->alumnosInscriptos) < $cupoCurso) {
                $alumnosInscriptos[] = $unAlumno;
                return true;
            } else {
                return false;
            }

        }

    }






    $profesorTitular = new ProfesorTitular("Daniel", "Fuentes", 0, "003", "PHP");

    $profesorAdjunto = new ProfesorAdjunto("Nicolas", "Rodrigues", 0, "006", "Javascript");

    $alumno_a = new Alumno("Nelson", "Nunez", "a005");
    $alumno_b = new Alumno("Jorge", "Nunez", "a006");
    $alumno_c = new Alumno("Martin", "Perez", "a007");
    $alumno_d = new Alumno("Diego", "Lopez", "a008");
    

    $lista_alumnos = [
        $alumno_a,
        $alumno_b,
        $alumno_c
    ];

// $curso_fullstack = new Curso("FullstackTN7", "c0003", $profesorTitular, $profesorAdjunto, 3, $lista_alumnos);
    
// //var_dump($curso_fullstack);

// var_dump($curso_fullstack->agregarUnAlumno($alumno_d));


// $curso_fullstack = new Curso("FullstackTN7", "c0003", $profesorTitular, $profesorAdjunto, 10, $lista_alumnos);

// var_dump($curso_fullstack->agregarUnAlumno($alumno_d));

// //var_dump($curso_fullstack);