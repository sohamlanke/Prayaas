<?php 

    require 'includes/checkLogin.php';

 ?>
<html>
    <head>
        <title>
            Volunteer
        </title>
        <link rel="stylesheet" href="css/Volunteer.css">
        <style type="text/css">
        
        #newAdmin{
            color: white;
            background-color: transparent;
            border: transparent;
            font-size: 17px;
            width: 150px;
            height: 40px;
            position: absolute;
            border-radius: 2px;
            margin-top: 9px;
            right: 144px;
            font-weight: bold;
        }
        #newAdmin:hover{
            background-color: #E8AA14;
        }
    </style>
    </head>
    <body>
        <header>
            <div class = "menubar">
                <ul>
                    <li><a href="admin.php" >Analytics</a></li>
                    <li><a href="#" class="active">Volunteer</a></li>
                    <!-- <li><a href="#">Campaign</a></li>
                    <li><a href="#">Funds</a></li> -->
                </ul>
                <form style="display: inline;" action="includes/logout.inc.php" method="post">
                <button type="submit" id = "logout"  >Logout</button>
            </form>
            <form style="display: inline;" action="admin-settings.php" method="post">
                <button type="submit" id="newAdmin">Admin Settings</button>
            </form>
            </div>
        </header>
        <div class = "info">
            <div id="box1" class="box">
                <form action="form.html" style="position: absolute; margin-left: 43%; padding: 8px;">
                    <input type="image" src="https://img.icons8.com/flat_round/24/000000/plus.png" name="">
                </form>
                <h2><p>Volunteers</p></h2>
			    <ul class="box-heading">
				<li>Name</li>
				<li>Email</li>
                <li>Age</li>
                <li>Location</li>
                </ul>     
                <table style="color: white; width: 100%;">
                    <tr>
                        <td>Sohamknsajndjsjdxcjsdjjwebdfjw</td>
                        <td>sohamsbjbsjbjbsjbcjbdjbjcdbjblanke@gmail.com</td>
                        <td>Age</td>
                        <td>Location</td>
                    </tr>
                    </tr>
                </table>
            </div>
            <div id="box2" class="box">
                <h2><p>Volunteer Requests</p></h2>
                <ul class="box-heading">
                <li>Name</li>
                <li>Email</li>
                <li>Age</li>
                <li>Location</li>
                <li>Yes/No</li>
                </ul>    
                 <table style="color: white; width: 100%;">
                    <tr>
                        <td style="width: 20%;">Sohamknsajndjsjdxcjsdjjwebdfjw</td>
                        <td style="width: 20%">sohamsbjbsjbjbsjbcjbdjbjcdbjblanke@gmail.com</td>
                        <td style="width: 20%">Age</td>
                        <td style="width: 20%">Location</td>
                        <td style="width: 20%"><input type="checkbox" name="checkbox" value="" onclick="window.location='includes/acceptVolunteer.php'"></td>
                    </tr>
                    </tr>
                </table>
                
            </div>
            <div id="box3" class="box" style="display: none;">
                <h2><p>Volunteer Requests</p></h2>
                <ul class="box-heading">
                    <li>Name</li>
				<li>Location</li>
                <li>Contact No.</li>
                <li>Email</li>
                <li>DOB</li>
                 </ul>
            </div>
            

        </div>
    </body>
</html>