<?php
class Curso {
  private $nombre;
  private $codCurso;
  private $profesorTitular;
  private $profesorAdjunto;
  private $cupoMaximo = 0;
  private $listaDeAlumnos = [];

  public function setNombre(string $nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setCodCurso(int $codCurso){
    $this->codCurso= $codCurso;
  }
  public function getCodCurso(){
    return $this->codCurso;
  }

  public function listarAlumnos () {

    for ($i=0; $i < count($this->listaDeAlumnos); $i++) {
           $alumno = $this->listaDeAlumnos[$i];
           var_dump($alumno);
    }
  }

  public function agregarAlumno(Alumno $alumno){
    if ($this->cupoMaximo < count($this->listaDeAlumnos)) {
      $this->listaDeAlumnos[] = $alumno;
      return true;
    }
    return false;
  }

  public function getProfesorTitular(){
    return $this->profesorTitular;
  }

  public function setProfesorTitular(Titular $profesorTitular){
    $this->profesorTitular = $profesorTitular;
  }

  public function getProfesorAdjunto(){
    return $this->profesorAdjunto;
  }

  public function setProfesorAdjunto(Adjunto $profesorAdjunto){
    $this->profesorAdjunto = $profesorAdjunto;
  }

  public fuction getCupoMaximoDeAlumnos(){
    return $this->cupoMaximo;
  }
  public function setCupoMaximoDeAlumnos($cupo){
    $this->cupo
  }

}
 ?>
