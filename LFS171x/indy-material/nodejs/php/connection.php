<?php      
    $conn = new mysqli('mysql_db','root','root','login');

    if($conn -> connect_errno){
        die('Connect Error: '.$conn->connect_error);
    }
?>  

<?php
$query = "SELECT * FROM Users";
$result = $conn->query($query) or die("select error: ". $conn-error);

// $row = $result->fetch_object();
// echo "id: $row->userid / password: $row->userpw / name: $row->username<br>";
// ?>