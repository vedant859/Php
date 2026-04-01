#Controller
public function index(){
    $data['students'] = $this->db->get('student')->result();
    $this->load->view('student_view',$data);
}

#View
<?php foreach($students as $s){ ?>
    <?php echo $s->rollno." ".$s->name." ".$s->class."<br>"; ?>
<?php } ?>
