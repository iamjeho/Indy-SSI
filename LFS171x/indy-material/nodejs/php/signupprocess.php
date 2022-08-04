<?php
    include('connection.php');
    $userid  = $_POST['userid'];
    $userpw  = $_POST['userpw'];
    $username  = $_POST['username'];
    $useremail  = $_POST['useremail'];

        $userid = stripcslashes($userid);  
        $userpw = stripcslashes($userpw);  
        $username = stripcslashes($username);  
        $useremal = stripcslashes($useremail);  

        $userid = mysqli_real_escape_string($conn, $userid);  
        $userpw = mysqli_real_escape_string($conn, $userpw);  
        $username = mysqli_real_escape_string($conn, $username);  
        $useremail = mysqli_real_escape_string($conn, $useremail); 

        $sql = "INSERT INTO Users (userid, userpw, username, email) VALUES('$userid','$userpw','$username','$useremail')";
        $result = mysqli_query($conn, $sql);

        if ($result === false) {
            echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
            echo mysqli_error($conn);
        } 
        else {

            
                echo "회원가입이 완료되었습니다.";
                echo "<script>location.href='index.php'</script>";
            
        
            }
?>