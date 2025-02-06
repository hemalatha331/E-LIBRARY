<?php 
// DB credentials.
define('DB_HOST','localhost:3307'); // Use the default port number
define('DB_USER','root');
define('DB_PASS','abc123');
define('DB_NAME','library');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error handling
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
