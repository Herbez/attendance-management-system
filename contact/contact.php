<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style_dash.css">
<style type="text/css">
  .pageTitle {
    text-align: center;
  }
  body{
    background-color: #fff;
    height: auto;
  }
  .urlogo{ 
    width: 70px;
    height: 70px;
    margin-left: 200px;
  }
  .wrapper{
    margin-top: 10px;
    width: auto;
  }
 .wrapper textarea{
    height: 100px;

  }
  .back{
    margin: 10px 0px 0px 80px;
  }
  .back img{
    width: 15px;
    height: 15px;
  }
  .back a{
    text-decoration: none;
    color: #2B7F9F;
    font-family: sans-serif;
    font-size: 20px;
  }
  .submit{
    margin-top: 15px;
    height: 70px;
    border-radius: 10px;
  }
</style>
</head>

<body>
  
  <div class="wrapper">
    <form method="POST"action="insert.php" class="form">
      <img src="icons/urlogo.png" class="urlogo">
      <div class="pageTitle title" >Contact Us</div>
      
      <input type="text"name="name" class="name formEntry" placeholder="name"/>
      <input type="text" name="email"class="email formEntry" placeholder="email"/>
      <textarea name="message"class="message formEntry" placeholder="message"></textarea>
      <input type="checkbox" class="termsConditions" value="Term">
      <label style="color: grey" for="terms"> I Accept the <span style="color: #0e3721">Terms of Use</span> & 
      <span style="color: #0e3721">Privacy Policy</span>.</label><br>
      <div class="back"><a href="../index.php"> <img src="icons/back5.png"> Back </a></div>
      <button class="submit formEntry"name="insert">Submit</button>
    </form>
    <img src="icons/lower_logo.PNG"class="lower_logo">
  </div>
</body></html>