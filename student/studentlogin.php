<?php  
 session_start();   
 $message = "";  
 try  
 {   
      $dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login_user"]))  
      {  
           if(empty($_POST["reg_number"]) || empty($_POST["password"]))  
           {  
                $message = '<label>Reg Number and Password are required!</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM students WHERE reg_number = :reg_number AND password = :password";  
                $statement = $dbh->prepare($query);  
                $statement->execute(  
                     array(  
                          'reg_number'     =>     $_POST["reg_number"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["reg_number"]=$_POST['reg_number'] ;
                     header("location:studentdashboard.php");  
                }  
                else  
                {  
                     $message = '<label>Incorrect Reg Number or Password </label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?> 
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Attendance Management System</title>
     <style type="text/css">
          body {
               margin: 0px;
               padding: 0px;
               background-image: url("../image/bg.png");
               background-size: 100%;
          }
          .stafflogin form{
               position: absolute;
               right: 120px;
               top: 260px;
               
          }
          .stafflogin h2{
               position: absolute;
               right: 200px;
               top: 100px;
               font-family: sans-serif;
               font-size: 35px;
          }
          .stafflogin hr{
               position: absolute;
               right: 200px;
               top: 170px;
               width: 80px;
               border: 3px solid #2b7f9f;
          }
          .stafflogin input[type="text"],[type="password"]{
               height: 30px;
               width: 300px;
               margin: 20px 0px;
               border: none;
               border-bottom: 2px solid #ddd;
               background-color: whitesmoke;
               outline: none;
               font-family: sans-serif;
               font-size: 17px;
          }

          .stafflogin a{
               text-decoration: none;
               font-size: 17px;
               font-family: sans-serif;
               font-style: italic;
               color: #2b7f9f;
          }
          .stafflogin input[type="submit"]{
               margin-top: 30px;
               padding: 15px 130px;
               font-size: 20px;
               font-style: 'Times New Roman';
               background-color: #2b7f9f;    
               color: #fff;
               border: none;
               border-radius: 50px;
          }
          .error {
              width: 300px;
               position: absolute;
               right: 125px;
               top: 230px;
              color: #a94442;
              text-align: left;
          }
     </style>
</head>
<body>
<div class="stafflogin">

<h2>Login</h2> 
<hr>   
               <?php  
                if(isset($message))  
                {  
                     echo '<label class="error">'.$message.'</label>';  
                }  
                ?>  
<form action="" method="POST">
     <input type="text" name="reg_number" placeholder="Reg Number"><br>
     <input type="password" name="password" placeholder="Password"><br>
     <a href="">Forgot Password?</a><br>
     <input type="submit" name="login_user" value="Login">
</form>
</div>
</body>
</html>