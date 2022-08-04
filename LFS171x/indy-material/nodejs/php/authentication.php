<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from Users where userid = '$username' and userpw = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            if($username == 'faber')
                echo "<script>location.href='http://127.0.0.1:3002'</script>";
            else if($username == 'acme')
                echo "<script>location.href='http://127.0.0.1:3003'</script>";
            else
                echo "<script>location.href='http://127.0.0.1:3000'</script>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  