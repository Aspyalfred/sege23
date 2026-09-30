
<?php 

#&#x20;   session\_start();

include "../../config/database.php";


// admin user can access this page

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {

#&#x20;   header("Location: ../../index.php");

#&#x20;   exit;

}

$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

// Delete SQL Command

mysqli_query($conn, "DELETE FROM subjects WHERE id=$id");


header('Location: index.php');

exit;
