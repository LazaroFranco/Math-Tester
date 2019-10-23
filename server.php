<?php

if(isset($_POST['submit'])) {

  $add = $_REQUEST['add'];
  $subtract = $_POST['subtract'];
  $mutiply = $_POST['multiply'];
  $divide = $_POST['divide'];

  $first_number = $_POST['first_number'];
  $second_number = $_POST['second_number'];
  $answer = $_POST['answer'];
 
  $range_start1 = $_POST['range_start1'];
  $range_end1 = $_POST['range_end1'];

  $range_start2 = $_POST['range_start2'];
  $range_end2 = $_POST['range_end2'];

  $range1 = range($range_start1, $range_send1);
  $range2 = range($range_start2, $range_send2);
}
  $total_count = 0;
  $correct_count = 0;

 

?>
