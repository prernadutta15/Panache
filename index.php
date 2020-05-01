
<!doctype html>
<?php 
session_start();
include("functions/functions.php");

?>

<head>
<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
<link rel="stylesheet" type="text/css" media="all" href="syles.css" />
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<style>

.social-icons
{
	overflow:hidden;
	float:right;
	margin:8px 73px 0 0;
}
.social-icons span{
	display:inline-block;
	float:left;
	color:#000;
	font-size:20px;
	line-height:27px;
	margin-right:17px;
	font-family:bilbo;
}
.social-icons a{
	display:inline-block;
	float:left;
	margin-right:19px;
}
.social-icons a:hover img{opacity:0.7;}


.panache{
font-size:200%;
display:inline;
font-family: 'Bangers', cursive;
padding-left:20px;

}
.font1
{
	color:white;
	font-family: 'Bangers', cursive;
	font-size:600%;
	margin-top:200px;
}
.font2
{
	color:white;
	font-family: 'Bangers', cursive;
	font-size:80%;
	
}

.pic{
padding-top:50px;
position:relative;
left:80px;
top:0px;
background-image: url(images/pic1.bmp);

//background-repeat: no-repeat; 
 background-attachment: fixed;
 height:200vh;
 width:90%;
}

.project-container{


}
.project-container:nth-child(1)
{
border-radius: 50%;


}
.project-container:nth-child(2)
{

}
.project-container:nth-child(3)
{


}
</style>

<title>Panache</title><meta name="description" content="👨🏻‍💻">

</head>
<body class="work">


<div class="site-wrapper" >
    
 <header class="header" >
<a href="cart.php"><div class="logo"><img class="avatar" src="images/avatar.svg"></div></a>
<nav class="primary-nav">
  <ul class="primary-navigation">
    <li class="work-nav active"><a href="all_products.php">Home</a></li>
    <li class="play-nav"><a href="all_products.php">About Us</a></li>
    <li class="about-nav"><a href="home.html">Contact Us</a></li>
   
    <li class="shop-nav"><a href="home.html">Gift Items</a></li>
	<li class="shop-nav"><a href="login_form.php">Login</a></li>
	<li class="shop-nav"><a href="register.php">Register</a></li>
	<div id="form" style="height:20px; width:200px; float:left; margin-top:-55px;margin-left:10px">
  <form method="get" action ="results.php" enctype="multipart/form-data" >
	<input type="text" name="user_query" placeholder="Search a product"/>
	<input type="submit" style="height:40px; width:70px; font-size:50%; float:left; margin-top:-40px;margin-left:190px" name="search" value="Search" />
  </div>
	<li class="shop-nav"><div class="panache" style="color:#c600eb; padding-left:2px;margin-left:70px;">P</div><div class="panache" style="color:#25ff00; ">A</div><div class="panache" style="color:#ce1127;">N</div><div class="panache" style="color:#14dbff; ">A</div><div class="panache" style="color:#ff148f; ">C</div><div class="panache" style="color:#39ff14; ">H</div><div class="panache" style="color:#ff164d; ">E</div></li>
	
  </ul>
</nav>

</header>
      
    <main class="main" role="main">
	
    <header class="work-header pic" style="background-color: #ffff33; ">

</header>
<header class="work-header "  style="background-color: #ff3333; height:130vh">

<h1 class="title"> <div class="font1" style="top:250vh;">Panache</div>
<div style="margin-top:25vh;margin-left:200px" class="font2">A One Stop Solution for Personalised Gifts...</div> </h1>
<a href="https://www.futurefabric.co/about" class="more-link">Read more</a>
<p class="work-description">Selected work</p>
</header>
<div id="projects" class="projects">
    
<div class="projects-container" >


<!--<div class="project-container one">
  <div class="scroll-container" data-index="1">
    <a href="https://www.futurefabric.co/work/superhi"><div class="project" data-index="1" style="background-color: #f8bc30; background-image: url(https://www.futurefabric.co/uploads/work/project-image/superhi/superhi-thumb.gif); background-size: 100% 100%; padding-top: 67%;">
      <div class="loader" style="background-color: #f8bc30;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/superhi">SuperHi</a></h2>

      
      <p class="project-intro">Design and development of a new online course for code school, SuperHi.</p>
      <p class="project-years">2019
            </p>
    </div>
  </div>
</div>-->





<div class="project-container one" style="margin-top:20px">
  <div class="scroll-container" data-index="2">
    <a href="cart.php"><div class="project" data-index="2" style="background-color: #21cae1; background-image: url(https://www.futurefabric.co/uploads/work/_workThumbnails/joto-thumb.png); background-size: 100% 100%; padding-top: 121%;">
      <div class="loader" style="background-color: #21cae1;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/joto">Welcome!</a></h2>

      
      <p class="project-intro">Looking for unique ideas and handpicked items for your loved ones? Congratulations for making the best choice!</p>
      <p class="project-years">2016
            – 2017
            </p>
    </div>
  </div>
</div>




<div class="project-container one" style="margin-top:40px">
  <div class="scroll-container" data-index="3">
    <a href="https://www.futurefabric.co/work/malika-favre"><div class="project" data-index="3" style="background-color: #0066b3; background-image: url(https://www.futurefabric.co/uploads/work/_workThumbnails/mf-main.png); background-size: 100% 100%; padding-top: 70%;">
      <div class="loader" style="background-color: #0066b3;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/malika-favre">Fashion</a></h2>

      
      <p class="project-intro">Our website is at par with the latest fashion trends for both men and women!</p>
      <p class="project-years">2015
            – Present
            </p>
    </div>
  </div>
