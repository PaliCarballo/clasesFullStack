<?php

    include_once("Curso.php");
    include_once("Profesor.php");
    include_once("Alumno.php");

    class DigitalHouseManager {
        
        private $alumnos = [];
        private $profesores = [];
        private $cursos = [];

        public function getCursos()
        {
            return $this->cursos;
        }

        public function getProfesores()
        {
            return $this->profesores;
        }

        public function getAlumnos()
        {
            return $this->alumnos;
        }
        
        public function darDeAltaCurso($nombre, $codigo, $cupoMaximo)
        {
            $this->cursos[] = new Curso($nombre, $codigo, null, null,  $cupoMaximo, []);
        }

        public function altaProfesorAdjunto($nombre, $apellido, $antiguedad, $codigoProfesor, $horasConsulta)
        {
            $this->profesores[] = new ProfesorAdjunto($nombre, $apellido, 0, $codigoProfesor, $horasConsulta);
        }

        public function altaProfesorTitular($nombre, $apellido, $antiguedad, $codigoProfesor, $especialidad)
        {
            $this->profesores[] = new ProfesorTitular($nombre, $apellido, 0, $codigoProfesor, $especialidad);
        }

        public function altaAlumno($nombre, $apellido, $codigoAlumno) 
        {
            $this->alumnos[] = new Alumno($nombre, $apellido, $codigoAlumno);
        }
    
        public function inscribirAlumno($idAlumno, $idCurso)
        {   
            $error_message = "El alumno no pudo inscribirse";
            $alumno = null;
            $curso = null;
            
            foreach($this->alumnos as $alumnoUnico) 
            {
                if($alumnoUnico->getCodigoAlumno() == $idAlumno)
                {
                    $alumno = $alumnoUnico;
                }
            }

            foreach($this->cursos as $cursoUnico)
            {
                if($cursoUnico->getCodigoCurso() == $idCurso)
                {   
                    $curso = $cursoUnico;
                } else {
                    $curso = null;
                }
            }
            if($alumno != null && $curso != null)
            {
                $curso->agregarUnAlumno($alumno);
            }

        }
    

        public function asignarProfesores($idCurso, $idProfesorTitular, $idProfesorAdjunto)
        {
            $profesorTitular = null;
            $profesorAdjunto = null;
        
            foreach($this->profesores as $profesor) 
            {   

                if($idProfesorTitular == $profesor->getCodigoProfesor()) 
                {
                    $profesorTitular = $profesor;   
                               
                }
            }

            foreach($this->profesores as $profesor)
            {
                if($idProfesorAdjunto == $profesor->getCodigoProfesor())
                {
                    $profesorAdjunto = $profesor;
                }
            }

            foreach($this->cursos as $curso)
            {
                if($curso->getCodigoCurso() == $idCurso && $profesorAdjunto != null && $profesorTitular != null)
                {
                    $curso->setProfesorTitular($profesorTitular);
                    $curso->setProfesorAdjunto($profesorAdjunto);
                    
                    return $profesorTitular->getNombre() . " y " . $profesorAdjunto->getNombre() . " fueron asignados al curso " . $curso->getNombreCurso();
                }
            }

        }
    }



    
    
    