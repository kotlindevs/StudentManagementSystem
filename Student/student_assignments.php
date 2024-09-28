<!DOCTYPE html>
<html>
    <head> <title>Student Results Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {font-family: "Comic Sans MS"}

        .field_des_in{
            border-radius:15px ; 
            border-width:3px ;
            background-color: #101820;
            border-color: white;
        }
        .field_des_out{
            margin : 20px; 
            border-radius:15px ;
            border-color: white; 
            border-width: 3px;
            background-color: #104c91;
            text-align: center;
        }
        .box_upside{
            color: white;
            background-color: cornflowerblue;
            height: 224.50px;
            width: 425px;
            margin: 8px;;
            border: none;
            border-radius: 8px;
            overflow: auto;
        }
        .box_downside{
            color: white;
            background-color: cornflowerblue;
            height: 224.50px;
            width: 425px;
            margin: 8px;
            border: none;
            border-radius: 8px;
            overflow: auto;
        }

        #grad_back {
            background: linear-gradient(to right ,orange , white , #101820);
        }

        .navbar {  
            width: 986.9px;
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

        <div class="navbar" style="border-radius:25px ; border-color:#FF5733 ; border-style:solid ; border-width:2px ; margin-bottom:25px">

            <a style="background-color:#E9967A">
                <h7 style="margin-left: 20px;">Student Management System</h7>
            </a>

            <a style="margin-left: 27.24px" href="student_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Student Panel 
            </a> 

            <a href="update_pass.php">
                <i class="fa fa-fw fa-unlock"></i> 
                Update Password
            </a> 

            <a class="active" href="student_assignments.php">
                <i class="fa fa-fw fa-file"></i> 
                See Assignments
            </a> 

            <a href="student_notices.php">
                <i class="fa fa-fw fa-bell"></i> 
                See Notices  
            </a>

        </div>

        <center>
        <table>
            <tr>
                <td>
                    <div class="box_upside">
                        <fieldset class="field_des_out">
                            <legend style="text-align: center;">
                                <fieldset class="field_des_in">Java Assignments</fieldset>
                            </legend>
                            <?php
                                include "Student_init.php";
                                $createTable = "CREATE TABLE IF NOT EXISTS $JAVA_ASSIGNMENTS(java_ch TEXT,java_des DATE)";
                                $queryExe = mysqli_query($con,$createTable);
                                $sql = "SELECT * FROM $JAVA_ASSIGNMENTS";
                                $queryExe = mysqli_query($con,$sql);
                                $dbquery = mysqli_query($con,$sql);
                                $data = mysqli_num_rows($dbquery);
                                if($dbquery){
                                    while($rows = mysqli_fetch_array($queryExe)){
                                        echo "Chapters :: $rows[$JAVA_CH]"."</br>   ";
                                        echo "Submit On :: $rows[$JAVA_DES]"."</br>";
                                        echo "__________________________________";
                                    }
                                }
                            ?>
                        </fieldset>
                    </div>
                </td>
                <td>
                    <div class="box_upside">
                        <fieldset class="field_des_out">
                            <legend style="text-align: center;">
                                <fieldset class="field_des_in">Python Assignments</fieldset>
                            </legend>
                            <?php
                                include "Student_init.php";
                                $createTable = "CREATE TABLE IF NOT EXISTS $PYTHON_ASSIGNMENTS(python_ch TEXT,python_des DATE)";
                                $queryExe = mysqli_query($con,$createTable);
                                $sql = "SELECT * FROM $PYTHON_ASSIGNMENTS";
                                $queryExe = mysqli_query($con,$sql);
                                $dbquery = mysqli_query($con,$sql);
                                $data = mysqli_num_rows($dbquery);
                                if($dbquery){
                                    while($rows = mysqli_fetch_array($queryExe)){
                                        echo "Chapters :: $rows[$PYTHON_CH]"."</br>";
                                        echo "Submit On :: $rows[$PYTHON_DES]"."</br>";
                                        echo "__________________________________";
                                    }
                                }
                            ?>
                        </fieldset>
                    </div>
                </td>
                <td>
                    <div class="box_upside">
                        <fieldset class="field_des_out">
                            <legend style="text-align: center;">
                                <fieldset class="field_des_in">Kotlin Assignments</fieldset>
                            </legend>
                            <?php
                                include "Student_init.php";
                                $createTable = "CREATE TABLE IF NOT EXISTS $KOTLIN_ASSIGNMENTS(kotlin_ch TEXT,kotlin_des DATE)";
                                $queryExe = mysqli_query($con,$createTable);
                                $sql = "SELECT * FROM $KOTLIN_ASSIGNMENTS";
                                $queryExe = mysqli_query($con,$sql);
                                $dbquery = mysqli_query($con,$sql);
                                $data = mysqli_num_rows($dbquery);
                                if($dbquery){
                                    while($rows = mysqli_fetch_array($queryExe)){
                                        echo "Chapters :: $rows[$KOTLIN_CH]"."</br>";
                                        echo "Submit On :: $rows[$KOTLIN_DES]"."</br>";
                                        echo "__________________________________";
                                    }
                                }
                            ?>
                        </fieldset>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="box_downside">
                        <fieldset class="field_des_out">
                            <legend style="text-align: center;">
                                <fieldset class="field_des_in">C & C++ Assignments</fieldset>
                            </legend>
                            <?php
                                include "Student_init.php";
                                $createTable = "CREATE TABLE IF NOT EXISTS $C_ASSIGNMENTS(c_ch TEXT,c_des DATE)";
                                $queryExe = mysqli_query($con,$createTable);
                                $sql = "SELECT * FROM $C_ASSIGNMENTS";
                                $queryExe = mysqli_query($con,$sql);
                                $dbquery = mysqli_query($con,$sql);
                                $data = mysqli_num_rows($dbquery);
                                if($dbquery){
                                    while($rows = mysqli_fetch_array($queryExe)){
                                        echo "Chapters :: $rows[$C_CH]"."</br>";
                                        echo "Submit On :: $rows[$C_DES]"."</br>";
                                        echo "__________________________________";
                                    }
                                }
                            ?>
                        </fieldset>
                    </div>
                </td>
                <td>
                    <div class="box_downside">
                        <fieldset class="field_des_out">
                            <legend style="text-align: center;">
                                <fieldset class="field_des_in">Php Assignments</fieldset>
                            </legend>
                            <?php
                                include "Student_init.php";
                                $createTable = "CREATE TABLE IF NOT EXISTS $PHP_ASSIGNMENTS(php_ch TEXT,php_des DATE)";
                                $queryExe = mysqli_query($con,$createTable);
                                $sql = "SELECT * FROM $PHP_ASSIGNMENTS";
                                $queryExe = mysqli_query($con,$sql);
                                $dbquery = mysqli_query($con,$sql);
                                $data = mysqli_num_rows($dbquery);
                                if($dbquery){
                                    while($rows = mysqli_fetch_array($queryExe)){
                                        echo "Chapters :: $rows[$PHP_CH]"."</br>";
                                        echo "Submit On :: $rows[$PHP_DES]"."</br>";
                                        echo "__________________________________";
                                    }
                                }
                            ?>
                        </fieldset>
                    </div>
                </td>
                <td>
                    <div class="box_downside">
                        <fieldset class="field_des_out">
                            <legend style="text-align: center;">
                                <fieldset class="field_des_in">Cyber-Security Assignments</fieldset>
                            </legend>
                            <?php
                                include "Student_init.php";
                                $createTable = "CREATE TABLE IF NOT EXISTS $CS_ASSIGNMENTS(cs_ch TEXT,cs_des DATE)";
                                $queryExe = mysqli_query($con,$createTable);
                                $sql = "SELECT * FROM $CS_ASSIGNMENTS";
                                $queryExe = mysqli_query($con,$sql);
                                $dbquery = mysqli_query($con,$sql);
                                $data = mysqli_num_rows($dbquery);
                                if($dbquery){
                                    while($rows = mysqli_fetch_array($queryExe)){
                                        echo "Chapters :: $rows[$CS_CH]"."</br>";
                                        echo "Submit On :: $rows[$CS_DES]"."</br>";
                                        echo "__________________________________";
                                    }
                                }
                            ?>
                        </fieldset>
                    </div>
                </td>
            </tr>
        </table>
        </center>
    </body>
</html>

        