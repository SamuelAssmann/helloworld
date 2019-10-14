<?php
    $conn = mysqli_connect("localhost","luis", "dPfPuL69", "webprogrammierung");

    //check connection
    if(!$conn){
        echo 'Connection error: '.mysqli_connect_error();
    }

    //getting data from the database
    $sql = "SELECT Vorname, Nachname, EMail FROM user";

    //Creating a query & getting the output
    $output = mysqli_query($conn, $sql);

    $users = mysqli_fetch_all($output, MYSQLI_ASSOC);
    //close connection
    $conn->close();

    //print result
    print_r($users);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <p>Hallo</p>
</body>

</html>