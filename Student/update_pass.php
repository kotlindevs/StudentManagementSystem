<!DOCTYPE html>
<html>
    <head> <title>Update Password</title> </head>
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

        }.chng_pass {
            border-color: crimson;
            color: crimson;
        }.chng_pass:hover {
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
                margin-left: 130px;
                border-radius: 8px;
                background-color: #101820;
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
            background: linear-gradient(to right  , orange , white , #101820);
        }

        .navbar {  
            width: 988px;
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

            <a style="margin-left: 28.5px" href="student_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Student Panel 
            </a> 

            <a class="active" href="update_pass.php">
                <i class="fa fa-fw fa-unlock"></i> 
                Update Password
            </a> 

            <a href="student_assignments.php">
                <i class="fa fa-fw fa-file"></i> 
                See Assignments
            </a> 

            <a href="student_notices.php">
                <i class="fa fa-fw fa-bell"></i> 
                See Notices  
            </a>

        </div>

        <div class="split left">
            <div class="centered">
                <img src="images_student/student_frgtpass.png">
                <h2 style="font-family: Comic Sans MS ; color: white">Want To Change Password ? </h2>
                <p style="font-family: Comic Sans MS ; color: white ; font-size: 20px;">Fill The Form Please ~</p>
            </div>
        </div>

        <div class="split right">

            <div class="centered">

                <h2 style="font-family: Comic Sans MS ; color: white ;"> ~ Change Password Here </h2>

                <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #FF7474 ; margin-bottom: 25px">

                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: crimson">Please Fill Up Data</fieldset>
                    </legend>

                    <form action="#" method="post">
            
                        <div style="margin-top: 7px;">
                            <input type="email" name="student_email" id="student_email" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Email ID" >
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input type="password" name="student_password" id="student_password" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Password Here" required>
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input type="password" name="studcpassword" id="studcpassword" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Confirm Password" required>
                        </div>
            
                        <div>
                            <input class="btn chng_pass" type="submit" name="changePassword" id="changePassword" value="Change Password" 
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
        include "Student_init.php" ;
        if(isset($_POST['changePassword'])){
        $EMAIL=$_POST[$STUDENT_EMAIL];
        $PASSWD=$_POST[$STUDENT_PASSWORD];
        $CPASSWD=$_POST['studcpassword'];

            if($PASSWD==$CPASSWD){
                $sql="UPDATE $STUDENT_ADD SET $STUDENT_PASSWORD='$PASSWD' WHERE $STUDENT_EMAIL='$EMAIL'";
                $dbQuery=mysqli_query($con,$sql);
                if(!$dbQuery){
                ?>
                    <script type="text/javascript">
                    alert("Something went wrong")
                    </script>
                <?php
                }else{
                ?>
                <script type="text/javascript">
                alert("Password Update Successfully")
                    window.open("http://localhost/sms-main/Student/student_login.php","_self")
                </script>
                <?php
                }
            }else{
                ?>
                <script type="text/javascript">
                alert("Confirm Password Must be Same as Password")
                </script>
                <?php
            }
        }

       ?>
    </body>
</html>