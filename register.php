<?php
// 1-Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_db";

$connection_db = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($connection_db->connect_error) {
  die("Connection failed: " . $connection_db->connect_error);
}
// echo "Connected successfully";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    

    $first_Name = addslashes($_POST['first_Name']);
    $last_Name = addslashes($_POST['last_Name']);
    $email = addslashes($_POST['email']);
    $nationalID = addslashes($_POST['nationalID']);
    $phone_number = addslashes($_POST['phone_number']);
    $send_message = addslashes($_POST['send_message']);
    $date_time = date('Y/m/d H:i:s');

    $sql_query = "INSERT INTO form_details (first_Name, last_Name, email, nationalID, phone_number, send_message, date_time) VALUES ('$first_Name', '$last_Name', '$email', '$nationalID', '$phone_number', '$send_message','$date_time')";

if ($connection_db->query($sql_query) === TRUE) {
  echo "<br><br> <div class='popup_mess'> New record created successfully </div>";
} 
else {
  echo "Error: " . $sql_query . "<br>" . $connection_db->error;
}
}

$connection_db->close();

?>