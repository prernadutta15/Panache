
<!doctype html>


<head>
<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="syles.css" />
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>

#cart{
background:#ffccff;
width:100%;
color:#cc0099;
padding:1px;
font-family: 'Bangers';
font-size:12pt;
margin-top:-12px;
}
#p1
{
	font-size:14pt;
	color:#e60073;
	line-height:14pt;
	margin-left:14px;
	font-family: 'Bangers';
}
#p2
{
	font-size:12pt;
	color:#993366;
	line-height:14pt;
	margin-left:14px;
	font-family: 'Bangers', cursive;
	font-weight:bold;
}
#p3
{
	font-size:14pt;
	color:blue;
	line-height:14pt;
	margin-left:14px;
}
.myblock
{
	position: absolute;
	//border: 2px dotted red;
	margin:20px;
	height:45vh;
	width:83%;
	//top:calc(var(--m) *45vh);
	left:200px;
	top:80px;
	
	//width:200px;
}

.myblock2
{
	position: absolute;
	border: 2px solid #cc0099;
	margin: 15px 8px 15px 10px;
	height:75vh;
	width:30%;
	display:inline;
	float:left;
	left: calc( var(--n) * 33%);
}
.myblock2:nth-child(1)
{
	--n:0;
	top:0%;
}
.myblock2:nth-child(2)
{
	--n:1;
	top:0%;
}
.myblock2:nth-child(3)
{
	top:0%;
	--n:2;
}


#products_box {
width:280px; 
text-align:center;
margin-left:30px;
margin-bottom:10px; 
float:left;
}
#content_area {
<!--width:83%;
float:right;
background:pink;
position:absolute;
top:90px;
left:220px;-->
<!--width:100%;
margin:30px;
height:100vh;
float:right;
background:pink;-->

}
#sidebar_title {
background:white;
color:black;
font-size:22px;
font-family:arial; 
padding:10px;
//top:20vh;
text-align:center;

//border-bottom:2px solid black;
}

#cats {
	text-align:center;
}

#cats li {list-style:none; margin:5px;}

#cats a {color:white; padding:8px; margin:5px; text-align:center; font-size:20px; text-decoration:none; font-family:Comic Sans Ms;}

#cats a:hover {color:orange; font-weight:bolder; text-decoration:underline;}


#sidebar {
height:120vh;
margin-top:-30px;
width:200px;
background:white;
border-right:2px solid black;
float:left;
}
.content_wrapper {
width:100% ;
height:86vh;
//border-right: 2px solid black;
margin-top:20px;
float:left;

}
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


</style>

<title>Panache</title><meta name="description" content="👨🏻‍💻">

</head>
<body class="work">


<div class="site-wrapper" >
  
 <header class="header" style="border-bottom: 2px solid black; position:fixed;">
<a href="#"><div class="logo"><img class="avatar" src="images/avatar.svg"></div></a>
<nav class="primary-nav">
  <ul class="primary-navigation">
    <li class="work-nav active"><a href="#">Home</a></li>
    <li class="play-nav"><a href="#">About Us</a></li>
    <li class="about-nav"><a href="#">Contact Us</a></li>
   
    <li class="shop-nav"><a href="#">Gift Items</a></li>
	<li class="shop-nav"><a href="#">Login</a></li>
	<li class="shop-nav"><a href="#">Register</a></li>
	<div id="form" style="height:20px; width:200px; float:left; margin-top:-55px;margin-left:10px">
  <form method="get" action ="results.php" enctype="multipart/form-data" >
	<input type="text" name="user_query" placeholder="Search a product"/>
	<input type="submit" style="height:35px; width:70px; font-size:50%; float:left; margin-top:-34px;margin-left:195px" name="search" value="Search" />
	
  </div>
	<li class="shop-nav"><div class="panache" style="color:#c600eb; padding-left:2px;margin-left:70px;">P</div><div class="panache" style="color:#25ff00; ">A</div><div class="panache" style="color:#ce1127;">N</div><div class="panache" style="color:#14dbff; ">A</div><div class="panache" style="color:#ff148f; ">C</div><div class="panache" style="color:#39ff14; ">H</div><div class="panache" style="color:#ff164d; ">E</div></li>
	
	
  </ul>
</nav>

