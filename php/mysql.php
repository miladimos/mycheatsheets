<?php

$db_handle = mysqli_connect($db_server_name, $db_user_name, $db_password);

mysqli_select_db($db_handle,$database_name);

mysqli_query($db_handle,$query) ;

mysqli_num_rows($result);

mysqli_fetch_array($result);

mysqli_close($db_handle);



$dbh = mysqli_connect('localhost', 'root', 'melody'); 
//connect to MySQL server if (!$dbh)     

die("Unable to connect to MySQL: " . mysqli_error());

//if connection failed output error message 
if (!mysqli_select_db($dbh,'my_personal_contacts'))     

die("Unable to select database: " . mysqli_error()); 
//if selection fails output error message 

$sql_stmt = "SELECT * FROM my_contacts"; 
//SQL select query 

 $result = mysqli_query($dbh,$sql_stmt);
 //execute SQL statement 
 
if (!$result)     
    die("Database access failed: " . mysqli_error()); 
    //output error message if query execution failed 
    
    $rows = mysqli_num_rows($result); 
       // get number of rows returned 

if ($rows) {     

while ($row = mysqli_fetch_array($result)) {         
    echo 'ID: ' . $row['id'] . '<br>';         
    echo 'Full Names: ' . $row['full_names'] . '<br>';        
    echo 'Gender: ' . $row['gender'] . '<br>';         
    echo 'Contact No: ' . $row['contact_no'] . '<br>';         
    echo 'Email: ' . $row['email'] . '<br>';         
    echo 'City: ' . $row['city'] . '<br>';         
    echo 'Country: ' . $row['country'] . '<br><br>';     
} 
} 
mysqli_close($dbh); //close the database connection 


















$dbh = mysqli_connect('localhost', 'root', 'melody'); 
//connect to MySQL server if (!$dbh)     

die("Unable to connect to MySQL: " . mysqli_error()); 
//if connection failed output error message 

if (!mysqli_select_db($dbh,'my_personal_contacts'))     
die("Unable to select database: " . mysql_error()); 
//if selection fails output error message 

$sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
$sql_stmt .= " VALUES('Poseidon','Mail','541',' poseidon @ sea . oc ','Troy','Ithaca')"; 

$result = mysqli_query($dbh,$sql_stmt); //execute SQL statement 

if (!$result)     
    die("Adding record failed: " . mysqli_error()); 
    //output error message if query execution failed echo "Poseidon has been successfully added to your contacts list";
    
mysqli_close($dbh); //close the database connection 









$dbh = mysqli_connect('localhost', 'root', 'melody'); 
//connect to MySQL server 

if (!$dbh)    
die("Unable to connect to MySQL: " . mysqli_error()); 
//if connection failed output error message 

if (!mysqli_select_db($dbh,'my_personal_contacts'))     
die("Unable to select database: " . mysql_error()); 
//if selection fails output error message 

$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = ' poseidon @ ocean . oc ';
//SQL select query $sql_stmt .= " WHERE `id` = 5"; 

$result = mysqli_query($dbh,$sql_stmt); 
//execute SQL statement if (!$result)     

die("Deleting record failed: " . mysqli_error()); 
//output error message if query execution failed 

echo "ID number 5 has been successfully updated"; 
mysqli_close($dbh); //close the database connection 









$dbh = mysqli_connect('localhost', 'root', 'melody'); 
//connect to MySQL server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_error()); 
//if connection failed output error message 

if (!mysqli_select_db($dbh,'my_personal_contacts'))     
die("Unable to select database: " . mysqli_error()); 
//if selection failes output error message $id = 4; 
//Venus's ID in the database 

$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
//SQL Delete query 

$result = mysqli_query($dbh,$sql_stmt); 
//execute SQL statement 

if (!$result)     
die("Deleting record failed: " . mysqli_error());
//output error message if query execution failed 

echo "ID number $id has been successfully deleted"; 
mysqli_close($dbh); //close the database connection 