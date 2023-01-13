<?php 
 
try{
  $dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
  $sql="SELECT DISTINCT level FROM lecturer";
  $query=$dbh->prepare($sql);
  $query->execute();
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
		.levelnav{
       position: absolute;
  top: 180px;
  width: 160px;
  text-align: center;
  border-radius: 0px 15px 0px 0px;
    }
     th{
      border: none;
      padding: 15px 0px;
      background-color: #2B7F9F;
      color: #fff;
      text-align: center;
    }
    
    a{
      text-decoration: none;
      color: #000;
    }
    td{
      padding:7px 0px;
      text-align: center;
      border: 1px solid #ddd;
      border-top: none;
      width: auto;
    }
    .levelnav button{
      border: none;
      font-size: 15px;
    }
    table{
      border: none;
      width: 80%;

    }
    table a{
      margin: 15px 0px;
      border: 1px solid #000;
      padding: 5px 15px;
      border-radius: 10px;
    }
    .eml{
      color: #2b7f9f;
    }
    .backhome{
      position: absolute;
      right: 1360px;
    }
	</style>
</head>
<body>
<div class="logos">
	<div class="tchattdview">Teacher's Attendance</div>
	<img src="icons/urlogo.png" class="urlogo">
	<div class="urname">University Of</div>
	<div class="rda">Rwanda</div>	
  <div class="backhome">
	<a href="staffdashboard.php"><img src="icons/back6.png" class="backicon"><div class="linkhome">Home</div></a>
	<a href="staffdashboard.php"><img src="icons/home6.png" class="homeicon"><div class="linkback">Back</div></a>
  </div>
	<div class="mysearch">
	<form class="example" action="" style="max-width:300px;">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>	
</div>
<div class="tchlist">List Of Teachers</div>
<div class="levelnav">

    <table>
        <tr>
          <th style="border-radius: 0px 15px 0px 0px;">List of Levels</th>
        </tr>

    <?php
    if($query->rowCount()>0){
    foreach ($results as $result) {
      ?>
      
      <tr>
      <form method="POST" action="">
    <input type="text" name="lid" value="<?php echo $result->level;?>" hidden>
    <td><button type="submit" name="levelresult"><?php echo $result->level;?></button></td>
    </form>
    </tr> 
      <?php
    }
  }
  $dbh=null;
}

catch(PDOException $e){
  echo "error.".$e->getMessage();
} 

 ?>

 </table>
 
</div>

		<footer>
			© 2020 University of Rwanda. All Right Reserved
		</footer>
<script>

</script>		
</body>
</html>
<table border="1" >
  <tr>
    <th class="lefthd">First names</th>
    <th >Last names</th>
    <th>Phone number</th>
    <th>Email</th>
    <th>Status</th>
    <th class="righthd">View</th>
    </tr>
<?php
if (isset($_POST['levelresult'])) {
  $lid = $_POST['lid'];
  $dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
  $sql="SELECT * FROM lecturer where level='".$lid."' GROUP BY phone_number ";
  $query=$dbh->prepare($sql);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);

  if($query->rowCount()>0){

    foreach ($results as $result) {
      ?>
      
      <tr>
      	<td><?php echo $result->lecture_firstname;?></td>
        <td><?php echo $result->lecture_lastname;?></td>
        <td><?php echo $result->phone_number;?></td>
        <td class="eml"><?php echo $result->email;?></td>
        <td></td>
        <td><a href="tchcrsview.php?phone=<?php echo $result->phone_number;?> & level=<?php echo $result->level;?>">View</a></td>      
      </tr>
      <?php
    }
  }
  $dbh=null;
}
?>
</table>