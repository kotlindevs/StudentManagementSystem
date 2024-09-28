<html>
    <head>
        <title>
            Student Management System
        </title>
        <meta name="viewreport" content="width=device-width, initial-scale=1">
    </head>
    
    <style>

        #mySidenav a {
        position: absolute;
        left: -105px;
        transition: 0.3s;
        padding: 15px;
        width: 100px;
        text-decoration: none;
        font-size: 20px;
        color: white;
        border-radius: 0 12px 12px 0;
        }

        #mySidenav a:hover {
        left: 0;
        }

        #about {
        top: 20px;
        background-color: black;
        }
        #contact {
        top: 80px;
        background-color: #555
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;
        }
        .btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
            }
            .panel {
                border-color: crimson;
                color: crimson;
            }.panel:hover {
                background-color: crimson;
                color: white;
            }
        #grad_back 
        {
            background-image: linear-gradient(to bottom right , orangered , white , green);
        }
    </style>

    <body id="grad_back">
        <div id="mySidenav" class="sidenav">
            <a href="about_us.php" id="about">About Us</a>
            <a href="contact_us.php" id="contact">Contact Us</a>
        </div>
        <h1 style="margin-top: 20px; text-align:center ; font-family:Comic Sans MS ; color: white"> 
            Welcome To Student Management System 
        </h1>
        <table class="center">
            <td>
                <img src="home_main.png"/>
            </td>
            <td>
                <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474 ; margin-bottom: 25px">
                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">
                            Who Are You ?
                        </fieldset>
                    </legend>
                    
                    <form action="Admin/Admin.php" method="post">
                        <div style="margin-bottom: 15px ; text-align: center">
                            <input class="btn panel" type="submit" name="btnAdmin" id="btnAdmin" value="Admin" 
                            style="
                            padding-left: 40px;
                            padding-right: 40px;
                            padding-top: 7px;
                            padding-bottom: 7px;
                            font-size: 17px;
                            font-family: Comic Sans MS ; 
                            font-weight: bold ;   
                            border-radius: 12px ; 
                            margin-top: 22px">
                        </div>
                    </form>

                    <form action="Faculty/Faculty.php" method="post">
                        <div style="margin-bottom: 15px ; text-align: center">
                            <input class="btn panel" type="submit" name="btnFaculty" id="btnFaculty" value="Faculty" 
                            style="
                            padding-left: 36px;
                            padding-right: 36px;
                            padding-top: 7px;
                            padding-bottom: 7px;
                            font-size: 17px;
                            font-family: Comic Sans MS ; 
                            font-weight: bold ;   
                            border-radius: 12px ; ">
                        </div>
                    </form>

                    <form action="Student/Student.php" method="post">
                        <div style="margin-bottom: 15px ; text-align: center">
                            <input class="btn panel" type="submit" name="btnStudent" id="btnStudent" value="Student " 
                            style="
                            padding-left: 30px;
                            padding-right: 30px;
                            padding-top: 7px;
                            padding-bottom: 7px;
                            font-size: 17px;
                            font-family: Comic Sans MS ; 
                            font-weight: bold ;   
                            border-radius: 12px ; ">
                        </div>
                    </form>
                </fieldset>
            </td>
        </table>
    </body>
</html>

