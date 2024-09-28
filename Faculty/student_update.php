<!DOCTYPE html>
<html>
    <head> <title>Faculty Update Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
            .btn {
            border: 2px solid black;
            background-color: white;
            color: black;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;

            }.add_fac {
                border-color: crimson;
                 color: crimson;
            }.add_fac:hover {
                background-color: crimson;
                color: white;
            }.split {
            height: 85.3%;
            width: 40%;
            margin-top: 70px;
            position: absolute;
            z-index: 1;
            top: 0;
            overflow-x: hidden;
            padding-top: 10px;
        }

        .left {
            left: 0;
            margin-left: 9.5%;
            border-radius: 8px;
            background-color:  #F96167;
        }

        .right {
            right: 0;
            margin-right: 9.5%;
            border-radius: 8px;
            background-color: #F9E795;
        }

        .centered {
            position: absolute;
            top: 50%;   
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
         }

        body {font-family: "Comic Sans MS"}

        #grad_back {
            background: linear-gradient(to right ,#F9E795 , white , #F96167);
        }

        .navbar {  
            width: 983.5px;
            margin: auto;
            background-color: #E9967A;
            overflow: auto;
        }

        .navbar a {
        float: left;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        }

        .navbar a:hover {
        background-color: #FF5733;
        }

        .active {
        background-color: #FF5733;
        }

            @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
            }
        }
    </style>

    <body id="grad_back">

        <div class="navbar" style="border-radius:25px ; border-color:#FF5733 ; border-style:solid ; border-width:2px">

            <a style="background-color:#E9967A">
                <h7 style="margin-left: 20px;">Student Management System</h7>
            </a>

            <a style="margin-left: 6px" 
                href="faculty_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Faculty Panel 
            </a>
            
            <a class="active" href="student_update.php">
                <i class="fa fa-fw fa-briefcase"></i>
                Update Student
            </a>

            <a href="faculty_assignments.php">
                <i class="fa fa-fw fa-book"></i> 
                Assignments
            </a> 

            <a href="faculty_notice.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notices  
            </a>

            <a href="faculty_logout.php">
                <i class="fa fa-fw fa-power-off"></i> 
                Logout  
            </a>

        </div>

        <div class="split left">
            <div class="centered">
                <img src="images_faculty/faculty_studUpd.png" width="70%">
                <h2 style="font-family: Comic Sans MS ; color: white">Update Student Here</h2>
                <p style="font-family: Comic Sans MS ; color: white ; font-size: 20px;">Dear Faculty You Can Update Students Here ~</p>
            </div>
        </div>

        <div class="split right">

            <div class="centered">

                <h2 style="font-family: Comic Sans MS ; color: crimson ;"> ~ Ready To Update Student </h2>

                <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #FF7474 ; margin-bottom: 25px">

                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: crimson">Update Students</fieldset>
                    </legend>

                    <?php
                        error_reporting(0);
                        include 'C:/xampp/htdocs/sms-main/Admin/Admin_init.php';
                            $emailGet=$_GET[$STUDENT_EMAIL];
                            $query= "SELECT * FROM  $STUDENT_ADD WHERE $STUDENT_EMAIL= '$emailGet' ";
                            $data= mysqli_query($con,$query);
                            $row= mysqli_fetch_array($data);
                        ?>

                    <form method="POST">

                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$STUDENT_MNO] ?>" type="text" name="student_mno" id="faculty_mno" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Update PhoneNo Of Student" required></input>
                        </div>

                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$STUDENT_NAME] ?>" type="text" name="student_name" id="student_name" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Update Name Of Student" required>
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$STUDENT_EMAIL] ?>" type="email" name="student_email" id="student_email" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                        placeholder="Email Not Selected !" disabled>
                                        
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$STUDENT_RESULT] ?>" type="text" name="student_result" id="student_result" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Update Student Result" required>
                        </div>
            
                        <div>
                            <input class="btn add_fac" type="submit" name="add_faculty" id="add_faculty" value="Update Student" 
                            style="
                                    padding-left: 28px;
                                    padding-right: 28px;
                                    padding-top: 7px;
                                    padding-bottom: 7px;
                                    font-size: 17px;
                                    font-family: Comic Sans MS ; 
                                    font-weight: bold ;   
                                    border-radius: 12px ; 
                                    margin-top: 22px ; margin-bottom: 22px">
                        </div>  
            
                    </form>
                </fieldset>

            </div>

        </div>

        <?php
            include "C:/xampp/htdocs/sms-main/Admin/Admin_init.php";
            
            if(isset($_POST['add_faculty'])){
                $MNO=$_POST[$STUDENT_MNO];
                $NAME=$_POST[$STUDENT_NAME]; 
                $EMAIL=$_POST[$STUDENT_EMAIL];
                $RESULT=$_POST[$STUDENT_RESULT];

                $sql = "UPDATE $STUDENT_ADD SET $STUDENT_MNO=$MNO , $STUDENT_NAME='$NAME' , $STUDENT_RESULT='$RESULT' WHERE $STUDENT_EMAIL = '$emailGet' ";

                $dbquery = mysqli_query($con,$sql);
                if(!$dbquery){
                    echo "something what are going !!";
                } else {
                    ?>
                        <script type="text/javascript">
                            alert("Student Updated !");
                            window.open("http://localhost/sms-main/Faculty/faculty_panel.php","_self");
                        </script>
                    <?php
                }
            }
        ?>
    </body>
</html> 
