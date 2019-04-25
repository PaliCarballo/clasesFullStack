<?php
//ingreso las clases
require_once('clases/Alumno.php');
require_once('clases/Profesor.php');
require_once('clases/Curso.php');
require_once('clases/Titular.php');
require_once('clases/Adjunto.php');

//curso
$fullStack = new Curso;
$fullStack->setNombre("Full Stack TM2");
$fullStack->setCodCurso(453);
//3 Alumnos
$martina = new Alumno("Martina","Daniele",325);
$paloma = new Alumno("Paloma","Daniele",368);
$gonza = new Alumno("Gonzalo","Daniele",645);



//creo profesor Adjunto
$diego = new Adjunto;
$diego->setNombre("Diego");
$diego->setApellido("Caplan");
$diego->setCodProfesor(100);
$diego->setCantidadDeHoras(30);
//creo profesor titular
$juanca = new Titular;
$juanca->setNombre("Juanca");
$juanca->setApellido("Gonzalez");
$juanca->setCodProfesor(102);
$juanca->setEspecialidad("Base de datos");
//agrego profes a full Stack
$fullStack->setProfesorTitular($juanca);
$fullStack->setProfesorAdjunto($diego);
// var_dump ($fullStack->getProfesorAdjunto());exit;

if($fullStack->agregarAlumno($martina)){
  echo "Bienvenida ".$martina->getNombre()."!";
}
$fullStack->agregarAlumno($paloma);
$fullStack->agregarAlumno($gonza);

$fullStack->listarAlumnos();
// var_dump($fullStack);



 ?>
