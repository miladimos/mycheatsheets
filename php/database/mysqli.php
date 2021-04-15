<?php

// $db_handle = mysqli_connect($db_server_name, $db_user_name, $db_password, $db_name);

// $db_handle->set_charset('utf-8'); 

// mysqli_select_db($db_handle,$database_name);

// mysqli_query($db_handle,$query) ;

// mysqli_num_rows($result);

// mysqli_fetch_array($result);

// mysqli_close($db_handle);


// $db_handle = mysqli_connect('localhost', 'root', '', 'learn') or exit("Unable to connect to MySQL: ");

// echo $db_handle->host_info;

// $query     =  "SELECT * FROM user_details where `username` like '%m%'";
// $result = $db_handle->query($query);

// echo '<pre>';
// print_r($result);
// echo '</pre>';

// echo $result->num_rows . '<br>';

// // while($row = $result->fetch_assoc()){
// //     echo($row['username']) . '<br>';
// // }

// foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
//     echo $row['username'] . '<br>';
// }

// // $query = "DELETE FROM user_details where `username` = 'mike28'";
// // $result = $db_handle->query($query);
// // echo $db_handle->affected_rows . ' Record(s) Deleted.';

// $db_handle->close();


$connection = new mysqli("localhost", "root", "", "learn");
$stmt       = $connection->stmt_init();
$query      = "SELECT * FROM user_details WHERE username = ?";
$stmt->prepare($query);
$username = "ross95";
$stmt->bind_param('s', $username);
// b,d,i,s
$stmt->bind_result($user_id, $username, $first_name, $last_name, $gender, $password, $status);

$stmt->execute();

echo "<table border=1>";
while ($stmt->fetch()) {
    echo <<<EOS
    <tr>
    <td>$user_id<td>
    <td>$username<td>
    </tr>
EOS;
}
echo "</table>";

// //if connection failed output error message 
// if (!mysqli_select_db($dbh,'my_personal_contacts'))     

// die("Unable to select database: " . mysqli_error()); 
// die("Unable to connect to MySQL: " . mysqli_error());
// //if selection fails output error message 

// $sql_stmt = "SELECT * FROM my_contacts"; 

// $result = mysqli_query($dbh,$sql_stmt);
// //execute SQL statement 

// if (!$result)     
// //SQL select query 
//     die("Database access failed: " . mysqli_error()); 
//     //output error message if query execution failed 
    
//     // get number of rows returned 
    
//     $rows = mysqli_num_rows($result); 
// if ($rows) {     

// while ($row = mysqli_fetch_array($result)) {         
//     echo 'ID: ' . $row['id'] . '<br>';         
//     echo 'Full Names: ' . $row['full_names'] . '<br>';        
//     echo 'Gender: ' . $row['gender'] . '<br>';         
//     echo 'Contact No: ' . $row['contact_no'] . '<br>';         
//     echo 'Email: ' . $row['email'] . '<br>';         
//     echo 'City: ' . $row['city'] . '<br>';         
//     echo 'Country: ' . $row['country'] . '<br><br>';     
// } 
// } 
// mysqli_close($dbh); //close the database connection 


















// $dbh = mysqli_connect('localhost', 'root', 'melody'); 
// //connect to MySQL server if (!$dbh)     

// die("Unable to connect to MySQL: " . mysqli_error()); 
// //if connection failed output error message 

// if (!mysqli_select_db($dbh,'my_personal_contacts'))     
// die("Unable to select database: " . mysql_error()); 
// //if selection fails output error message 

// $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
// $sql_stmt .= " VALUES('Poseidon','Mail','541',' poseidon @ sea . oc ','Troy','Ithaca')"; 

// $result = mysqli_query($dbh,$sql_stmt); //execute SQL statement 

// if (!$result)     
//     die("Adding record failed: " . mysqli_error()); 
//     //output error message if query execution failed echo "Poseidon has been successfully added to your contacts list";
    
// mysqli_close($dbh); //close the database connection 









// $dbh = mysqli_connect('localhost', 'root', 'melody'); 
// //connect to MySQL server 

// if (!$dbh)    
// die("Unable to connect to MySQL: " . mysqli_error()); 
// //if connection failed output error message 

// if (!mysqli_select_db($dbh,'my_personal_contacts'))     
// die("Unable to select database: " . mysql_error()); 
// //if selection fails output error message 

// // $sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = ' poseidon @ ocean . oc ';
// // //SQL select query $sql_stmt .= " WHERE `id` = 5""; 

// $result = mysqli_query($dbh,$sql_stmt); 
// //execute SQL statement if (!$result)     

// die("Deleting record failed: " . mysqli_error()); 
// //output error message if query execution failed 

// echo "ID number 5 has been successfully updated"; 
// mysqli_close($dbh); //close the database connection 









// $dbh = mysqli_connect('localhost', 'root', 'melody'); 
// //connect to MySQL server

// if (!$dbh)     
// die("Unable to connect to MySQL: " . mysqli_error()); 
// //if connection failed output error message 

// if (!mysqli_select_db($dbh,'my_personal_contacts'))     
// die("Unable to select database: " . mysqli_error()); 
// //if selection failes output error message $id = 4; 
// //Venus's ID in the database 

// $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
// //SQL Delete query 

// $result = mysqli_query($dbh,$sql_stmt); 
// //execute SQL statement 

// if (!$result)     
// die("Deleting record failed: " . mysqli_error());
// //output error message if query execution failed 

// echo "ID number $id has been successfully deleted"; 
// mysqli_close($dbh); //close the database connection 