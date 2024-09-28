<html>
    <head>
    <style>
    .button_signup {
        transition-duration: 0.4s;
        border: 3px solid black;
        font-family:"Comic Sans MS";
        border-radius: 12px;
        padding: 15px 40px;
        display: inline-block;
        text-align: center;
        background-color: white;
        color: black;
        font-size: 18px;
        cursor: pointer;
    }
    .signup {
        border-color: crimson;
        background-color: crimson;
        color: white;
        }

    .signup:hover {
        border-color: crimson;
        background-color: white;
        color: crimson;
    }
    .button_signin {
        transition-duration: 0.4s;
        border: 3px solid black;
        font-family:"Comic Sans MS";
        border-radius: 12px;
        padding: 15px 15px;
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
        margin-right: auto;
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
        
    <table style="margin-left:auto ; margin-right:auto ; margin-top:50px ; margin-bottom: auto">
        <td>
            <img src ="images_admin/admin.png" class="center_img" width=500px/>
        </td>
        <td>

            <h1 style="font-family:Comic Sans MS ; color:white ;">Welcome To Admin ~</h1>

            <h2 style="font-family:Comic Sans MS ; color:white ;">~ Your Rights > </h2>

            <p style="font-family:Comic Sans MS ; color:white ;"> 1 . See & Update Your Profile .</p>
            <p style="font-family:Comic Sans MS ; color:white ;"> 2 . See & Add Student .</p>
            <p style="font-family:Comic Sans MS ; color:white ;"> 3 . See & Add Faculty .</p>
            <p style="font-family:Comic Sans MS ; color:white ;"> 4 . See & Add Notice For Student & Faculty .</p>
            
            </br>

            <table>
                <td>
                    <form action="" method="POST">
                        <button style="margin-right:20px" class="button_signup signup" name="btnSignUp">New Admin</button>
                    </form>
                </td>
                <td>
                    <form action="" method="POST">
                        <button class="button_signin signin" name="btnSignIn">Already An Admin</button>
                    </form>
                </td>
            </table>
            </p>
        </td>
    </table>
    </body>

    <?php
        if(isset($_POST['btnSignUp'])){
            ?>
                <script>
                    window.open("http://localhost/sms-main/Admin/admin_signup.php","_self")
                    </script>
            <?php
        }

        if(isset($_POST['btnSignIn'])){
            ?>
                <script>
                    window.open("http://localhost/sms-main/Admin/admin_login.php","_self")
                    </script>
            <?php
        }
    ?>

</html>