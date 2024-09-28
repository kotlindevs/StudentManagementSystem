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
            background-color:  #00539C;
        }

        .right {
            right: 0;
            margin-right: 9.5%;
            border-radius: 8px;
            background-color: #EEA47F;
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
            background: linear-gradient(to right , #EEA47F , white , #00539C);
        }

        .navbar {  
            width: 982px;
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

            <a style="margin-left: 57.5px" href="admin_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Admin Panel 
            </a> 

            <a href="notice_panel.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notice
            </a> 

            <a href="faculty_panel.php">
                <i class="fa fa-fw fa-graduation-cap"></i> 
                Faculty
            </a>

            <a class="active" href="faculty_update.php">
                <i class="fa fa-fw fa-wrench"></i>
                Faculty Update
            </a>

            <a href="student_panel.php">
                <i class="fa fa-fw fa-user"></i> 
                Student  
            </a>

        </div>

        <div class="split left">
            <div class="centered">
                <img src="images_admin/admin_facUpd.png" width="110%">
                <h2 style="font-family: Comic Sans MS ; color: white">Update Faculty Here</h2>
                <p style="font-family: Comic Sans MS ; color: white ; font-size: 20px;">Dear Admin You Can Update Faculties Here ~</p>
            </div>
        </div>

        <div class="split right">

            <div class="centered">

                <h2 style="font-family: Comic Sans MS ; color: white ;"> ~ Ready To Update Faculty </h2>

                <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #FF7474 ; margin-bottom: 25px">

                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: crimson">Update Faculties</fieldset>
                    </legend>

                    <?php
                        error_reporting(0);
                        include 'Admin_init.php';
                            $emailGet=$_GET[$FACULTY_EMAIL];
                            $query= "SELECT * FROM  $FACULTY_ADD WHERE $FACULTY_EMAIL= '$emailGet' ";
                            $data= mysqli_query($con,$query);
                            $row= mysqli_fetch_array($data);
                        ?>

                    <form method="POST">

                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$FACULTY_MNO] ?>" type="text" name="faculty_mno" id="faculty_mno" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Update PhoneNo Of Faculty" required></input>
                        </div>

                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$FACULTY_NAME] ?>" type="text" name="faculty_name" id="faculty_name" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Update Name Of Faculty" required>
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$FACULTY_EMAIL] ?>" type="email" name="faculty_email" id="faculty_email" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                        placeholder="Email Not Selected !" disabled>
                                        
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$FACULTY_PASSWORD] ?>" type="password" name="faculty_password" id="faculty_password" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Update Password For Faculty" required>
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input value="<?php echo $row[$FACULTY_QUALIFICATION] ?>" type="text" name="faculty_qualification" id="faculty_qualification" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Update Faculty Qualification" required>
                        </div>
            
                        <div>
                            <input class="btn add_fac" type="submit" name="add_faculty" id="add_faculty" value="Update Faculty" 
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

            include "Admin_init.php";
            
            if(isset($_POST['add_faculty'])){
                $MNO=$_POST[$FACULTY_MNO];
                $NAME=$_POST[$FACULTY_NAME]; 
                $EMAIL=$_POST[$FACULTY_EMAIL];
                $PASSWORD=$_POST[$FACULTY_PASSWORD];
                $QUALIFICATION=$_POST[$FACULTY_QUALIFICATION];

                $sql = "UPDATE $FACULTY_ADD SET $FACULTY_MNO=$MNO , $FACULTY_NAME='$NAME' , $FACULTY_PASSWORD='$PASSWORD' , $FACULTY_QUALIFICATION='$QUALIFICATION' WHERE $FACULTY_EMAIL = '$emailGet' ";

                $dbquery = mysqli_query($con,$sql);
                if(!$dbquery){
                    echo "something what are going !!";
                } else {
                    ?>
                        <script type="text/javascript">
                            alert("Faculty Updated !");
                            window.open("http://localhost/sms-main/Admin/admin_panel.php","_self");
                        </script>
                    <?php
                }
            }
        ?>
    </body>
</html> 
