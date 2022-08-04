<?php
    include './connection.php';

    $userid = $_GET['userid'];
    $sql = "select userid from Users where userid='$userid'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    echo isset($data['userid']) ? "X" : "O";
?>