<?php
$name=$_GET['name'];

if($name=="")
    echo "Stranger, please tell me your name!";
elseif(in_array($name,["Rohit","Virat","Dhoni","Ashwin","Harbhajan"]))
    echo "Hello master!";
else
    echo "I don't know you!";
?>
