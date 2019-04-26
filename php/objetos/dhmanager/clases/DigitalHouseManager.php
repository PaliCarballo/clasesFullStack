<?php
  class DigitalHouseManager {
    private $listaAlumnos = [];
    private $listaProfesores = [];
    private $listaCursos= [];


    public function altaCurso($nombre, $codigoCurso, $cupoMaximoDeAlumnos){
      $nuevoCurso = new Curso;
      $nuevoCurso->setNombre($nombre);
      $nuevoCurso->setCodigoCurso($codigoCurso);
      $nuevoCurso->setCupoMaximoDeAlumnos($cupoMaximoDeAlumnos);
      $this->listaCursos[] = $nuevoCurso;
    }

    public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){
      $nuevoProfeAdjunto = new Adjunto;
      $nuevoProfeAdjunto->setNombre($nombre);
      $nuevoProfeAdjunto->setApellido($apellido);
      $nuevoProfeAdjunto->setCodigoProfesor($codigoProfesor);
      $nuevoProfeAdjunto->setCantidadDeHoras($cantidadDeHoras)
      $this->listaProfesores[] = $nuevoProfeAdjunto;
    }

    public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad){
      $nuevoProfeTitular = new Titular;
      $nuevoProfeTitular->setNombre($nombre);
      $nuevoProfeTitular->setApellido($apellido);
      $nuevoProfeTitular->setCodigoProfesor($codigoProfesor);
      $nuevoProfeTitular->setEspecialidad($especialidad);
      $this->listaProfesores[] = $nuevoProfeTitular;
    }

    public function altaAlumno($nombre, $apellido, $codigoAlumno){
      $nuevoAlumno = new Alumno($nombre, $apellido, $codigoAlumno);
      $this->listaAlumnos[] = $nuevoAlumno;
    }

    public function inscribirAlumno($codigoAlumno, $codigoCurso){
        foreach ($this->alumnos as $alumno) {
          if ($codigoAlumno == $alumno->getCodAlumno()) {
            // encontre al alumno
            $alumnoEncontrado = $alumno;
            break;
          }
        }
        if (!isset$cursoEncontrado) {
          // code...
        }
    }

    public function asignarProfesores($codigoCurso, $codigoProfesorTitular, $codigoProfesorAdjunto){
      
    }











  }
