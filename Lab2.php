<html>
<head>
<title>List of KL Restaurant</title>
</head>
<body>
<center>
<h1>List of KL Restaurant</h1>
<!--create table structure using HTML first-->
<table border="1">
<tr>
<th>Restaurant ID</th>
<th>Restaurant Name</th>
<th>Address</th>
<th>Phone</th>
</tr>
<tr>
<th>0</th>
<th>Subway Restaurant</th>
<th>Menara Standard Chartered, TPM</th>
<th>03-22441234</th>
</tr>
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
	
		 $tsql= "SELECT * FROM [dbo].[restaurant]";
		 $getResults= sqlsrv_query($conn, $tsql);
		 if ($getResults == FALSE)
			 {
				 die(sqlsrv_errors());
				 }	 
 
       while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
		   {
			   echo "<tr>";
			   echo "<td>". $row['restaurant_id'] . "</td>";
			   echo "<td>". $row['restaurant_name'] ."</td>";
			   echo "<td>". $row['restaurant_address'] . "</td>";
			   echo "<td>". $row['restaurant_phone'] . "</td>";
			   echo "</tr>";
			   }
			   sqlsrv_free_stmt($getResults);
			   ?> 

</table>
</center>
</body>
</html> 
