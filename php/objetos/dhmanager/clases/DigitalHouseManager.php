<?php
  class DigitalHouseManager {
    private $listaAlumnos = [];
    private $listaProfesores = [];
    private $listaCursos= [];


    public function altaCurso($nombre, $codigoCurso, $cupoMaximoDeAlumnos){
      $nuevoCurso = new Curso;
      $nuevoCurso->setNombre("Nombre de curso");
      $nuevoCurso->setCodigoCurso(453);
      $nuevoCurso->setCupoMaximoDeAlumnos(40);
      $this->listaCursos[] = $nuevoCurso;
    }

    public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){
      $nuevoProfeAdjunto = new Adjunto;
      $nuevoProfeAdjunto->setNombre("Nombre nuevo profe adjunto");
      $nuevoProfeAdjunto->setApellido("Apellido nuevo profe adjunto");
      $nuevoProfeAdjunto->setCodigoProfesor(123);
      $nuevoProfeAdjunto->setCantidadDeHoras(0)
      $this->listaProfesores[] = $nuevoProfeAdjunto;
    }

    public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad){
      $nuevoProfeTitular = new Titular;
      $nuevoProfeTitular->setNombre("Nombre nuevo profe titular");
      $nuevoProfeTitular->setApellido("Apellido nuevo profe titular");
      $nuevoProfeTitular->setCodigoProfesor(124);
      $nuevoProfeTitular->setEspecialidad('desarrollador');
      $this->listaProfesores[] = $nuevoProfeTitular;
    }

    public function altaAlumno($nombre, $apellido, $codigoAlumno){
      $nuevoAlumno = new Alumno;
      $nuevoAlumno->setNombre("Nombre de alumno");
      $nuevoAlumno->setApellido("Apellido del alumno");
      $nuevoAlumno->setCodigoAlumno(565);
      $this->listaAlumnos[] = $nuevoAlumno;
    }

    public function inscribirAlumno($codigoAlumno, $codigoCurso){
      
    }











  }
