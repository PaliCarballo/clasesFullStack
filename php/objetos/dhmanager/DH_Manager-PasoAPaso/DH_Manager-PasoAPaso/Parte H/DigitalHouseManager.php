<?php

    include_once("Curso.php");
    include_once("Profesor.php");
    include_once("Alumno.php");

    class DigitalHouseManager {
        
        private $alumnos = [];
        private $profesores = [];
        private $cursos = [];
        
        public function darDeAltaCurso($nombre, $codigo, $cupoMaximo)
        {
            $this->cursos[] = new Curso($nombre, $codigo, null, null,  $cupoMaximo, []);
        }

        public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $horasConsulta)
        {
            $this->profesores[] = new ProfesorAdjunto($nombre, $apellido, 0, $codigoProfesor, $horasConsulta);
        }

        public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad)
        {
            $this->profesores[] = new ProfesorTitular($nombre, $apellido, 0, $codigoProfesor, $especialidad);
        }

        public function altaAlumno($nombre, $apellido, $codigoAlumno) 
        {
            $this->alumnos[] = new Alumno($nombre, $apellido, $codigoAlumno);
        }
    
    }

    //test 






    