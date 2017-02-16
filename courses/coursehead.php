<html>
<head>
<title>StudyVid</title>
<link rel="icon" href="../images/logo.gif">
<link rel="icon" href="../images/logo.gif" type="image/x-icon">
<!--<link rel="stylesheet" type="text/css" href="css/login-signup.css">
--><link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../login.js"></script>
<script src="../js/jquery.easydropdown.js"></script>
<!--Animation-->
<script src="../js/wow.min.js"></script>
<link href="../css/animate.css" rel='stylesheet' type='text/css' />
 <script type="text/javascript" src="../merijs.js"></script>
<script type="text/javascript" src="../login-signup.js"></script>
<script type="text/javascript">
function loginBoxPopup()
{
	document.getElementById('loginBoxx').style.display = 'block';
}</script>
<style type="text/css">

#loginBoxx{
	display:none;
}
.box-topping {
			padding-top:0px;
			width:410px;
			height:50px;
		}
		.box-topping-content{
			display:inline-block;
			width:410px;
			height:50px;
			padding-top:0px;
			padding-bottom:0px;
			padding-left:0px;
			margin-top:0px;
			margin-bottom:0px;
		}
		.box-topping-content li{
			list-style-type:none;
			width:205px;
			height:50px;
			text-align: center;
			border-top: 2px solid #FFF;
			display:inline-block;
			font-size: 20px;
			font-weight: 700;
			color: #444;
		}
#lifirst{
			margin-right:-3px;
			border-left: 2px solid #FFF;
			border-right: 2px solid #000;
			border-bottom: 2px solid #FFF;
			background: #FFF;
		}
		#lisecond{
			margin-left:-3px;
			border-left: 2px solid #000;
			border-bottom: 2px solid #000;
			background:rgba(191, 181, 181, 0.33);	
		}
		#loginnn{
			margin: 30px auto;
			width: 350px;
			display:block;			
		}
		#signuppp{
			margin: 30px auto;
			width: 350px;
			display: none;
		}
</style>
<script>
  new WOW().init();
  $(document).ready(function(){
  
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
  
});
</script>
<meta name="google-translate-customization" content="c0650912549f4060-78cbb82ce97b0ff8-g907ce9b460549ccb-17"></meta>

</head>

<body>
<!--header starts here-->
	<div class="header">
		   <div class="header-left">
					<div class="logo">
						<a href="../index.php"><img src="../images/logo.gif" width="150px" height ="55px" alt=""/></a>
					</div>
					<div class="menu">
						  <a class="toggleMenu" href=""><img src="../images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						   <li class="active" onclick="show(this.value)" value="1"><a href="../index.php" >Home</a></li>
                  <li onclick="show(this.value)" value="2"><a href="../chatt.php" >Chat</a></li>
                  
                  <li><a href="../more.php" onclick="show(this.value)" value="3">More</a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clearfix"></div>
	    	</div>
	        <div class="header_right">
	        			
	        			<!-- start search-->
				        <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form method="get" action="../youhead.php">
									<input class="sb-search-input" name="q" placeholder="Enter your search term..." type="search"  id="q">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="../js/classie.js"></script>
						<script src="../js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    


<!--Login container starts her-->
   
        <div id="clearfix"></div>
        <div id="loginContainer" >
                <div id="loginButton" onclick="loginBoxPopup();"><img src="../images/login.png"><span>Login/Signup</span></div>
							  
						<div id="loginBoxx"  >
						<div style="background-color: #fff;margin:50px auto;position:absolute;left:-500px;border:2px solid;z-index:100;">
							<div class="box-topping">
								<ul class="box-topping-content" >
								    <li class="lifirst" id="lifirst"><p onclick="clickedlogin();">Login</p></li>
									<li class="lisecond" id="lisecond"><p onclick="clickedsignup();">SignUp</p></li>
								</ul>
							</div>

							<div id="loginnn" >
								<!--login page -->				        
						        <?php include'../login.php'; ?>
						    </div>

						    <div id="signuppp" >
						        <!--signup page-->
						        <?php include'../sign_up.php'; ?>
						    </div>
						</div>
					</div>
			</div>
			
     
		<!--Login container ends here-->
	    </form>
		<div class="clearfix"></div>
	    </div>
	    <div class="clearfix"></div>
        </div>

        <div id="txt"></div>

