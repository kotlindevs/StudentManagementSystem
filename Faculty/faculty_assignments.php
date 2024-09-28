<!DOCTYPE html>
<html>
    <head> <title>Faculty Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {font-family: "Comic Sans MS"}
        .btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
            }
            .signdes {
                border-color: orange;
                color: orange;
            }.signdes:hover {
                background-color: orange;
                color: white;
            }
            .signdes_right {
                border-color: crimson;
                color: crimson;
            }.signdes_right:hover {
                background-color: crimson;
                color: white;
            }

            
        .box_left{
            color: white;
            background-color: #F96167;
            height: 144px;
            width: 450px;
            margin-bottom:8px;
            margin-top:16px;
            margin-right: 4px;
            border: 4px solid #F96167;
            border-radius: 25px;
            padding: 8px;
        }
        .box_right{
            color: white;
            background-color: orange;
            height: 144px;
            width: 450px;
            margin-bottom: 8px;
            margin-top: 16px;
            margin-left: 4px;
            border: 4px solid orange;
            border-radius: 25px;
            padding: 8px;
        }

        #grad_back {
            background: linear-gradient(to right , orange , white , #F96167);
        }

        .navbar {  
            width: 879.5px;
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

            <a style="margin-left: 6px" href="faculty_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Faculty Panel 
            </a>

            <a href="student_update.php">
                <i class="fa fa-fw fa-briefcase"></i>
                Update Student
            </a>

            <a class="active" href="faculty_assignments.php">
                <i class="fa fa-fw fa-book"></i> 
                Assignments
            </a> 

            <a href="faculty_notice.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notices  
            </a>

        </div>

        <center>
        <table>
            <td>
                <div class="box_left">
                    <label style="font-size:24px; margin-left:18px ; margin-top:14px ; color:orange ; font-weight: bold;">Java</label>
                    <form action="" method="post">
                        <div style="margin-left:25px">
                            Chapters
                            <input type="text" name="java_ch" id="java_ch" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 200px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:35px;
                                        padding-left:10px" 
                                placeholder="Add Chapters With Description" required>
                        </div>
                        <div style="margin-left:25px">
                            Submit Date 
                            <input type="date" name="java_des" id="java_des" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 190px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:10px;
                                        padding-left:10px;
                                        padding-right:10px" 
                                placeholder="Date Of Assignment Submission !" required>
                        </div>
                        <div>
                            <input class="btn signdes"type="submit" name="java_assign" id="java_assign" value="Genrate" 
                                style=" padding-left: 30px ; padding-right: 30px;
                                        margin-left:160px;
                                        margin-top:6px;
                                        padding-top: 2px;padding-bottom: 2px;
                                        font-family:Comic Sans MS;
                                        font-size: 16px; 
                                        border-radius: 8px ; ">
                        </div>
                    </form>
                </div>

                <div class="box_left">
                    <label style="font-size:24px; margin-left:18px ; margin-top:14px ;color:orange ; font-weight: bold">Python</label>
                    <form action="" method="post">
                        <div style="margin-left:25px">
                            Chapters
                            <input type="text" name="python_ch" id="python_ch" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 200px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:35px;
                                        padding-left:10px" 
                                placeholder="Add Chapters With Description" required>
                        </div>
                        <div style="margin-left:25px">
                            Submit Date 
                            <input type="date" name="python_des" id="python_des" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 190px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:10px;
                                        padding-left:10px;
                                        padding-right:10px" 
                                placeholder="Date Of Assignment Submission !" required>
                        </div>
                        <div>
                            <input class="btn signdes"type="submit" name="python_assign" id="python_assign" value="Genrate" 
                                style=" padding-left: 30px ; padding-right: 30px;
                                        margin-left:160px;
                                        margin-top:6px;
                                        padding-top: 2px;padding-bottom: 2px;
                                        font-family:Comic Sans MS;
                                        font-size: 16px; 
                                        border-radius: 8px ; ">
                        </div>
                    </form>
                </div>

                <div class="box_left">
                    <label style="font-size:24px; margin-left:18px ; margin-top:14px ;color:orange ; font-weight: bold">Kotlin</label>
                    <form action="" method="post">
                        <div style="margin-left:25px">
                            Chapters
                            <input type="text" name="kotlin_ch" id="kotlin_ch" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 200px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:35px;
                                        padding-left:10px" 
                                placeholder="Add Chapters With Description" required>
                        </div>
                        <div style="margin-left:25px">
                            Submit Date 
                            <input type="date" name="kotlin_des" id="kotlin_des" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 190px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:10px;
                                        padding-left:10px;
                                        padding-right:10px" 
                                placeholder="Date Of Assignment Submission !" required>
                        </div>
                        <div>
                            <input class="btn signdes"type="submit" name="kotlin_assign" id="kotlin_assign" value="Genrate" 
                                style=" padding-left: 30px ; padding-right: 30px;
                                        margin-left:160px;
                                        margin-top:6px;
                                        padding-top: 2px;padding-bottom: 2px;
                                        font-family:Comic Sans MS;
                                        font-size: 16px; 
                                        border-radius: 8px ; ">
                        </div>
                    </form>
                </div>
            </td>

            <td>
                <div class="box_right">
                    <label style="font-size:24px; margin-left:18px ; margin-top:14px ;color:crimson ; font-weight: bold">C & C++</label>
                    <form action="" method="post">
                        <div style="margin-left:25px">
                            Chapters
                            <input type="text" name="c_ch" id="c_ch" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 200px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:35px;
                                        padding-left:10px" 
                                placeholder="Add Chapters With Description" required>
                        </div>
                        <div style="margin-left:25px">
                            Submit Date 
                            <input type="date" name="c_des" id="c_des" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 190px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:10px;
                                        padding-left:10px;
                                        padding-right:10px" 
                                placeholder="Date Of Assignment Submission !" required>
                        </div>
                        <div>
                            <input class="btn signdes_right"type="submit" name="c_assign" id="c_assign" value="Genrate" 
                                style=" padding-left: 30px ; padding-right: 30px;
                                        margin-left:160px;
                                        margin-top:6px;
                                        padding-top: 2px;padding-bottom: 2px;
                                        font-family:Comic Sans MS;
                                        font-size: 16px; 
                                        border-radius: 8px ; ">
                        </div>
                    </form>
                </div>

                <div class="box_right">
                    <label style="font-size:24px; margin-left:18px ; margin-top:14px ;color:crimson ; font-weight: bold">Php</label>
                    <form action="" method="post">
                        <div style="margin-left:25px">
                            Chapters
                            <input type="text" name="php_ch" id="php_ch" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 200px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:35px;
                                        padding-left:10px" 
                                placeholder="Add Chapters With Description" required>
                        </div>
                        <div style="margin-left:25px">
                            Submit Date 
                            <input type="date" name="php_des" id="php_des" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 190px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:10px;
                                        padding-left:10px;
                                        padding-right:10px" 
                                placeholder="Date Of Assignment Submission !" required>
                        </div>
                        <div>
                            <input class="btn signdes_right"type="submit" name="php_assign" id="php_assign" value="Genrate" 
                                style=" padding-left: 30px ; padding-right: 30px;
                                        margin-left:160px;
                                        margin-top:6px;
                                        padding-top: 2px;padding-bottom: 2px;
                                        font-family:Comic Sans MS;
                                        font-size: 16px; 
                                        border-radius: 8px ; ">
                        </div>
                    </form>
                </div>

                <div class="box_right">
                    <label style="font-size:24px; margin-left:18px ; margin-top:14px ;color:crimson ; font-weight: bold">Cyber-Security</label>
                    <form action="" method="post">
                        <div style="margin-left:25px">
                            Chapters
                            <input type="text" name="cs_ch" id="cs_ch" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 200px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:35px;
                                        padding-left:10px" 
                                placeholder="Add Chapters With Description" required>
                        </div>
                        <div style="margin-left:25px">
                            Submit Date 
                            <input type="date" name="cs_des" id="cs_des" 
                                style= "border-radius:12px ; 
                                        border-color:transparent ; 
                                        outline-color:transparent ; 
                                        width: 190px ;
                                        height:25px;
                                        margin-top:5px;
                                        margin-left:10px;
                                        padding-left:10px;
                                        padding-right:10px" 
                                placeholder="Date Of Assignment Submission !" required>
                        </div>
                        <div>
                            <input class="btn signdes_right"type="submit" name="cs_assign" id="cs_assign" value="Genrate" 
                                style=" padding-left: 30px ; padding-right: 30px;
                                        margin-left:160px;
                                        margin-top:6px;
                                        padding-top: 2px;padding-bottom: 2px;
                                        font-family:Comic Sans MS;
                                        font-size: 16px; 
                                        border-radius: 8px ; ">
                        </div>
                    </form>
                </div>
            </td>
        </table>
        </center>

        <?php
            include "Faculty_init.php";
            $createTable = "CREATE TABLE IF NOT EXISTS $JAVA_ASSIGNMENTS(java_ch TEXT,java_des DATE)";
            $queryExe = mysqli_query($con,$createTable);

            if(isset($_POST['java_assign'])){
                $JAVA_ch = $_POST[$JAVA_CH];
                $JAVA_des = $_POST[$JAVA_DES];

                    $insertInTable = "INSERT INTO $JAVA_ASSIGNMENTS VALUES('$JAVA_ch','$JAVA_des')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("Java Assignment Genrated !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }
                }

            $createTable = "CREATE TABLE IF NOT EXISTS $PYTHON_ASSIGNMENTS(python_ch TEXT,python_des DATE)";
            $queryExe = mysqli_query($con,$createTable);

            if(isset($_POST['python_assign'])){
                $PYTHON_ch = $_POST[$PYTHON_CH];
                $PYTHON_des = $_POST[$PYTHON_DES];

                    $insertInTable = "INSERT INTO $PYTHON_ASSIGNMENTS VALUES('$PYTHON_ch','$PYTHON_des')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("Python Assignment Genrated !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }
                }


            $createTable = "CREATE TABLE IF NOT EXISTS $KOTLIN_ASSIGNMENTS(kotlin_ch TEXT,kotlin_des DATE)";
            $queryExe = mysqli_query($con,$createTable);

            if(isset($_POST['kotlin_assign'])){
                $KOTLIN_ch = $_POST[$KOTLIN_CH];
                $KOTLIN_des = $_POST[$KOTLIN_DES];

                    $insertInTable = "INSERT INTO $KOTLIN_ASSIGNMENTS VALUES('$KOTLIN_ch','$KOTLIN_des')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("Kotlin Assignment Genrated !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }
                }


            $createTable = "CREATE TABLE IF NOT EXISTS $C_ASSIGNMENTS(c_ch TEXT,c_des DATE)";
            $queryExe = mysqli_query($con,$createTable);

            if(isset($_POST['c_assign'])){
                $C_ch = $_POST[$C_CH];
                $C_des = $_POST[$C_DES];

                    $insertInTable = "INSERT INTO $C_ASSIGNMENTS VALUES('$C_ch','$C_des')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("C & C++ Assignment Genrated !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }
                }


            $createTable = "CREATE TABLE IF NOT EXISTS $PHP_ASSIGNMENTS(php_ch TEXT,php_des DATE)";
            $queryExe = mysqli_query($con,$createTable);

            if(isset($_POST['php_assign'])){
                $PHP_ch = $_POST[$PHP_CH];
                $PHP_des = $_POST[$PHP_DES];

                    $insertInTable = "INSERT INTO $PHP_ASSIGNMENTS VALUES('$PHP_ch','$PHP_des')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("Php Assignment Genrated !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }
                }

            $createTable = "CREATE TABLE IF NOT EXISTS $CS_ASSIGNMENTS(cs_ch TEXT,cs_des DATE)";
            $queryExe = mysqli_query($con,$createTable);

            if(isset($_POST['cs_assign'])){
                $CS_ch = $_POST[$CS_CH];
                $CS_des = $_POST[$CS_DES];

                    $insertInTable = "INSERT INTO $CS_ASSIGNMENTS VALUES('$CS_ch','$CS_des')";
                    $queryExe = mysqli_query($con,$insertInTable);
                    if($queryExe){
                        ?>
                            <script>
                                alert("Cyber-Security Assignment Genrated !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Something Went Wrong !");
                                window.open("http://localhost/sms-main/Faculty/faculty_assignments.php","_self");
                            </script>
                        <?php
                    }
                }
        ?>

    </body>
</html>