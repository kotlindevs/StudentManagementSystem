<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
        font-family: "Comic Sans MS";
        margin: 0;
        }

        html {
        box-sizing: border-box;
        }

        *, *:before, *:after {
        box-sizing: inherit;
        }

        .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
        }

        .card {
        background-color: lightblue;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        border-radius: 25px;
        }

        .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
        }

        .container {
        padding: 0 16px;
        }

        .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
        }

        .title {
        color: grey;
        }

        .button {
        border: none;
        outline: 0;
        border-radius: 25px;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        }

        .button:hover {
        background-color: #555;
        }

        @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
        }
        </style>
    </head>
    <body>

        <div class="about-section">
        <h1>About Us Page</h1>
        <p>We Are Piyush & Rajat From TYBCA-5 !</p>
        <p>We Developed This Project Just In 1 & Half Week , So Go Through It If You Like Our Project Then You Can Contact Us !</p>
        </div>

        <h2 style="text-align:center">Our Team</h2>
        <div class="row" style="text-align:center">
            <div class="column">
                <div class="card">
                    <img src="piyush.jpg" alt="Piyush" style="width:200px ; border-radius:100px ; margin-top:25px">
                    <div class="container">
                        <h2>Piyush Makwana</h2>
                        <p class="title">Back-end Developer</p>
                        <p>Backend developer responsibilities include creating, maintaining, testing, and debugging the entire back end of an application or system. This includes the core application logic, databases, data and application integration, API, and other processes.</p>
                        <p>insider0piyush@gmail.com</p>
                        <p><a href="contact_us.php"><button class="button">Contact</button></a></p>
                    </div>
                </div>
            </div>
        
            <div class="column">
                <div class="card">
                <img src="rajat.jpg" alt="Rajat" style="width:200px ; border-radius:100px ; margin-top:25px">
                    <div class="container">
                        <h2>Kevat Rajat</h2>
                        <p class="title">Front-end Developer</p>
                        <p>A Front-End Developer is responsible for developing new user-facing features, determining the structure and design of web pages, building reusable codes, and using a variety of markup languages to create the web pages.</p>
                        <p>kevatrajat29@gmail.com</p>
                        <p><a href="contact_us.php"><button class="button">Contact</button></a></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="web.jpg" alt="web" style="width:200px ; border-radius:100px ; margin-top:25px">
                    <div class="container">
                        <h1>What We Used ?</h1>
                        <p>www.stackoverflow.com</p>
                        <p>www.w3schools.com</p>
                        <p>www.icons8.com</p>
                        <p>www.color-hex.com</p>
                        <p>www.github.com</p>
                        <p><a href="https://google.com/"><button class="button">Visit</button></a></p>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>