<?php
$serverName = "https://millicentdagworth.azurewebsites.net;
$connectionOptions = array(
    "Database" => "User",
    "Uid" => "mysqldbuser@millicentdagworth-mysqldbserver",
    "PWD" => "Password1"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT TOP 20 Fname as FirstName from User";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);
?>