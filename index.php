<?php 
	session_start();

    include('config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "show_pub":
                $modulo = "publicacion";
                break;
                    
            case "default":
                echo "error404";

        }
    }

    include('vistas/' . $modulo . '/index.php'); 

 ?>