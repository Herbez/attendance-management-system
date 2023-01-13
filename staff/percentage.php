
<?php
$dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
$sql= "SELECT status FROM students WHERE reg_number='19RP08509' AND course='ICT101' AND status='present' ";
$count=$dbh->prepare($sql);
$count->execute();
$cnt=$count->rowCount();
echo "Number of present : ". $count->rowCount()."<br>";

$sql= "SELECT course_times FROM students WHERE course='ICT101' ";
$query=$dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount()>0){

  foreach ($results as $result) {
  }
  $tms=$result->course_times;
  echo "Number of course to be studied : ".$result->course_times."<br>";

  $perc=$cnt/$tms*100;
  echo "Percentage :".$perc."%";

}

?>