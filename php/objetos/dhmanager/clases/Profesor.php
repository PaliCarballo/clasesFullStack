<?php
  class Profesor {
    protected $nombre;
    protected $apellido;
    protected $antiguedad = 0;
    protected $codProfesor;

    public function setNombre(string $nombre) {
      $this->nombre = $nombre;
    }
    public function getNombre() {
      return $this->nombre;
    }
    public function setApellido(string $apellido) {
      $this->apellido = $apellido;
    }
    public function getApellido() {
      return $this->apellido;
    }
    public function setAntiguedad(int $antiguedad) {
      $this->antiguedad = $antiguedad;
    }
    public function getAntiguedad() {
      return $this->antiguedad;
    }
    public function setCodProfesor(int $codProfesor) {
      $this->codProfesor = $codProfesor;
    }
    public function getCodProfesor() {
      return $this->codProfesor;
    }
  }
