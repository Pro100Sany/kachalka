<?php
    function __autoload( $className ) 
    {
        $className = str_replace( "..", "", $className );
        require_once( "classes/$className.php" );
        $loaded_classes =  "Loaded classes/$className.php<br>";//поставь echo покаже подключенные классы
    }
    ?>