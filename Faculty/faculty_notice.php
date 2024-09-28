<?php
    include "Faculty_init.php";
    $select_notice = "SELECT * FROM $FACULTY_NOTICE_ADD";
    $queryExe = mysqli_query($con,$select_notice);
    $dbquery = mysqli_num_rows($queryExe);
?>

<!DOCTYPE html>
<html>
    <head> <title>Faculty Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .scrollable-container { 
            border-radius: 8px;
            height: 350px; 
            overflow-y: auto;
            padding: 10px;
            border: 2px solid white;
        }
        .card {
            border-radius: 12px;
            text-align: center;
            padding: 8px;
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
            background-color:  #F96167;
        }
        .right {
            right: 0;
            margin-right: 130px;
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
            background: linear-gradient(to right , #F9E795 , white , #F96167);
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

            <a href="faculty_assignments.php">
                <i class="fa fa-fw fa-book"></i> 
                Assignments
            </a> 

            <a class="active" href="faculty_notice.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notices  
            </a>

        </div>

        <div class="split left">
            <div class="centered">
                <h3 style="font-family: Comic Sans MS ; color: white ;">~ Genrated By Admin Notice For Faculty ~</h3>

                <fieldset style="margin-left: -30%; margin-right: -30% ; border-radius:15px ; border-color:white ; border-width:4px ; background-color: #14397d ; margin-bottom: 25px">
                 <div class="scrollable-container" style="margin-top: 5px; margin-bottom: 5px; margin-left: 5px; margin-right: 5px; background-color: #77b5d9;">
                    <legend style="font-family: Comic Sans MS ; color: white ; margin-bottom: 12px;">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #14397d">Read Notice Here</fieldset>
                    </legend>

                    <?php
                        if($dbquery){
                            while($rows = mysqli_fetch_array($queryExe)){
                                ?>
                                    <div>    
                                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #F9E795 ; margin-bottom: 10px">
                                            <table style="text-align:left"> 
                                                <tr>
                                                    <td class="card">
                                                        
                                                        <?php
                                                            echo "Date : $rows[$FACULTY_NOTICE_DATE]";
                                                        ?>
                                                    
                                                    </td>
                                                </tr>
                                                <tr> 
                                                    <td>
                                                        
                                                        <?php                                                        
                                                            echo "Notice : $rows[$FACULTY_NOTICE_NAME]";                                                         
                                                        ?>
                                                    
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        
                                                        <?php                                                    
                                                            echo "Des : $rows[$FACULTY_NOTICE_DES]";
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

        <div class="split right">
            <div class="centered">
                
                <h2 style="font-family: Comic Sans MS ; color: crimson ;">~ Genrate Notice For Student ~</h2>

                    <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #FF7474 ; margin-bottom: 25px">

                        <legend style="font-family: Comic Sans MS ; color: white">
                            <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: crimson">Add Notice Here</fieldset>
                        </legend>

                        <form action="#" method="post">

                            <div style="margin-top: 7px;">
                                <input type="date" name="fc_student_notice_date" id="fc_student_notice_date" 
                                    style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                            border-radius: 12px; outline-color: transparent;
                                            border-color: transparent; margin-bottom: 3px" 
                                    placeholder="Enter Date Of Notice" required>
                            </div>

                            <div style="margin-top: 7px;">
                                <input type="text" name="fc_student_notice_name" id="fc_student_notice_name" 
                                    style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                            border-radius: 12px; outline-color: transparent;
                                            border-color: transparent; margin-bottom: 3px" 
                                    placeholder="Enter Topic Of Notice" required>
                            </div>

                            <div style="margin-top: 7px;">
                                <input type="text" name="fc_student_notice_des" id="fc_student_notice_des" 
                                    style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                            border-radius: 12px; outline-color: transparent;
                                            border-color: transparent; margin-bottom: 3px " 
                                    placeholder="Enter Description Of Notice" required>
                            </div>

                            <div>
                                <input class="btn add_fac" type="submit" name="fc_add_notice_student" id="fc_add_notice_student" value="Student Notice" 
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
            include "Faculty_init.php";
           $createTable =  "CREATE TABLE IF NOT EXISTS $FC_NOTICE_STUDENT($FC_STUDENT_NOTICE_DATE DATE,$FC_STUDENT_NOTICE_NAME TEXT,$FC_STUDENT_NOTICE_DES TEXT)";
           $queryExe = mysqli_query($con,$createTable);

           if(isset($_POST['fc_add_notice_student'])){

            $DATE_FC_ST = $_POST[$FC_STUDENT_NOTICE_DATE];
            $NAME_FC_ST = $_POST[$FC_STUDENT_NOTICE_NAME];
            $DES_FC_ST = $_POST[$FC_STUDENT_NOTICE_DES];

            $sql = "SELECT * FROM $FC_NOTICE_STUDENT WHERE $FC_STUDENT_NOTICE_NAME OR $FC_STUDENT_NOTICE_DES";
            $dbquery = mysqli_query($con,$sql);
            $data = mysqli_num_rows($dbquery);

            if($data){
                ?>
                    <script>
                        alert("This Notice Added Already For Students !");
                        window.open("http://localhost/sms-main/Faculty/faculty_notice.php","_self");
                    </script>
                <?php
            } else {
                $insertInTable = "INSERT INTO $FC_NOTICE_STUDENT VALUES('$DATE_FC_ST','$NAME_FC_ST','$DES_FC_ST')";
                $queryExe = mysqli_query($con,$insertInTable);
                if($queryExe){
                    ?>
                        <script>
                            alert("Notice Added Successfully For Students !");
                            window.open("http://localhost/sms-main/Faculty/faculty_notice.php","_self");
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert("Something Went Wrong !");
                            window.open("http://localhost/sms-main/Faculty/faculty_notice.php","_self");
                        </script>
                    <?php
                }
            }
        }
        ?>

    </body>
</html>