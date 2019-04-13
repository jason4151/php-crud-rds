<?php 

  include "../inc/dbinfo.inc";

  /* Connect to MySQL and select the database. */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

  $database = mysqli_select_db($connection, DB_DATABASE);

  $employee_id = intval($_GET['id']);
  
  $query = "DELETE FROM `Employees` WHERE ID=$employee_id;";

  if(!mysqli_query($connection, $query)) echo("<p>Error deleting employee data.</p>");

  header('Location:index.php');
  exit;

?>
                