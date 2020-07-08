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
                    <div class="signup-form" style="padding:10px;border: 6px dotted #ff80ff; width:400px;font-family: 'Bangers', cursive;	 font-size:120%; color:#ff00cc;" >	
                        <h2 class="form-title" style="color:#990099;font-family: 'Bangers', cursive;	font-weight:bold;">Find Your Gift</h2>
                        <form method="POST" class="register-form" id="register-form" action="connect2.php" enctype="multipart/form-data">                            
							
						<tr>
							<td align="right">Age Group :</td>							
							<td>
							<select name="age" style="color:purple">
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
							<select name="relationship" style="color:purple">
								<option>Select a Relationship</option>
								<option>Mother</option>
								<option>Father</option>
								<option>Sister</option>
								<option>Brother</option>
								<option>Girlfriend</option>
								<option>Boss</option>
								<option>Son</option>
								<option>Daughter</option>
								<option>Boyfriend</option>
								<option>Couples</option>
								<option>Husband</option>
								<option>Wife</option>
								<option>Other</option>								
							</select>
							
							</td>
						</tr>
						
						<tr>
							<td align="right">Budget :</td>
							<td><input type="number" name="budget" /></td>
						</tr>
							<br>
						
                            <div class="form-group form-button" style="margin-top:30px">
                                <input type="submit" name="filterCat" id="signup"  style="color:purple;background:#ff80ff; border:3px dotted purple; " class="form-submit" value="SEARCH FOR ME!"/>
                            </div>
                        </form>
                    </div>
					
					
					
					  <div class="signup-form" style="position:absolute;padding:10px;top:170px;left:700px;border: 6px dotted #ff80ff; width:400px;font-family: 'Bangers', cursive;	 font-size:120%; color:#ff00cc;" >	
                        <h2 class="form-title" style="padding-bottom:25px;color:#990099;font-family: 'Bangers', cursive;	font-weight:bold;">Our Popular Categories</h2>
								<h2 class="form-title" style="padding-bottom:10px;color:#0cf;font-family:Comic Sans Ms;font-size:110%;font-weight:bold;">Mobile Covers</h2>
								<h2 class="form-title" style="padding-bottom:10px;color:#c6f;font-family:Comic Sans Ms;font-size:110%;font-weight:bold;">Funky Shirts</h2>
								<h2 class="form-title" style="padding-bottom:10px;color:#0cf;font-family:Comic Sans Ms;font-size:110%;font-weight:bold;">Bags</h2>
								<h2 class="form-title" style="padding-bottom:10px;color:#c6f;font-family:Comic Sans Ms;font-size:110%;font-weight:bold;">Dresses</h2>
								<h2 class="form-title" style="padding-bottom:10px;color:#0cf;font-family:Comic Sans Ms;font-size:110%;font-weight:bold;">Show Pieces</h2>
                            <div class="form-group form-button" style="margin-top:30px">
                                <input type="submit" name="filterCat" id="signup"  style="color:purple;background:#ff80ff; border:3px dotted purple; " class="form-submit" value="Search!"/>
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
