//student.xml//
<students>
  <student>
    <roll>1</roll>
    <name>Rahul</name>
    <address>Pune</address>
    <college>ABC</college>
    <course>BSc</course>
  </student>
</students>

<?php
$xml = simplexml_load_file("student.xml");
$course = $_GET['course'];

echo "<table border=1>";
foreach($xml->student as $s){
    if($s->course == $course){
        echo "<tr><td>$s->roll</td><td>$s->name</td></tr>";
    }
}
echo "</table>";
?>
