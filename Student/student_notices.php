<!DOCTYPE html>
<html>
    <head> <title>Student Notices Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        .scrollable-container { 
            border-radius: 8px;
            height: 350px; 
            overflow-y: auto;
            padding: 10px;
            border: 4px solid white;
        }
        .card {
            padding: 4px;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

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
            margin-left: 130px;
            border-radius: 8px;
            background-color:  #101820;
        }
        .right {
            right: 0;
            margin-right: 130px;
            border-radius: 8px;
            background-color: orange;
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
            background: linear-gradient(to right , orange , white , #101820);
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

        <div class="navbar" style="border-radius:25px ; border-color:#FF5733 ; border-style:solid ; border-width:2px">

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

            <a href="student_assignments.php">
                <i class="fa fa-fw fa-file"></i> 
                See Assignments
            </a> 

            <a class="active" href="student_notices.php">
                <i class="fa fa-fw fa-bell"></i> 
                See Notices  
            </a>

        </div>

        <div class="split left">
            <div class="centered">
                <h3 style="font-family: Comic Sans MS ; color: white ;">~ Genrated By Admin ! Notice For Student ~</h3>

                <fieldset style="margin-left: -30%; margin-right: -30% ; border-radius:15px ; border-color:white ; border-width:4px ; background-color: #14397d ; margin-bottom: 25px ;">
                 <div class="scrollable-container" style="margin-top: 7px; margin-bottom:7px; margin-left:7px; margin-right:7px; background-color: #77b5d9;">
                    <legend style="font-family: Comic Sans MS ; color: white ; margin-bottom:12px">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #14397d">Read Notice Here</fieldset>
                    </legend>

                    <?php
                        include "Student_init.php";

                            $sql = "SELECT * FROM $STUDENT_NOTICE_ADD";
                            $queryExe = mysqli_query($con,$sql);
                            $dbquery = mysqli_query($con,$sql);
                            $data = mysqli_num_rows($dbquery);

                        if($dbquery){
                            while($rows = mysqli_fetch_array($queryExe)){
                                ?>   
                                    <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #f4898b ; margin-bottom: 10px ;">
                                        <table style="text-align:left"> 
                                            <tr>
                                                <td class="card">
                                                        
                                                    <?php
                                                        echo "Date : $rows[$STUDENT_NOTICE_DATE]"."</br>";
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td>
                                                        
                                                    <?php                                                        
                                                        echo "Notice : $rows[$STUDENT_NOTICE_NAME]"."</br>";                                                         
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                        
                                                    <?php                                                    
                                                        echo "Des : $rows[$STUDENT_NOTICE_DES]"."</br>";
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                <?php
                            }
                        }
                    ?>
                 </div>
                </fieldset>
            </div>
        </div>

        <div class="split right">
            <div class="centered">
            <h3 style="font-family: Comic Sans MS ; color: white ;">~ Genrated By Faculty ! Notice For Student ~</h3>
                <fieldset style="margin-left: -30%; margin-right: -30% ; border-radius:15px ; border-color:white ; border-width:4px ; background-color: #14397d ; margin-bottom: 25px">
                 <div class="scrollable-container" style="margin-top: 7px; margin-bottom:7px; margin-left:7px; margin-right:7px; background-color: #77b5d9;">
                    <legend style="font-family: Comic Sans MS ; color: white ; margin-bottom:12px">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #14397d">Read Notice Here</fieldset>
                    </legend>
                    <?php

                        include "Student_init.php";
                        $createTable =  "CREATE TABLE IF NOT EXISTS $FC_NOTICE_STUDENT($FC_STUDENT_NOTICE_DATE DATE,$FC_STUDENT_NOTICE_NAME TEXT,$FC_STUDENT_NOTICE_DES TEXT)";
                        $queryExe = mysqli_query($con,$createTable);
                        $sql = "SELECT * FROM $FC_NOTICE_STUDENT";
                        $queryExe = mysqli_query($con,$sql);
                        $dbquery = mysqli_query($con,$sql);
                        $data = mysqli_num_rows($dbquery);
                        if($dbquery){
                            while($rows = mysqli_fetch_array($queryExe)){
                                ?>
                                    <div>    
                                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #f4898b ; margin-bottom: 10px">
                                            <table style="text-align: left;"> 
                                                <tr>
                                                    <td class="card">
                                                        
                                                        <?php
                                                            echo "Date : $rows[$FC_STUDENT_NOTICE_DATE]"."</br>";
                                                        ?>
                                                    
                                                    </td>
                                                </tr>
                                                <tr> 
                                                    <td>
                                                        
                                                        <?php                                                        
                                                            echo "Notice : $rows[$FC_STUDENT_NOTICE_NAME]"."</br>";                                                         
                                                        ?>
                                                    
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        
                                                        <?php                                                    
                                                            echo "Des : $rows[$FC_STUDENT_NOTICE_DES]"."</br>";
                                                        ?>
                                                    
                                                    </td>
                                                </tr>
                                            </table>
                                        </fieldset>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                 </div>
                </fieldset>
            </div>
        </div>

    </body>
</html>