</div>



<div class="project-container one" >
  <div class="scroll-container" data-index="16">
    <a href="https://www.futurefabric.co/work/insyde"><div class="project" data-index="16" style="background-color: #ea4d71; background-image: url(https://www.futurefabric.co/uploads/work/_workThumbnails/insyde_2.jpg); background-size: 100% 100%; padding-top: 100%;">
      <div class="loader" style="background-color: #ea4d71;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
     
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/insyde">Lights Guide Me Home!</a></h2>

      
      <p class="project-intro">Nothing's better than you lighting up the lives of your favourites (both literally and figuratively). Check out our bright collection!</p>
    </div>
  </div>
</div>


<div class="project-container one">
  <div class="scroll-container" data-index="12">
    <a href="https://www.futurefabric.co/work/unmade"><div class="project" data-index="12" style="background-color: #77b4c8; background-image: url(https://www.futurefabric.co/uploads/work/unmade-smaller.gif); background-size: 100% 100%; padding-top: 100%;">
      <div class="loader" style="background-color: #77b4c8;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/insyde">Customisation!</a></h2>

      
      <p class="project-intro">Want to present a personalised shirt with an insider joke or a typical tagline?</p>
     </div>
  </div>
</div>




<div class="project-container one">
  <div class="scroll-container" data-index="4">
    <a href="https://www.futurefabric.co/work/virgin-atlantic-inflight-entertainment-system"><div class="project" data-index="4" style="background-color: #e51434; background-image: url(https://www.futurefabric.co/uploads/work/_workThumbnails/vife_1.jpg); background-size: 100% 100%; padding-top: 100%;">
      <div class="loader" style="background-color: #e51434;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/virgin-atlantic-inflight-entertainment-system">Go Digital</a></h2>

      
      <p class="project-intro">Time to up your game by gifting your favourite ones the most trending web series and pave a way right into their hearts!</p>
    </div>
  </div>
</div>





<div class="project-container one">
  <div class="scroll-container" data-index="7">
    <a href="https://www.futurefabric.co/work/headspace"><div class="project" data-index="7" style="background-color: #ec6f7c; background-image: url(https://www.futurefabric.co/uploads/work/_workThumbnails/headspace-thumb.jpg); background-size: 100% 100%; padding-top: 110%;">
      <div class="loader" style="background-color: #ec6f7c;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/headspace">Phones! Phones! Phones!</a></h2>

      
      <p class="project-intro" style="padding-bottom:20px">Get the best deals on our exclusive range of mobile phones. Samsung, Motorolla, Redmi, name it and we have it!</p>
     
    </div>
  </div>
</div>




<div class="project-container one">
  <div class="scroll-container" data-index="9">
    <a href="https://www.futurefabric.co/work/projectsbyif"><div class="project" data-index="9" style="background-color: #ff6b1f; background-image: url(https://www.futurefabric.co/uploads/work/if-logo-anim-3.gif); background-size: 100% 100%; padding-top: 100%;">
      <div class="loader" style="background-color: #ff6b1f;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/projectsbyif">IF</a></h2>

      
      <p class="project-intro">Now the gap between 'If I could' and 'done and dusted' is just a click away!</p>
    
    </div>
  </div>
</div>





<div class="project-container one">
  <div class="scroll-container" data-index="10">
    <a href="https://www.futurefabric.co/work/mooooooving"><div class="project" data-index="10" style="background-color: #121212; background-image: url(https://www.futurefabric.co/uploads/work/_workThumbnails/moving.png); background-size: 100% 100%; padding-top: 100%;">
      <div class="loader" style="background-color: #121212;"><div class="spinner"></div></div>
    </div></a>

    <div class="project-info">
      <h2 class="project-title"><a href="https://www.futurefabric.co/work/mooooooving">Brands</a></h2>

      
      <p class="project-intro">The best brands are waiting for you, what are you waiting for?</p>
      <p class="project-years">2014
                  </p>
    </div>
  </div>
</div>









</div>
</div>

<section class="contact-me">
  <div class="contact-me-block">
    <h2 class="section-heading">Get in touch</h2>
    
  </div>
</section>

  </main>

            <footer class="footer">
  <div class="footer-body-container">
    <div class="footer-body">
      <ul class="social grid-column">
        <li><a class="twitter" href="https://twitter.com/Futurefabric">Twitter</a></li>
        <li><a class="instagram" href="https://instagram.com/futurefabric">Instagram</a></li>
        <li><a class="pinterest" href="https://pinterest.com/futurefabric">Pinterest</a></li>
      </ul>
      <ul class="company-details grid-column">
        <li>&copy; JNU MCA SEMESTER 4</li>
		 <div class="social-icons" style="padding-bottom:30px">
		<span>Follow us:</span>
		<a href="http://wwww.twitter.com"><img src="images/icon-1.jpg"></a>
		<a href="#"><img src="images/icon-2.jpg"></a>
		<a href="#"><img src="images/icon-3.jpg"></a>
		
		</div>
      </ul>
    </div>
	  
 
  </div>
  

		
</footer>
      </div>






<script type="text/javascript" src="script.js" async></script>

</body>
</html>
