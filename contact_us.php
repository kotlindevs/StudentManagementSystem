<html>
    <head>
        <title>
            Contact Us
        </title>
    </head>
    <style>
        .btn {
        border: 2px solid #ccc;
        border-radius:4px;
        background-color: white;
        color: black;
        margin-left:12px;
        padding:12px;
        font-family:Times New Roman;
        font-size:18px;
        cursor: pointer;
        }
        .panel
        {
            border-color: black;
            color: black;
        }
        .panel:hover 
        {
            background-color: black;
            color: white;
        }
        textarea 
        {
        margin-left:12px;
        margin-bottom:12px;
        width: 100%;
        height: 150px;
        padding: 12px 18px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
        }
        .text_des
        {
            border:2px solid #ccc;
            border-radius:4px;
            padding-left:8px;
            padding-top:8px;
            padding-bottom:8px;
            padding-right:52px;
            margin-left:12px;
            margin-right:12px;
            margin-top:4px;
            margin-bottom:18px;
        }
        .text_des_ddi
        {
            border:2px solid #ccc;
            border-radius:4px;
            padding-right:68px;
            padding-left:8px;
            padding-top:8px;
            padding-bottom:8px;
            margin-left:12px;
            margin-right:12px;
            margin-top:4px;
            margin-bottom:12px;
        }
        
        .text_des_ddb
        {
            border:2px solid #ccc;
            border-radius:4px;
            padding-right:120px;
            padding-left:8px;
            padding-top:8px;
            padding-bottom:8px;
            margin-left:12px;
            margin-right:12px;
            margin-top:4px;
            margin-bottom:12px;
        }
    </style>
    <body>
    <center>
            <table>
                <form action="" method="post">
                    <div>
                        <h1>Love to hear from you , </br> Get in touch👋</h1>
                    </div>

                    <tr>
                        <td>
                            <label style="margin-left:12px ; font-weight:bold">
                                Your name
                            </label>
                        </td>
                        <td>
                            <label style="margin-left:12px ; font-weight:bold">
                                Your email
                            </label>
                        </td>     
                    </tr>
                    <tr>
                        <td>
                            <input id="name" type="text" class=text_des placeholder="Enter Your Name" required/>
                        </td>
                        <td>
                            <input id="email" type="text" class=text_des placeholder="you@example.com" required/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label style="margin-left:12px ; font-weight:bold">
                                What you are interested
                            </label>
                        </td>
                        <td>
                            <label style="margin-left:12px ; font-weight:bold">
                                Project Budget
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class=text_des_ddi>
                                <option>Website Development</option>
                                <option>Website Design</option>
                                <option>App Development</option>
                                <option>App Design</option>
                                <option>Java Source Codes</option>
                                <option>Python Source Codes</option>
                            </select>
                        </td>
                        <td>
                            <select class=text_des_ddb>
                                <option>5000-10000</option>
                                <option>10000-15000</option>
                                <option>15000-20000</option>
                                <option>20000-25000</option>
                                <option>25000-30000</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label style="margin-left:12px ; font-weight:bold">
                                Message 
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <textarea id="cdetail" placeholder="Let tell us know your project about" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="btngo" name="btngo" type="button" value="Just Send" class="btn panel"/>
                        </td>
                    </tr>
                </form>
            </table>
        </center>
    </body>
    <?php
        if(isset($_POST['btngo'])){
        ?>
            <script type="text/javascript">
                alert('Thanks For Contacting Us ❤️');
            </script>
        <?php
        }
    ?>
</html>