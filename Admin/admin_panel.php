<html>

<head>
    <title>Admin Panel </title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: "Comic Sans MS";
    }

    img {
        margin-top: 25px;
        border-radius: 50%;
    }

    .text_des {
        border: 2px solid #ccc;
        border-radius: 4px;
        padding-left: 8px;
        padding-top: 9px;
        padding-bottom: 9px;
        padding-right: 52px;
        margin-left: 12px;
        margin-top: 4px;
        margin-bottom: 18px;
    }

    .card {
        color: black;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 8px 0 black;
        max-width: 300px;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
        text-align: center;
        font-family: arial;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }

    .box_left {
        margin: 8px;
        color: white;
        background-color: #F96167;
        height: 471.1px;
        width: 360px;
        border: 4px solid #F96167;
        border-radius: 25px;
    }

    .box_right {
        color: white;
        padding-left: 8px;
        padding-right: 8px;
        background-color: orange;
        height: 471.1px;
        width: 890px;
        border: 4px solid orange;
        border-radius: 25px 0px 0px 25px;
    }

    #grad_back {
        background: linear-gradient(to right, #EEA47F, white, #00539C);
    }

    .navbar {
        width: 1086px;
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

    .button {
        font-family: "Comic Sans MS";
        border: 2px solid black;
        border-radius: 12px;
        background-color: white;
        color: black;
        padding: 7px 14px;
        font-size: 16px;
        cursor: pointer;
    }

    .des {
        border-color: orange;
        color: orange;
    }

    .des:hover {
        background-color: black;
        color: white;
    }
</style>

<body id="grad_back">
    <div class="navbar" style="border-radius:25px ; border-color:#FF5733 ; border-style:solid ; border-width:2px">

        <a style="background-color:#E9967A">
            <h7 style="margin-left: 20px;">Student Management System</h7>
        </a>

        <a style="margin-left: 57.5px" class="active" href="admin_panel.php">
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

        <a href="faculty_update.php">
            <i class="fa fa-fw fa-wrench"></i>
            Faculty Update
        </a>

        <a href="student_panel.php">
            <i class="fa fa-fw fa-user"></i>
            Student
        </a>

        <a href="admin_logout.php">
            <i class="fa fa-fw fa-power-off"></i>
            Logout
        </a>


    </div>

    <div style="margin-top: 16px">
        <center>
            <table>
                <td>
                    <div class="box_left">
                        <div class="card">
                            <img src="images_admin/rajat.jpg" width=140px />
                            <div style="text-align:center ; font-family:Comic Sans MS ">
                                <?php
                                include "Admin_init.php";
                                $sql = "SELECT * FROM $ADMIN";
                                $queryExe = mysqli_query($con, $sql);
                                $dbquery = mysqli_query($con, $sql);
                                $data = mysqli_num_rows($dbquery);
                                if ($dbquery) {
                                    while ($rows = mysqli_fetch_array($queryExe)) {
                                        echo "Welcome , $rows[$ADMIN_NAME]" . "</br>";
                                        echo "You Are Current Admin Now!" . "</br>";
                                    }
                                }
                                ?>
                            </div>
                            <p style="font-family:Comic Sans MS">Sutex Bank College Of Computer Applications & Science
                            </p>
                            <div>
                                <a href="https://www.instagram.com/rajatt.dev/"
                                    style="color:#F96167 ; margin-right:10px"><i class="fa fa-instagram"></i></a>
                                <a href="https://wa.me/9327998218?text=Hi" style="color:#F96167 ; margin-right:10px"><i
                                        class="fa fa-whatsapp"></i></a>
                                <a href="https://www.linkedin.com/in/rajat-kevat-97340a252/"
                                    style="color:#F96167 ; margin-right:10px"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.facebook.com/rajat.kevat.7"
                                    style="color:#F96167 ; margin-right:10px"><i class="fa fa-facebook"></i></a>
                                <p style="font-family:Comic Sans MS"> You Can Operate </br> Faculty From Here ~</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="box_right" style="overflow-y:scroll ; overflow-x:hidden ">
                        <h2 style="text-align:center">
                            <i class="fa fa-fw fa-search" style="margin-right:4px"></i>Search Faculty Data ~
                            <form style="margin-top:8px" action="" method="post">
                                <input class="text_des" type="text" placeholder="Search..." id="search_faculty_box"
                                    name="search_faculty_box" />
                                <input class="button des" type="submit" id="btnSearch" name="btnSearch"
                                    value="Search" />
                            </form>
                        </h2>
                        <center>
                            <table border="6px" cellspacing="0px" cellpadding="10px"
                                style="text-align:center; margin:8px; background-color: transparent; border-radius: 8px; border-color: thistle;">
                                <tr>
                                    <th style="font-family: Comic Sans MS;
                                font-size: 14px; font-weight: bold;">
                                        NAME
                                    </th>
                                    <th colspan="0px" style="font-family: Comic Sans MS;
                                font-size: 14px; font-weight: bold;">
                                        MOBILE NO
                                    </th>
                                    <th style="font-family: Comic Sans MS;
                                font-size: 14px; font-weight: bold;">
                                        EMAIL
                                    </th>
                                    <th style="font-family: Comic Sans Ms;
                                font-size: 14px; font-weight: bold;">
                                        QUALIFICATION
                                    </th>
                                    <th colspan="0px" style="font-family: Comic Sans MS;
                                font-size: 14px; font-weight: bold;">
                                        PASSWORD
                                    </th>
                                    <th colspan="2" style="font-family: Comic Sans MS;
                                font-size: 14px; font-weight: bold;">
                                        ACTION
                                    </th>
                                </tr>



                                <?php
                                if (isset($_POST['btnSearch'])) {
                                   
                                    $val = $_POST['search_faculty_box'];
                               
                                    $sql = "SELECT * FROM $FACULTY_ADD WHERE $FACULTY_NAME LIKE '%${val}%' ";
                            
                                $queryExe = mysqli_query($con, $sql);
                                $data = mysqli_num_rows($queryExe);
                                if ($data) {
                                    while ($row = mysqli_fetch_array($queryExe)) {
                                        ?>
                                        <tr style="font-family: Comic Sans MS;
                                        font-size: 14px; font-weight: bold;">
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_NAME];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_MNO];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_EMAIL];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_QUALIFICATION];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_PASSWORD];
                                                ?>
                                            </td>
                                            <td>
                                                <a href="faculty_delete.php?faculty_email=<?php echo $row['faculty_email'] ?> "><button
                                                        class="button des">DELETE</button></a>
                                            </td>
                                            <td>
                                                <a href="faculty_update.php?faculty_email=<?php echo $row['faculty_email'] ?> "><button
                                                        class="button des">UPDATE</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }else{
                                    echo "<center>
                                            <h1> No Records Found ! </br> 
                                            </h1>
                                        </center>";
                                }
                            }else{

                                include "Admin_init.php";
                                mysqli_query(
                                    $con,
                                    "CREATE TABLE IF NOT EXISTS $FACULTY_ADD($FACULTY_MNO BIGINT UNIQUE,
                            $FACULTY_NAME TEXT,$FACULTY_EMAIL VARCHAR(256) PRIMARY KEY,$FACULTY_PASSWORD TEXT,$FACULTY_QUALIFICATION TEXT)"
                                );
                                $sql = "SELECT * FROM $FACULTY_ADD";
                                $queryExe = mysqli_query($con, $sql);
                                $data = mysqli_num_rows($queryExe);
                                if ($data) {
                                    while ($row = mysqli_fetch_array($queryExe)) {
                                        ?>
                                        <tr style="font-family: Comic Sans MS;
                                        font-size: 14px; font-weight: bold;">
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_NAME];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_MNO];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_EMAIL];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_QUALIFICATION];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $row[$FACULTY_PASSWORD];
                                                ?>
                                            </td>
                                            <td>
                                                <a href="faculty_delete.php?faculty_email=<?php echo $row['faculty_email'] ?> "><button
                                                        class="button des">DELETE</button></a>
                                            </td>
                                            <td>
                                                <a href="faculty_update.php?faculty_email=<?php echo $row['faculty_email'] ?> "><button
                                                        class="button des">UPDATE</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<center>
                                            <h1> No Records ! </br> 
                                                Please Add Some Records 
                                            </h1>
                                        </center>";
                                }
                                
                            }
                                ?>
                            </table>
                        </center>
                    </div>
                </td>
            </table>
        </center>
    </div>
</body>

</html>