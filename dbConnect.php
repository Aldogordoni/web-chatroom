<?php
   //Creates connection to database cs250cw if possible

    // Change username and password below:
    $conn = mysqli_connect("localhost", "root", "");
    if(!$conn) {
        die ("Error connecting to MySQL: " . mysqli_error($conn));
    }

    $db_select_success =  mysqli_select_db($conn, "chatroom");

    if(!$db_select_success) {
        die ("Error selecting database: ".mysqli_error($conn));
    } else {
        echo "MySQL database: chatroom selected. <br/><br/>";
    }

?>