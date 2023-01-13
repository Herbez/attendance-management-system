<!DOCTYPE html>
<html>
    <head>
        <title>Attendance Management System</title>
        <link rel="stylesheet" href="css/style_dash.css">
        <style type="text/css">
            
            .menu1,.menu2,.menu3,.menu4 {
                    padding-top: 10px;
                    height: 55px;
                    width: 500px;
                    font-size: 25px;
                    margin-left: 550px;
                    margin-top: 50px;
            }
            .menu1 a,.menu2 a,.menu3 a,.menu4 a{
                text-decoration: none;
                color: whitesmoke;
                text-shadow: 2px 6px 4px rgba(0, 0, 0, 0.5);

            }
            p{
                margin-left: 280px;
                
            }
            .whole img{
                margin-left: 430px;
            }
            .whole,.left_logo img{
                margin-left: 0px;      
            }
            .whole{
                height: 100%;
            }

            .whole,.lower_logo{
                margin-right: 10px;
            }
            .left_logo{
                height: 100%;
                position: absolute;
                left: 0px;
            }
            .left_logo img{
                padding-top: 50px;
                padding-left: 20px;
            }
            .whole p{
                font-family: 'Sansita';
                font-style: normal;
                font-weight: 700px;
                font-size: 30px;
                line-height: 50px;
                color: #000000;
                text-shadow: 2px 6px 4px rgba(0, 0, 0, 0.4);

            }

        </style>
    </head>
    <body>
        <div class="whole">
        <div class="right_content">
        <P>Welcome to smart Attendance management system</P>
         <img src="icons/student.PNG"class="img1"><div class="menu1"><a href="student/studentlogin.php"> Student</a></div>
         <img src="icons/lecturer.PNG"class="img2"><div class="menu2"><a href="teacher/teacherlogin.php">Teacher</a></div>
         <img src="icons/staff.PNG"class="img3"><div class="menu3"><a href="staff/stafflogin.php">Staff</a></div>
         <img src="icons/contact.PNG"class="img4"><div class="menu4"><a href="contact/contact.php">Contact us</a></div>
         <img src="icons/lower_logo.PNG"class="lower_logo">
         </div>
         <div class="left_logo"><img src="icons/logo.PNG">
         </div>
        </div>
        
    </body>
</html>