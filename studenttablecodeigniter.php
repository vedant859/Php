#SQL
CREATE TABLE student (
    rollno INT PRIMARY KEY,
    name VARCHAR(50),
    class VARCHAR(20)
);

#database.php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'test',
    'dbdriver' => 'mysqli'
);

#Student.php
<?php
class Student extends CI_Controller {

    public function insertData(){

        $data = array(
            array('rollno'=>1,'name'=>'Rahul','class'=>'TY'),
            array('rollno'=>2,'name'=>'Amit','class'=>'SY'),
            array('rollno'=>3,'name'=>'Neha','class'=>'FY'),
            array('rollno'=>4,'name'=>'Pooja','class'=>'TY'),
            array('rollno'=>5,'name'=>'Ravi','class'=>'SY')
        );

        $this->load->database();

        foreach($data as $row){
            $this->db->insert('student',$row);
        }

        echo "5 Records Inserted Successfully!";
    }
}
?>