</header>
     
    <div class="content_wrapper">
		
			<div id="sidebar" style="position:fixed;">
			
				<div id="sidebar_title" style="margin-top:40px;padding-top:10px;border:none;border-bottom:2px solid black; "><a href="#" style="color: #E77200" class="panache" >PANACHE</a></div>
			
				<div id="sidebar_title" style="margin-top:20px;padding-top:0px;padding-bottom:30px;padding-left:30px; ">
				<div class="accordion" id="accordionExample" >
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" style="color:#FF00CC;border:white;background:white;" id="headingOne">
      <h5 class="mb-0">
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:200%; color:#FF00CC;border:white;background:white; margin-left:10px;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
         Categories
        </button>
      </h5>
    </div>

    <div id="collapseOne" style="color:#FF00CC;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="border-bottom:black;background:white;font-family:Comic Sans Ms;font-size:110%;border:2px dottd pink;margin-top:-20px;">
		<li style="color:#00ccff;">Customised Tees</li>
		<li style="color:#cc66ff;">Mobile Covers</li>
		<li style="color:#00ccff;">Pillows</li>
		<li style="color:#cc66ff;">Show Pieces</li>
		<li style="color:#00ccff;">Clocks</li>
		</ul>
      </div>
    </div>
  </div>

</div>
 </div>
				
					
<!--				<div id="sidebar_title" style="margin-top:-60px;padding-left:30px;">
				
  
<div class="accordion" id="accordionExample" >
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" style="color:#FF00CC;border:white;background:white;" id="headingOne">
     
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:200%; color:#FF00CC;border:white;background:white;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
         Brands
        </button>
      
    </div>

    <div id="collapseOne" style="color:#FF00CC;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="border-bottom:black;background:white;font-family:Comic Sans Ms;font-size:150%;border:2px dottd pink;margin-top:-20px;">
		<li style="color:#00ccff;">Gucci</li>
		<li style="color:#cc66ff;">Adidas</li>
		<li style="color:#00ccff;">Rolex</li>
		</ul>
      </div>
    </div>
  </div>
</div>
</div>-->
				
				
				
				<div id="sidebar_title" style="margin-top:-60px;padding-left:30px;">
				
  
 <div class="accordion" id="accordionExample" >
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" style="color:#FF00CC;border:white;background:white;" id="headingOne">
     
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:200%; color:#FF00CC;border:white;background:white;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
        Advanced Filters
        </button>
      
    </div>

    <div id="collapseOne" style="color:#FF00CC;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="border-bottom:black;background:white;font-family:Comic Sans Ms;font-size:110%;border:2px dottd pink;margin-top:-20px;">
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Sort By:</a></li>
		<li ><a href="#" style="text-decoration: none; color:#cc66ff;">Popularity</a></li>
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Relevance</a></li>
		<li><li ><a href="#" style="text-decoration: none; color:#cc66ff;">Price</a></li>
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Newest Arrivals</a></li>
		<li><li ><a href="#" style="text-decoration: none; color:#cc66ff;">Max Discount</a></li>
	
		</ul>
      </div>
    </div>
  </div>

</div>
				</div>
				
				
				
			
			</div>
	</div>

			
		
			<div class="myblock">
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%" src="images/back1.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%" src="images/back2.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%" src="images/back3.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>

</div>

		<div class="myblock" style="margin-top: 500px">
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%" src="images/shirt1.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%" src="images/gift1.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%" src="images/back1.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>

</div>
		<div class="myblock" style="margin-top: 1000px">
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%;" src="images/shirt1.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>
<div class="myblock2"><a href="#"><img style="padding:6px; height:85%" src="images/cover2.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>
<div class="myblock2" ><a href="#"><img style="padding:6px; height:85%" src="images/phone1.bmp"></a><div class="fit"><div id="p1">Aaj Jaane Ki zid Na karo<br></div><div id="p2">Rs 1000<br></div><button id="cart">Add To Cart</button></div></div>

</div>
<div class="myblock" style="margin-top: 1500px">
<div class="myblock2">1st</div>
<div class="myblock2">2nd</div>
<div class="myblock2">3rd</div>

</div>
<div class="myblock" style="margin-top: 2000px">
<div class="myblock2">1st</div>
<div class="myblock2">2nd</div>
<div class="myblock2">3rd</div>

</div>
<div class="myblock" style="margin-top: 2500px">
<div class="myblock2">1st</div>
<div class="myblock2">2nd</div>
<div class="myblock2">3rd</div>

</div><div class="myblock" style="margin-top: 3000px">
<div class="myblock2">1st</div>
<div class="myblock2">2nd</div>
<div class="myblock2">3rd</div>

</div><div class="myblock" style="margin-top: 3500px">
<div class="myblock2">1st</div>
<div class="myblock2">2nd</div>
<div class="myblock2">3rd</div>

</div>
<div class="myblock" style="margin-top: 4000px">
<div class="myblock2">1st</div>
<div class="myblock2">2nd</div>
<div class="myblock2">3rd</div>

	<p>


</div>
			
		






<script type="text/javascript" src="script.js" async></script>

</body>
</html>
