<html>
    <head>
    <style>
    .button_signin {
        transition-duration: 0.4s;
        border: 3px solid black;
        font-family:"Comic Sans MS";
        border-radius: 12px;
        padding: 12px 35px;
        margin-left: 25px;
        display: inline-block;
        text-align: center;
        background-color: white;
        color: black;
        font-size: 18px;
        cursor: pointer;
    }
    .signin {
        border-color: crimson;
        color: crimson;
        }

    .signin:hover {
        background-color: crimson;
        color: white;
    }
    .container {
    position: relative;
    }
    .center {
        position: absolute;
        top: 10%;
        width: 100%;
        text-align: center;
        font-size: 18px;
    }
    .center_img {
        display: block;
        margin-left: auto;
        margin-right: 50px;
    }
    #grad_back {
        background-image: linear-gradient(to bottom right , red , indigo , white);
    } 

    </style>
        <title>
            Admin Panel 
        </title>
    </head>

    <body id="grad_back">
        
    <table style="margin-left:auto ; margin-right:auto ; margin-top:20px ">
        <td>
            <img src ="images_student/student.png" class="center_img"/>
        </td>
        <td>

            <h1 style="font-family:Comic Sans MS ; color:white ;">Welcome To Student ~</h1>

            <h2 style="font-family:Comic Sans MS ; color:white ;">~ Your Rights > </h2>

            <p style="font-family:Comic Sans MS ; color:white ;"> 1 . See & Update Your Profile .</p>
            <p style="font-family:Comic Sans MS ; color:white ;"> 2 . Update Password .</p>
            <p style="font-family:Comic Sans MS ; color:white ;"> 3 . See Result .</p>
            <p style="font-family:Comic Sans MS ; color:white ;"> 4 . See Notice .</p>
            
            </br>

            <table>
                <td>
                    <form action="" method="POST">
                        <button class="button_signin signin" name="btnSignIn">Student Login</button>
                    </form>
                </td>
            </table>
            </p>
        </td>
    </table>
    </body>

    <?php

        if(isset($_POST['btnSignIn'])){
            ?>
                <script>
                    window.open("http://localhost/sms-main/Student/student_login.php","_self")
                    </script>
            <?php
        }
    ?>

</html>