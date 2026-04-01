<?php
$conn = mysqli_connect("localhost","root","","test");

$title = $_POST['title'];

$q = "UPDATE committee 
      SET status='working' 
      WHERE cno IN (
        SELECT cno FROM event_committee 
        WHERE eno=(SELECT eno FROM event WHERE title='$title')
      )";

mysqli_query($conn,$q);
echo "Updated!";
?>
