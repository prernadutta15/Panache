<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="login.css" />
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:100vx; }
  #section2 {padding-top:50px;height:100vx;}
  #section3 {padding-top:50px;height:100vx;}
 h1 {
	 color: #ff4081;
	 font-family: 'Dancing Script', cursive;
}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" async></script>
<script>
$('#password').focusin(function(){
  $('form').addClass('up')
});
$('#password').focusout(function(){
  $('form').removeClass('up')
});

// Panda Eye move
$(document).on( "mousemove", function( event ) {
  var dw = $(document).width() / 15;
  var dh = $(document).height() / 15;
  var x = event.pageX/ dw;
  var y = event.pageY/ dh;
  $('.eye-ball').css({
    width : x,
    height : y
  });
});

// validation


$('.btn').click(function(){
  $('form').addClass('wrong-entry');
    setTimeout(function(){ 
       $('form').removeClass('wrong-entry');
     },3000 );
});
</script>
<nav >

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

          <li style="position:absolute;top:40px;left:80px;"><div class="panda" >
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form method="post" action="all_products.php">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1 style="font-weight:bold">Not a User?</h1>
  <h2 style="color:#ff4081;font-family:'Dancing Script', cursive;">Hurry!</h2>
  <h2 style="color:#ff4081;font-family:'Dancing Script', cursive;margin-bottom:40px;">Register Immediately!</h2>
  <a href="register.php" style="text-decoration:none;font-family:'Dancing Script', cursive; font-size:160%;font-weight:bold;width:190px;background:white; height:40px;color: #ff4081;border:3px solid #ff4081;padding-right:20px;padding-left:20px;padding-top:5px;">Register!</a>
</form></a></li>
 <li style="position:absolute;top:40px;left:500px;">
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form method="post" action="all_products.php">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>Ready for Login?</h1>
  <div class="form-group">
    <input required="required" name="email" class="form-control"/>
    <label class="form-label" >Email ID </label>
  </div>

  <div class="form-group">
    <input id="password" type="password" required="required" name="pass" class="form-control"/>
    <label class="form-label">Password</label>
    <p class="alert">Enter Credentials..!!</p>
    <input type="submit" name="login" value="Login" style=" font-size:120%;font-weight:bold;margin-top:30px;width:190px;background:white; height:40px;color: #ff4081;border:3px solid #ff4081;"/>
  </div>
</form>


</a></li>
        
<li style="position:absolute;top:40px;left:920px;">
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form method="post" action="all_products.php">
  <div class="hand"></div>
  <div class="hand rgt"></div>
	<h1 style="font-weight:bold">Admin?</h1>
  <h2 style="color:#ff4081;font-family:'Dancing Script', cursive;font-size:260%;padding-left:30px;padding-right:40px;">Are you sure?</h2>
  <h2 style="color:#ff4081;font-family:'Dancing Script', cursive;margin-bottom:40px;">Click below!</h2>
  <a href="admin_area/login.php" style="text-decoration:none;font-family:'Dancing Script', cursive; font-size:160%;font-weight:bold;width:190px;background:white; height:40px;color: #ff4081;border:3px solid #ff4081;padding-right:20px;padding-left:20px;padding-top:5px;">Login!</a>

</form>


</a></li>
        




</body>
</html>
