<?php
    use Controllers\CourseController;
    use Models\Course;
    // require_once "Controllers/CourseController.php";
    // require_once "Models/Course.php";

    // con esto se importa
    spl_autoload_register(function ( $clase ) {
        //echo str_replace( '\\', '/', $clase . '.php');

        // Si el archivo Course.php existe
        if (file_exists( str_replace( '\\', '/', $clase . '.php') )) {
            require_once str_replace( '\\', '/', $clase . '.php'); 
        } else {
            require_once './Models/NotFound.php';
        }
        
    });

    $course = new CourseController();
    $course->saludar();