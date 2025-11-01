<?php

include('dbconn.php');

$name=$_POST["name"];
$comment=$_POST["comment"];

$sql= "INSERT INTO forms (name, comment) VALUES ('$name', '$comment')";

if($conn->query($sql)===TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: /index.php#feedback");

?>

