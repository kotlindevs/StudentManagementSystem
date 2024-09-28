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
                width: 300px;
                border-radius: 20%;
            }
        </style>

    <body>

        <div class="split left">
            <div class="centered">
                <img src="images_admin/admin_login.png" width="400px">
                <h1 style="font-family: Comic Sans MS ; color: white">Welcome Back</h1>
                <p style="font-family: Comic Sans MS ; color: white">To Keep Connected With Us Please Signin With Your Admin Info.</p>
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
                     <form action="" method="post">
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
                                            <input type="email" name="admin_email" id="admin_email" 
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
                                            <input type="password" name="admin_password" id="admin_password" 
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
                        </form>
                            </tr> 
                        </td>
                     </form>
                    </table>
                </fieldset>

                <table>
                    <tr>
                        <form action="#" method="post">
                            <div style="margin-bottom: 17px">
                                <button class="btn already" name="newAccount" id="newAccount" 
                                    style="
                                    padding-left: 48px;
                                    padding-right: 48px;
                                    padding-top: 7px;
                                    padding-bottom: 7px;
                                    font-size: 17px;
                                    font-family: Comic Sans MS ; 
                                    font-weight: bold ;   
                                    border-radius: 12px ; 
                                    margin-top: 0px">New Admin ?
                                </button>
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
                    </tr>
                </table>

            </div>
        </div>
    </body>

        <?php
        session_start();
        include "Admin_init.php" ;

        if(isset($_POST['btnLogin'])){
            $EMAIL=$_POST[$ADMIN_EMAIL];
            $PASSWORD=$_POST[$ADMIN_PASSWORD];
            

            $selectQuery="SELECT * FROM $ADMIN WHERE $ADMIN_EMAIL='$EMAIL' AND $ADMIN_PASSWORD='$PASSWORD'";
            $dbQuery=mysqli_query($con,$selectQuery);
            $data=mysqli_num_rows($dbQuery);

            if($data){
                $_SESSION['email'] = $EMAIL;
                $_SESSION['isAdminLogin'] = 0;
                ?>
                    <script type="text/javascript">    
                        alert('Successfully Login');
                        window.open("http://localhost/sms-main/Admin/admin_panel.php","_self");
                    </script>

                <?php

            }else if($selectQuery="SELECT * FROM $ADMIN WHERE $ADMIN_EMAIL='$EMAIL' "){
                $dbQuery=mysqli_query($con,$selectQuery);
                $data=mysqli_num_rows($dbQuery);
                if($data){
                    
                        ?>
                            <script type="text/javascript">
                                alert('Wrong Password')
                            </script>
        
                        <?php
                }else{
                ?>
                    <script type="text/javascript">
                        alert('Admin not found Pls SignUp !')
                    </script>
                <?php
            }
            }
        }

        if(isset($_POST['newAccount'])){
            ?>
                <script type="text/javascript">
                    window.open("http://localhost/sms-main/Admin/admin_signup.php","_self")
                </script>
            <?php
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