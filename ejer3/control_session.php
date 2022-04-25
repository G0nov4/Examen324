<?php
$conexion = pg_connect("host=bxm5rxsozmrkbtp4zqiz-postgresql.services.clever-cloud.com port=5432 dbname=bxm5rxsozmrkbtp4zqiz user=u5tzekxbk9mhabeqnkwg password=3AOOYNDWKbvXHXrAVY1x");
session_start();
$user = $_POST["login"];
$pass = $_POST["pass"];

$query="SELECT * FROM ACCESO WHERE usuario='$user' AND password = '$pass'";
$consulta=pg_query($conexion,$query);
if(pg_num_rows($consulta)>0){
    $_SESSION['username']=$user;
    header("Location: index_access.php");
}
else{
    echo "Algunos datos estan mal.. :(";
}

?>