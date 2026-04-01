#SQL
Student(stud_id, name, class)
Competition(c_no, c_name, type)
Participation(stud_id, c_no, rank, year)

<?php
$conn = mysqli_connect("localhost","root","","test");
$name = $_POST['cname'];

$q = "SELECT s.* FROM student s
JOIN participation p ON s.stud_id=p.stud_id
JOIN competition c ON c.c_no=p.c_no
WHERE c.c_name='$name' AND p.rank=1";

$res = mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($res)){
    echo $row['name']."<br>";
}
?>
