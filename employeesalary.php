<?php
$conn=mysqli_connect("localhost","root","","test");

$res=mysqli_query($conn,"SELECT * FROM employee WHERE salary>50000");

while($row=mysqli_fetch_assoc($res)){
    echo $row['emp_name']." ".$row['salary']."<br>";
}
?>
