<?
    $host    = "localhost"; // Host db
    $ipLocal = "10.0.0.201.";
    $db      = "almacen";
    $con     = mysqli_connect($host,"root","");
    mysqli_select_db( $con, $db ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>
