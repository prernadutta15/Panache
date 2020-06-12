<!DOCTYPE html>
<?php 
//session_start();
//include("functions/functions.php");
include("includes/db.php"); 
?>
<!--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon 
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css 
    <link rel="stylesheet" href="css/register_css.css">
</head>
<body style="height:100vh;width:100%">

    <div class="main">

        <!-- Sign up form 
        <section class="signup" style="margin:-130px">
            <div class="container">
                <div class="signup-content">	-->
                    <div class="signup-form">	
                        <h2 class="form-title" style="color:#990099;">Customize Your Gift</h2>
                        <form method="POST" class="register-form" id="register-form" action="connect2.php" enctype="multipart/form-data">                            
							
						<tr>
							<td align="right">Age Group :</td>							
							<td>
							<select name="age">
								<option>Select a Age</option>
								<option>0-5</option>
								<option>6-12</option>
								<option>13-18</option>
								<option>19-25</option>
								<option>26-45</option>
								<option>46 or more</option>								
							</select>							
							</td>
						</tr>
						
						
						
						<tr>
							<td align="right">Relationship :</td>
							<td>
							<select name="relationship">
								<option>Select a Relationship</option>
								<option>Mother</option>
								<option>Father</option>
								<option>Sister</option>
								<option>Brother</option>
								<option>Girlfriend</option>
								<option>Boyfriend</option>
								<option>Couples</option>
								<option>General</option>								
							</select>
							
							</td>
						</tr>
						
						<tr>
							<td align="right">Budget :</td>
							<td><input type="number" name="budget" required/></td>
						</tr>
							<br>
						
                            <div class="form-group form-button">
                                <input type="submit" name="filterCat" id="signup"  style="color:#909;background:#ff80ff; " class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
<!--                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        

    </div>

    <!-- JS 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
<!--</body>
</html>-->
<?php


?>
