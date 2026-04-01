#SQL
CREATE TABLE teacher (
    tno INT PRIMARY KEY,
    tname VARCHAR(50),
    qualification VARCHAR(50),
    salary INT
);

INSERT INTO teacher VALUES
(1,'Rahul','MSc',50000),
(2,'Anita','PhD',80000),
(3,'Suresh','MCA',60000);

#HTML
<!DOCTYPE html>
<html>
<head>
<script>
function showTeacher(str){
    if(str==""){
        document.getElementById("result").innerHTML="";
        return;
    }

    let x = new XMLHttpRequest();

    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    x.open("GET","getTeacher.php?tname="+str,true);
    x.send();
}
</script>
</head>

<body>

<h2>Select Teacher</h2>

<select onchange="showTeacher(this.value)">
    <option value="">Select</option>
    <option value="Rahul">Rahul</option>
    <option value="Anita">Anita</option>
    <option value="Suresh">Suresh</option>
</select>

<div id="result"></div>

</body>
</html>


#PHP
<?php
$conn = mysqli_connect("localhost","root","","test");

$name = $_GET['tname'];

$q = "SELECT * FROM teacher WHERE tname='$name'";
$res = mysqli_query($conn,$q);

if($row = mysqli_fetch_assoc($res)){
    echo "<table border=1>";
    echo "<tr><th>No</th><th>Name</th><th>Qualification</th><th>Salary</th></tr>";
    echo "<tr>";
    echo "<td>".$row['tno']."</td>";
    echo "<td>".$row['tname']."</td>";
    echo "<td>".$row['qualification']."</td>";
    echo "<td>".$row['salary']."</td>";
    echo "</tr>";
    echo "</table>";
}
?>
