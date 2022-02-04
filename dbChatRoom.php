<?php
    require_once("dbConnect.php"); 
?>

<div> 
    <h1 style="font-family: Comic Sans"> PP Suc Coc </h1>
</div> 

<form formaction="dbChatRoom.php" method="post">
    <input type="text" name="message">
    <input type="submit" value="Send">

</form>

<?php
    if(isset($_POST["message"])){
        $message = $_POST["message"];
        
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO message VALUE (NULL, 1, 0, '$time', '$message')";
        $query = mysqli_query($conn, $sql);
        if(!$query){
            die("Error query insert" . "<br>" . mysqli_error($conn));
        }
        else{
            print("Message sent<br><br>");
            print($message);
        }
    }
?>
