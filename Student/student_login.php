<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
    <meta charset="UTF-8">
    <head>
        <title>
            Student Login
        </title>
    </head>
    <body>
        <style>
            .btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;

            }.signin {
                border-color: crimson;
                color: crimson;
            }.signin:hover {
                background-color: crimson;
                color: white;

            }.already {
                border-color: crimson;
                color: crimson;
            }.already:hover {
                background-color: crimson;
                color: white;

            }.frgt {
                border-color: crimson;
                color: crimson;
            }.frgt:hover {
                background-color: crimson;
                color: white;
            }
            .label{
                font-family: "Comic Sans MS";
                color: white;
            }
            .split {
                height: 100%;
                width: 50%;
                position: fixed;
                z-index: 1;
                top: 0;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .left {
                left: 0;
                background-color: indigo;
            }

            .right {
                right: 0;
                background-color: palevioletred;
            }

            .centered {
                position: absolute;
                top: 50%;   
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .centered img {
                border-radius: 20%;
            }
        </style>

    <body>

        <div class="split left">
            <div class="centered">
                <img src="images_student/student_login.png">
                <h1 style="font-family: Comic Sans MS ; color: white">Welcome Back</h1>
                <p style="font-family: Comic Sans MS ; color: white">To Keep Connected With Us Please Signin With Your Student Info.</p>
            </div>
        </div>

        <div class="split right">
            <div class="centered">
                <h1 style="font-family: Comic Sans MS ; color: white ;"> ~ Sign In Form </h1>
                <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474 ; margin-bottom: 25px">
                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Please Fill Up Data</fieldset>
                    </legend>
                            
                    <table>
                     <form action="#" method="post">
                        <td>
                            <tr>
                                <table>
                                    <td>
                                        <div class="label" style="margin-right: 28px;">
                                            <h9>Email</h9>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="email" name="student_email" id="faculty_email" 
                                                style="margin-inline-start: 7px ; padding: 7px ; 
                                                        width: 250px ; border-radius:12px ; 
                                                        outline-color: transparent ; border-color: transparent" 
                                                        placeholder="you@example.com" required >
                                        </div>
                                    </td>
                                </table>
                                <table>
                                    <td>
                                        <div class="label">
                                            <h9>Password</h9>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="password" name="student_password" id="faculty_password" 
                                                style="margin-inline-start: 7px ; padding: 7px ; margin-top: 5px;
                                                        width: 250px ; border-radius:12px ; 
                                                        outline-color: transparent ; border-color: transparent ; "  
                                                        placeholder="Atleast 8 Chars Please !" required>
                                        </div>
                                    </td>
                                </table>

                                <div style="margin-bottom: 15px">
                                    <input class="btn signin" type="submit" name="btnLogin" id="btnLogin" value="SignIn" 
                                    style="
                                    padding-left: 32px;
                                    padding-right: 32px;
                                    padding-top: 7px;
                                    padding-bottom: 7px;
                                    font-size: 17px;
                                    font-family: Comic Sans MS ; 
                                    font-weight: bold ;   
                                    border-radius: 12px ; 
                                    margin-top: 22px">
                                </div>
                            </tr> 
                        </td>
                     </form>
                    </table>
                </fieldset>
                    <form action="update_pass.php" method="post">
                        <div style="margin-bottom: 15px">
                            <input class="btn signin" type="submit" name="btnFrgtPass" id="btnFrgtPass" value="Forgot Password ?" 
                            style="
                            padding-left: 32px;
                            padding-right: 32px;
                            padding-top: 7px;
                            padding-bottom: 7px;
                            font-size: 17px;
                            font-family: Comic Sans MS ; 
                            font-weight: bold ;   
                            border-radius: 12px ; 
                            margin-top: 22px">
                        </div>
                    </form>
                            <form action="#" method="post">
                                    <div style="margin-bottom: 15px">
                                        <button class="btn signin" name="go_to_home" id="go_to_home" 
                                        style="
                                        padding-left: 32px;
                                        padding-right: 32px;
                                        padding-top: 7px;
                                        padding-bottom: 7px;
                                        font-size: 17px;
                                        font-family: Comic Sans MS ; 
                                        font-weight: bold ;   
                                        border-radius: 12px ;">Go To Home
                                        </button>
                                    </div>
                            </form>
            </div>
        </div>
    </body>

    <?php
        include "Student_init.php";

        if(isset($_POST['btnLogin'])){

            $EMAIL=$_POST[$STUDENT_EMAIL];
            $PASSWORD=$_POST[$STUDENT_PASSWORD];
            
            $selectQuery="SELECT * FROM $STUDENT_ADD WHERE $STUDENT_EMAIL='$EMAIL' AND $STUDENT_PASSWORD='$PASSWORD' ";
            $dbQuery=mysqli_query($con,$selectQuery);
            $data=mysqli_num_rows($dbQuery);

            if($data){
                $_SESSION['email'] = $EMAIL;
                $_SESSION['isStudentLogin'] = 0;
                ?>
                <script type="text/javascript">
                    alert("Sucessfully Login")
                    window.open("http://localhost/sms-main/Student/student_panel.php","_self")
                </script>
            <?php
            }else{
                ?>
                    <script type="text/javascript">
                        alert("Something went wrong ! try Again ...")
                    </script>
                <?php
            }
        }
        if(isset($_POST['go_to_home'])){
            ?>
                <script type="text/javascript">
                    window.open("http://localhost/sms-main/main.php","_self")
                </script>
            <?php
        }
    ?>
    </body>
</html>