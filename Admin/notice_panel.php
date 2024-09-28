<!DOCTYPE html>
<html>
    <head> <title>Notice Panel</title> </head>
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
            }
        .split {
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
            background: linear-gradient(to right ,  #EEA47F , white , #00539C);
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

            <a class="active" href="notice_panel.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notice
            </a> 

            <a href="faculty_panel.php">
                <i class="fa fa-fw fa-graduation-cap"></i> 
                Faculty
            </a>

            <a href="faculty_update.php">
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

                <h2 style="font-family: Comic Sans MS ; color: white ;">~ Genrate Notice For Faculty ~</h2>

                <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #FF7474 ; margin-bottom: 25px">

                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: crimson">Add Notice Here</fieldset>
                    </legend>

                    <form action="#" method="post">

                        <div style="margin-top: 7px;">
                            <input type="date" name="faculty_notice_date" id="faculty_notice_date" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Date Of Notice" required>
                        </div>

                        <div style="margin-top: 7px;">
                            <input type="text" name="faculty_notice_name" id="faculty_notice_name" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Topic Of Notice" required>
                        </div>

                        <div style="margin-top: 7px;">
                            <input type="text" name="faculty_notice_des" id="faculty_notice_des" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px " 
                                placeholder="Enter Description Of Notice">
                        </div>

                        <div>
                            <input class="btn add_fac" type="submit" name="add_notice_faculty" id="add_notice_faculty" value="Faculty Notice" 
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

        <div class="split right">
            <div class="centered">
                <h2 style="font-family: Comic Sans MS ; color: white ;">~ Genrate Notice For Student ~</h2>

                    <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #FF7474 ; margin-bottom: 25px">

                        <legend style="font-family: Comic Sans MS ; color: white">
                            <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: crimson">Add Notice Here</fieldset>
                        </legend>

                        <form action="#" method="post">

                            <div style="margin-top: 7px;">
                                <input type="date" name="student_notice_date" id="student_notice_date" 
                                    style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                            border-radius: 12px; outline-color: transparent;
                                            border-color: transparent; margin-bottom: 3px" 
                                    placeholder="Enter Date Of Notice" required>
                            </div>

                            <div style="margin-top: 7px;">
                                <input type="text" name="student_notice_name" id="student_notice_name" 
                                    style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                            border-radius: 12px; outline-color: transparent;
                                            border-color: transparent; margin-bottom: 3px" 
                                    placeholder="Enter Topic Of Notice" required>
                            </div>

                            <div style="margin-top: 7px;">
                                <input type="text" name="student_notice_des" id="student_notice_des" 
                                    style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                            border-radius: 12px; outline-color: transparent;
                                            border-color: transparent; margin-bottom: 3px " 
                                    placeholder="Enter Description Of Notice">
                            </div>

                            <div>
                                <input class="btn add_fac" type="submit" name="add_notice_student" id="add_notice_student" value="Student Notice" 
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
            
            $createTable_fc = "CREATE TABLE IF NOT EXISTS $FACULTY_NOTICE_ADD($FACULTY_NOTICE_DATE DATE,$FACULTY_NOTICE_NAME TEXT,$FACULTY_NOTICE_DES TEXT)";
            $queryExe = mysqli_query($con,$createTable_fc);

            if(isset($_POST['add_notice_faculty'])){
                $DATE_FC = $_POST[$FACULTY_NOTICE_DATE];
                $NAME_FC = $_POST[$FACULTY_NOTICE_NAME];
                $DES_FC = $_POST[$FACULTY_NOTICE_DES];

                $sql = "SELECT * FROM $FACULTY_NOTICE_ADD WHERE $FACULTY_NOTICE_NAME OR $FACULTY_NOTICE_DES";
                $dbquery = mysqli_query($con,$sql);
                $data = mysqli_num_rows($dbquery);

                if($data){
                    ?>
                        <script>
                            alert("This Notice Added Already For Faculty !");
                            window.open("http://localhost/sms-main/Admin/notice_panel.php","_self");
                        </script>
                    <?php
                } else {
                    $insertInTable = "INSERT INTO $FACULTY_NOTICE_ADD VALUES('$DATE_FC','$NAME_FC','$DES_FC')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("Notice Added Successfully For Faculty !");
                                window.open("http://localhost/sms-main/Admin/notice_panel.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Admin/notice_panel.php","_self");
                            </script>
                        <?php
                    }
                }
            }

            $createTable_st = "CREATE TABLE IF NOT EXISTS $STUDENT_NOTICE_ADD($STUDENT_NOTICE_DATE DATE,$STUDENT_NOTICE_NAME TEXT,$STUDENT_NOTICE_DES TEXT)";
            $queryExe = mysqli_query($con,$createTable_st);

            if(isset($_POST['add_notice_student'])){
                $DATE_ST = $_POST[$STUDENT_NOTICE_DATE];
                $NAME_ST = $_POST[$STUDENT_NOTICE_NAME];
                $DES_ST = $_POST[$STUDENT_NOTICE_DES];

                $sql = "SELECT * FROM $STUDENT_NOTICE_ADD WHERE $STUDENT_NOTICE_NAME OR $STUDENT_NOTICE_DES";
                $dbquery = mysqli_query($con,$sql);
                $data = mysqli_num_rows($dbquery);

                if($data){
                    ?>
                        <script>
                            alert("This Notice Added Already For Student !");
                            window.open("http://localhost/sms-main/Admin/notice_panel.php","_self");
                        </script>
                    <?php
                } else {
                    $insertInTable = "INSERT INTO $STUDENT_NOTICE_ADD VALUES('$DATE_ST','$NAME_ST','$DES_ST')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("Notice Added Successfully For Student !");
                                window.open("http://localhost/sms-main/Admin/notice_panel.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Admin/notice_panel.php","_self");
                            </script>
                        <?php
                    }
                }
            }
        ?>

    </body>
</html> 
