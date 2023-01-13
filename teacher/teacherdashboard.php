<?php 
session_start();  
$tid=$_SESSION["email"];
 if(isset($_SESSION["email"]))  
 {  
  $dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
  $sql="SELECT * FROM lecturer WHERE email = ? GROUP BY level";
  $query=$dbh->prepare($sql);
  $query->execute(array($tid));
  $results=$query->fetchAll(PDO::FETCH_OBJ);
	}
  else  
 {  
      header("location:teacherlogin.php");  
 }  
 ?>


	
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Attendance Management System</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style2.css">
	<style type="text/css">
		table{
				width: 70%;
		}
		 table a{
      margin: 15px 0px;
      border: 1px solid #000;
      padding: 5px 15px;
      text-decoration: none;
      color: #333;

    }
.sidenav{
	width: 140px;
}
.mysearch{
	position: absolute;
	left: 1070px;	
	top: 80px;
	max-width: 500px;
}
		th{
			padding: 12px;
			background-color: #2B7F9F;
			color: #fff;
			border: none;

		}
		td{
			padding: 10px 0px;
			border-color: #ddd;
			text-align: center;
		}

.crsatt{
	width: 1242px;
	position: absolute;
	margin-top: 58px; 
	border-top: none;
	right: 180px;

}
.coursenav{
	position: absolute;
	top: 220px;
	width: 135px;
	text-align: center;
	border-radius: 0px 15px 0px 0px;

}
.coursenav button{
	display: block;
	width: 135px;
	padding: 8px 5px;
	background-color: #fff;
	color: #000;
	font-size: 15px;
	border: 1px solid #ddd;

}

#cnavttl{
	padding: 12px 5px;
	background-color: #2B7F9F;
	color: #fff;
	border-radius: 0px 15px 0px 0px;
}

.coursenav2{
	position: absolute;
	top: 380px;
	width: 135px;
	text-align: center;
	border-radius: 0px 15px 0px 0px;

}

.coursenav2 button{
	display: block;
	width: 135px;
	padding: 8px 5px;
	background-color: #fff;
	color: #000;
	font-size: 15px;
	border: 1px solid #ddd;

}

#cnavttl2{
	padding: 12px 5px;
	background-color: #2B7F9F;
	color: #fff;
	border-radius: 0px 15px 0px 0px;
}

.result{
	position: absolute;
	left: 200px;
	top: 130px;
	border-collapse: collapse;
	border: none;
}
.backhome{
      position: absolute;
      right: 1360px;
    }
	.stud_det label{
		border: none;	
		display: block;
		margin: 5px 0px;
		padding: 3px 0px;
		width: 200px;
		font-family: sans-serif;
		color: #2B7F9F;
		font-weight: bold;
		font-size: 15px;
}
.stud_det{
	position: absolute;
	top: 20px;
	left: 1070px;
}
a img{
	width: 20px;
	height: 20px;
	position: absolute;
	left: 1300px;
	top: 25px;
}
.viewbtn{
	border-radius: 10px;
}
</style>
</head>
<body>
<div class="logos">
	<div class="tchattdview">View</div>
	<img src="../icons/urlogo.png" class="urlogo">
	<div class="urname">University Of</div>
	<div class="rda">Rwanda</div> 
	<div class="mysearch"> 
 	<form class="example" action="" style="max-width:300px;">
  	<input type="text" placeholder="Search by date..." name="search2">
  	<button type="submit"><i class="fa fa-search"></i></button>
	</form> 
	</div>

	<a href="teacherlogout.php" onclick="return confirm(' Are you Sure want to Logout ?')">
	<img src="../icons/logout1.png" ></a>

	<?php
			if($query->rowCount()>0){

		foreach ($results as $result) {
	?>	
<?php
	}
	?>
	<div class="stud_det">	
  <?php echo '<label>'.$result->lecture_firstname.' '.$result->lecture_lastname.'</label>' ; ?>
</div>
</div>



<div class="tchlist">Level Attendance View</div>
	


	<div class="coursenav">
		<div id="cnavttl">
		Levels
		</div>
	<?php
foreach ($results as $result) {
	?>	
	<form method="POST" action="">
	<input type="text" name="teml" value="<?php echo $result->email;?>" hidden>	
	<input type="text" name="lid" value="<?php echo $result->level;?>" hidden>
    <button type="submit" name="result"><?php echo $result->level;?></button>
    </form>


<?php
	}
	
	}

$dbh=null;
	?>
	</div>

<div class="coursenav2">
	<div id="cnavttl2">
	Course</div>


 
<?php 
if (isset($_POST['result'])) {
	// code...
	$lid = $_POST['lid'];
	$teml = $_POST['teml'];
	$dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
	$sql = "SELECT course FROM lecturer WHERE email='".$teml."' AND level='".$lid."' GROUP by course";
	$query=$dbh->prepare($sql);
  	$query->execute();
  	$results=$query->fetchAll(PDO::FETCH_OBJ);
  	if($query->rowCount()>0){

    foreach ($results as $result) {
      ?>
     <form method="POST" action="">
     	<input type="text" name="cid" value="<?php echo $result->course;?>" hidden>
    	<button type="submit" name="result2"><?php echo $result->course;?></button>
    	</form>
      <?php
    }
  }
  $dbh=null;

}

?>
	
</div>


	<table border="1" class="result">
	<tr>
    <th class="lefthd">Reg Number</th>
    <th>First name</th>
    <th>Last name</th>
    <th class="righthd">View</th>
    </tr>
		
<?php
if (isset($_POST['result2'])) {
  $cid = $_POST['cid'];
  $dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
  $sql="SELECT * FROM students INNER JOIN lecturer WHERE students.course ='".$cid."' AND lecturer.course='".$cid."' GROUP by students.reg_number;";
  $query=$dbh->prepare($sql);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);

  if($query->rowCount()>0){

    foreach ($results as $result) {
      ?>
      
      <tr>
        <td><?php echo $result->reg_number;?></td>
        <td><?php echo $result->first_name;?></td>
        <td><?php echo $result->last_name;?></td>
        <td ><a href="stdcrsview.php?reg=<?php echo $result->reg_number;?>" class="viewbtn">View</a></td>      
      </tr>
      <?php
    }
  }
  $dbh=null;
}
?>
</table>


<footer>
	© 2020 University of Rwanda. All Right Reserved
</footer>
</body>
</html>
