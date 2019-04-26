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
    
        public function inscribirAlumno($idAlumno, $idCurso)
        {   
            $error_message = "El alumno no pudo inscribirse";
            $alumno = null;
            
            foreach($this->alumnos as $alumnoUnico) 
            {
                if($alumnoUnico->getCodigoAlumno() == $idAlumno)
                {
                    $alumno = $alumnoUnico;
                }
            }
            
            foreach($this->cursos as $curso)
            {
                if($curso->getCodigoCurso() == $idCurso)
                {   
                    if($curso->agregarUnAlumno($alumno) == false)
                    {
                        echo "error!";   
                    } 
                    
                    elseif($alumno !== null) 
                    {                       
                        $curso->agregarUnAlumno($alumno);
                        return "El alumno se inscribio!";                        
                    }
                }
            }
        }
    

        public function asignarProfesores($idCurso, $idProfesorTitular, $idProfesorAdjunto)
        {
            $profesorTitular = null;
            $profesorAdjunto = null;
        
            foreach($this->profesores as $profesor1) 
            {   

                if($idProfesorTitular == $profesor1->getCodigoProfesor()) 
                {
                    $profesorTitular = $profesor1;   
                               
                }
            }

            foreach($this->profesores as $profesor2)
            {
                if($idProfesorAdjunto == $profesor2->getCodigoProfesor())
                {
                    $profesorAdjunto = $profesor2;
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

    //test
    ini_set('xdebug.var_display_max_depth', 5);
    ini_set('xdebug.var_display_max_children', 256);
    ini_set('xdebug.var_display_max_data', 1024);

    $DH = new DigitalHouseManager();

    $nuevoCurso = $DH->darDeAltaCurso("FullStack", "c0002", 15);

    $DH->altaProfesorAdjunto("Nico", "Rodrigues", 0, "ad004", 36);
    $DH->altaProfesorTitular("Nick", "Damico", 0, "tit002", "Javascript");

    $DH->altaAlumno("Nelson", "Nunez", "al010");
    $DH->altaAlumno("Gordo", "Valor", "al011");

    $DH->inscribirAlumno("al010", "c0002");

    $DH->asignarProfesores("c0002", "tit002", "ad004");

    var_dump($DH);


    
    
    