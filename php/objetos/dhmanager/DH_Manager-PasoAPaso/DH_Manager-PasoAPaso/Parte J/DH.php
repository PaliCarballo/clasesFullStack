<?php
    include_once('DigitalHouseManager.php');

    //test

    ini_set('xdebug.var_display_max_depth', 5);
    ini_set('xdebug.var_display_max_children', 256);
    ini_set('xdebug.var_display_max_data', 1024);

    $DH = new DigitalHouseManager();

    $DH->darDeAltaCurso("FullStack", "c0002", 15);
    $DH->darDeAltaCurso("Android", "c0003", 15);


    $DH->altaProfesorAdjunto("Nico", "Rodrigues", 0, "ad004", 36);
    $DH->altaProfesorTitular("Nick", "Damico", 0, "tit002", "Javascript");
    $DH->altaProfesorAdjunto("Lopi", "Lopi", 0, "ad005", 36);
    $DH->altaProfesorTitular("Andres", "Furlan", 0, "tit003", "Java");

    $DH->altaAlumno("Nelson", "Nunez", "al010");
    $DH->altaAlumno("Gordo", "Valor", "al011");
    $DH->altaAlumno("Ale", "Perez", "al012");
    $DH->altaAlumno("Sofia", "Kirchner", "al016");

    $DH->inscribirAlumno("al010", "c0002");
    $DH->inscribirAlumno("al011", "c0002");
    $DH->inscribirAlumno("al012", "c0003");
    $DH->inscribirAlumno("al016", "c0003");

    $DH->asignarProfesores("c0002", "ad004", "tit002");

    $DH->asignarProfesores("c0003", "ad005", "tit003");

    

    var_dump($DH);
