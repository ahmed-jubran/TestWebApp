<?php
 $connectionInfo = array("UID" => "TP045739", "pwd" => "Ahmad200920093", "Database" => "AhmedDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sqlahmeddb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	 //Establishes the connection
	  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
  
  $sql = "INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?, ?, ?)";
  $params = array("Burger King", "Bukit Jalil", "03-11223444");

 

  $stmt = sqlsrv_query( $conn, $sql, $params);
  if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
   }
?>
