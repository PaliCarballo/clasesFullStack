<?php
class Alumno
{
  private $nombre;
  private $apellido;
  private $codAlumno;

  public function __construct(string $nombre, string $apellido, int $codigo){
    $this->setNombre($nombre);
    $this->setApellido($apellido);
    $this->setCodAlumno($codigo);
  }
  public function setNombre(string $nombre){
    $this->nombre=$nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido(string $apellido){
    $this->apellido=$apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setCodAlumno(int $codigo){
    $this->codAlumno=$codigo;
  }
  public function getCodAlumno(){
    return $this->codAlumno;
  }



}
