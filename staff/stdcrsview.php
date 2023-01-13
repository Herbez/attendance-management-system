<?php


try{
	$dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
	$sql="SELECT * FROM students where reg_number=? GROUP BY course";
	$query=$dbh->prepare($sql);
	$id=$_GET['reg'];
	$query->execute(array($id));
	$results=$query->fetchAll(PDO::FETCH_OBJ);
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
.sidenav{
	width: 140px;
}
.mysearch{
	position: absolute;
	right: 6px;	
	top: 130px;
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
		.total{
	background-color: #2B7F9F;
  text-align: center;
  width: 50px;
  position: absolute;
  right: 20px;
  top: 200px;
  color: #fff;
  width: 111px;
	height: 55px;
	border-radius: 60px 60px 0px 0px;
	padding-top: 13px;
	font-family: sans-serif;

}
	.percentage{
		color: #2B7F9F;
		border: 1px solid #2B7F9F;
		border-radius: 0px 0px 60px 60px;
		text-align: center;
		width: 111px;
		height: 55px;
		margin: 135px 0px 0px 1235px;
		padding-top: 13px;
		font-weight: 50px;
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
	.stud_det input[type=text]{
		border: none;	
		border-bottom: 1px solid #2B7F9F; 
		display: block;
		margin: 5px 0px;
		padding: 3px 0px;
		padding-left: 5px;
		outline: 0px;
		width: 200px;
		font-family: sans-serif;
		color: #2B7F9F;
		font-weight: bold;
		font-size: 15px;
}
.stud_det{
			position: absolute;
			left: 1140px;
			top: 50px;
}


</style>
</head>
<body>
<div class="logos">
	<div class="tchattdview">View</div>
	<img src="icons/urlogo.png" class="urlogo">
	<div class="urname">University Of</div>
	<div class="rda">Rwanda</div> 
	<div class="backhome">	

	<a href="staffdashboard.php"><img src="icons/home6.png" class="homeicon">
	<div class="linkhome">Home</div></a>	

	<form action="stdattdview.php" method="POST">
	<button type="submit" name="bck" onclick="javascript:history.go(-1)">
	<a href=""><img src="icons/back6.png" class="backicon">
	<div class="linkback">Back</div></a>
	</button>
	</form>
	
</div>
<!--
	<div class="mysearch"> 
 	<form class="example" action="/action_page.php" style="max-width:300px;">
  <input type="text" placeholder="Search by date..." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form> 
</div>
-->
	<?php
			if($query->rowCount()>0){

		foreach ($results as $result) {
	?>	
<?php
	}
	?>
	<form class="stud_det">	
  <input type="text" placeholder="Student's Name" name="" value="<?php echo $result->first_name;?> <?php echo $result->last_name;?>">
  <input type="text" placeholder="Student's RegNo" name="" value="<?php echo $result->reg_number;?>">
</form>
</div>

<div class="total" >
	Total<div>%</div>
</div>





<div class="tchlist">Personal Attendance View</div>
	
	<div class="main">
	<table border="1" class="result">
	<tr>
		<th class="lefthd">Date</th>
		<th>Time In</th>
		<th>Time Out</th>
		<th>Range</th>
		<th class="righthd">Status</th>
		</tr>
		
		
	</div>

	<div class="coursenav">
		<div id="cnavttl">
		List of Courses
		</div>
	<?php
foreach ($results as $result) {
	?>	
		<form method="POST" action="">
		<input type="text" name="rid" value="<?php echo $result->reg_number;?>" hidden>	
		<input type="text" name="cid" value="<?php echo $result->course;?>" hidden>
    <button type="submit" name="result"><?php echo $result->course;?></button>
    </form>


<?php
	}
	$dbh=null;
	}

}catch(PDOException $e){
	echo "error.".$e->getMessage();
} 
	?>
	</div>

<?php
if (isset($_POST['result'])) {
	$cid = $_POST['cid'];
	$rid = $_POST['rid'];
	$dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
	$sql="SELECT * FROM students where course='".$cid."'  AND reg_number = '".$rid."' ORDER BY date ASC";
	$query=$dbh->prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);

	if($query->rowCount()>0){

		foreach ($results as $result) {
			?>
			
			<tr>
				<td><?php echo $result->date;?></td>
				<td><?php echo $result->time_in;?></td>
				<td><?php echo $result->time_out;?></td>
				<td><?php echo $result->ranges;?></td>
				<td><?php 
					if ($result->status=="present") {
					echo '<label style="color:green;">'.$result->status.'</label>';
				}else {
					echo '<label style="color:red;">'.$result->status.'</label>';
				}
						?>
				</td>
			</tr>

			<?php
		}
	}
	$dbh=null;
}
?>

<div class="percentage">
<!-- display percentage of attendance -->
<?php
if (isset($_POST['result'])) {
$cid = $_POST['cid'];
$rid = $_POST['rid'];
$dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
$sql= "SELECT status FROM students WHERE reg_number='".$rid."' AND course='".$cid."' AND status='present' ";
$count=$dbh->prepare($sql);
$count->execute();
$cnt=$count->rowCount();

$sql2= "SELECT status FROM students WHERE reg_number='".$rid."' AND course='".$cid."' ";
$count2=$dbh->prepare($sql2);
$count2->execute();
$cnt2=$count2->rowCount();

$perc=$cnt*100/$cnt2;
echo (int)$perc."%";

}
?>

</div>

<footer>
	© 2020 University of Rwanda. All Right Reserved
</footer>
</body>
</html>