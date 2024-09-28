<!DOCTYPE html>
<html>
    <head> <title>Student Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body {font-family: "Comic Sans MS"}

        img{
            margin-top: 20px;
            border-radius: 50%;
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
            border-color: crimson;
            color: crimson;
        }.des:hover {
             background-color: crimson;
             color: white;
        }
        .card {
            color:black;
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

            button:hover, a:hover {
            opacity: 0.7;
            }
        .box_left{
            color: white;
            background-color: #F96167;
            height: 466px;
            width: 380px;
            border: 4px solid #F96167;
            border-radius: 12px;
            margin: 12px;
        }
        .box_middle{
            color: white;
            background-color: saddlebrown;
            height: 466px;
            width: 380px;
            border: 4px solid saddlebrown;
            border-radius: 12px;
            margin: 12px;
        }
        .box_right{
            color: white;
            background-color: orange;
            height: 466px;
            width: 380px;
            border: 4px solid orange;
            border-radius: 12px;
            margin: 12px;
        }

        #grad_back {
            background: linear-gradient(to right , orange , white , #101820);
        }

        .navbar {  
            width: 1090.50px;
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

            <a class="active" style="margin-left: 27.24px" href="student_panel.php">
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

            <a href="student_notices.php">
                <i class="fa fa-fw fa-bell"></i> 
                See Notices  
            </a>

            <a href="student_login.php">
                <i class="fa fa-fw fa-power-off"></i> 
                Logout  
            </a>

        </div>

        <div style="margin-top:14px">
            <form action="student_panel.php" method="post">
                <center>
                <table>
                    <td>
                        <div class="box_left">
                            <div class="card">
                                <img src="images_student/dp_student.png" width=140px/>
                                <div style="text-align:center ; font-family:Comic Sans MS ">
                                    <p contenteditable="true" style="margin-left:30px ; margin-right:30px">Student Name</p>
                                </div>
                                <p style="font-family:Comic Sans MS">Sutex Bank College Of Computer Applications & Science</p>
                                <div>
                                    <a href="https://www.instagram.com/rajatt.dev/" style="color:#F96167 ; margin-right:10px"><i class="fa fa-instagram"></i></a> 
                                    <a href="https://wa.me/9327998218?text=Hi" style="color:#F96167 ; margin-right:10px"><i class="fa fa-whatsapp"></i></a> 
                                    <a href="https://www.linkedin.com/in/rajat-kevat-97340a252/" style="color:#F96167 ; margin-right:10px"><i class="fa fa-linkedin"></i></a>  
                                    <a href="https://www.facebook.com/rajat.kevat.7" style="color:#F96167 ; margin-right:10px"><i class="fa fa-facebook"></i></a> 
                                    <p style="font-family:Comic Sans MS"> Student Can Add His/Her </br> Personal Details Here ~</p>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="box_middle">
                                <fieldset style="margin-left:12px ; margin-right:12px ; margin-top:12px ; border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                                    <legend style="color:white ; font-family:Comic Sans MS">
                                        <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Student Personal Details</fieldset>
                                    </legend>

                                    <div style="margin-top: 8px;">
                                        <input type="text" name="studfname" 
                                                id="studfname" 
                                                style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 128px; margin-right: 0px;" 
                                                placeholder="Enter First Name" required>
                                        <input type="text" name="studlname" 
                                                id="studlname" 
                                                style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 128px;" 
                                                placeholder="Enter Last Name" required>
                                    </div>

                                    <div style="margin-top: 7px;">
                                        <select name="mcode" style="border-right: 10px solid transparent ; border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px ; padding: 7px;">
                                            <option name="mcode">+91</option>
                                            <option name="mcode">+93</option>
                                            <option name="mcode">+213</option>
                                            <option name="mcode">+1</option>
                                            <option name="mcode">+57</option>
                                            <option name="mcode">+49</option>
                                            <option name="mcode">+30</option>
                                            <option name="mcode">+261</option>
                                            <option name="mcode">+60</option>
                                            <option name="mcode">+212</option>
                                            <option name="mcode">+258</option>
                                            <option name="mcode">+242</option>
                                            <option name="mcode">+262</option>
                                            <option name="mcode">+58</option>
                                            <option name="mcode">+84</option>
                                            <option name="mcode">+260</option>
                                        </select>
                                        <input type="text" name="studmno" id="studmno" 
                                            style="border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 202px;" 
                                            placeholder="Enter Mobile Number" required>
                                    </div>

                                    <div>
                                        <label for="studgender" style="font-family:Comic Sans MS ; color:white ; padding: 7px;margin-top: 7px;">Gender</label>
                                        <select name="studgender"
                                            style="border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px ; padding: 7px; width: 232px ; margin-top: 7px ; border-right: 16px solid transparent">
                                            <option name="studgender">Male</option>
                                            <option name="studgender">Female</option>
                                            <option name="studgender">Other</option>
                                        </select>
                                    </div>
                                </fieldset>

                                <fieldset style="margin-left:12px ; margin-right:12px ; margin-top:12px ; border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                                    <legend style="color:white ; font-family:Comic Sans MS">
                                        <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Student College Details</fieldset>
                                    </legend>   
                                    <div style="margin-top: 7px;">
                                        <input type="text" name="studcollege" id="studcollege" 
                                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                            placeholder="Enter College Name" required>
                                    </div>

                                    <div style="margin-top: 7px;">
                                        <input type="text" name="studcourse" id="studcourse" 
                                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                            placeholder="Enter Your Course" required>
                                    </div>

                                    <div>
                                        <label for="studdiv" style="padding: 4px;margin-top: 7px; font-family:Comic Sans MS ; color:white ">Division</label>
                                        <select name="studdiv" 
                                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px; border-right: 16px solid transparent">
                                            <option name="studdiv">1</option>
                                            <option name="studdiv">2</option>
                                            <option name="studdiv">3</option>
                                            <option name="studdiv">4</option>
                                            <option name="studdiv">5</option>
                                            <option name="studdiv">6</option>
                                            <option name="studdiv">7</option>
                                            <option name="studdiv">8</option>
                                        </select>
                                    </div>

                                    <div style="margin-top: 7px;">
                                        <input type="text" name="studrno" id="studrno" 
                                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                            placeholder="Enter Your Roll No" required>
                                    </div>
                                </fieldset>
                        </div>
                    </td>

                    <td>
                        <div class="box_right">
                            <fieldset style="margin-left:12px ; margin-right:12px ; margin-top:52px ; border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                                <legend style="color:white ; font-family:Comic Sans MS">
                                    <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Student Residential Data</fieldset>
                                </legend>
                                <div style="margin-top: 7px;">
                                    <textarea name="studaddress" id="studaddress"  
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px; " 
                                        placeholder="Enter Your Address" required></textarea>
                                </div>

                                <div>
                                    <input type="text" name="studcity" id="studcity" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                        placeholder="Enter Current City" required>
                                </div>

                                <div>
                                    <label for="studstate" style="padding: 7px;margin-top: 7px ; font-family:Comic Sans MS ; color:white">State </label>
                                    <select name="studstate" 
                                        style="border-right: 16px solid transparent ; border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px;">
                                        <option name="studstate">Gujarat</option>
                                        <option name="studstate">Maharastra</option>
                                        <option name="studstate">Delhi</option>
                                        <option name="studstate">MadhyaPradesh</option>
                                        <option name="studstate">Banglore</option>
                                    </select>
                                </div>

                                <div style="margin-top: 7px;">
                                    <input type="text" name="studpincode" id="studpincode" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                        placeholder="Enter Correct Pincode" required>
                                </div>

                            </fieldset>

                            <div>
                                <input class="button des"type="submit" name="btnAddData" id="btnData" value="Add Data" 
                                style=" padding-left: 40px ; padding-right: 40px;
                                        padding-top: 7px;padding-bottom: 7px;
                                        font-size: 17px;
                                        font-family: Comic Sans MS ; 
                                        font-weight: bold ;   
                                        border-radius: 12px ; 
                                        margin-top: 22px ; 
                                        margin-left: 100px;
                                        margin-right: 95px">
                            </div>

                            <div style="text-align:center">
                                <p> This Is Student Personal Panel </br> So No Data Will Be Shared With </br> Faculty Or Admin !</p>
                            </div>
                        </div>
                    </td>
                </table>
                </center>
            </form>
        </div>
    </body>
</html>