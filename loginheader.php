<!DOCTYPE HTML>

<html>
<head>
<title>StudyVid</title>
<link rel="icon" href="images/logo.gif">
<link rel="icon" href="images/logo.gif" type="image/x-icon">

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!--Animation-->
<script type="text/javascript" src="phpajax.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript">
function hover(){
  document.getElementById('dropdownn').style.display='block';
}
function nothover(){
  document.getElementById('dropdownn').style.display='none';
}

</script>
<script src="merijs.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
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

<div class="header">
       <div class="header-left">
           <div class="logo">
            <a href="home.php"><img src="images/logo.gif" width="150px" height ="55px" alt=""/></a>
           </div>
           <div class="menu">
              <a class="toggleMenu" href=""><img src="images/nav.png" alt="" /></a>
                <ul class="nav" id="nav">
                  <li class="active" onclick="show(this.value)" value="1"><a href="home.php" >Home</a></li>
                  <li onclick="show(this.value)" value="2"><a href="chatt.php" >Chat</a></li>
                  <li><a href="arr.php" onclick="show(this.value)" value="3">Quiz</a></li>
                  <li class="dropdown closed">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a ><option onClick="show(this.value)" value="none" id="none" >NONE</option></a></li>

<li><a ><option onClick="show(this.value)" value="result" id="result" >Result</option></a></li>
<br>
<li><a><option onClick="show(this.value)" value="books" id="books" >Books</option></a></li>
<br>
<li><a><option onClick="show(this.value)" value="cheat" id="cheat" >CHEAT SHEET</option></a></li>
<br></ul>
</li>
                  <!--<li><a href="404.html">PHP</a></li>-->
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
                <form method="get" action="youhead.php">
                  <input class="sb-search-input" name="q" placeholder="Enter your search term..." type="search"  id="q">
                  <input class="sb-search-submit" type="submit" value="">
                  <span class="sb-icon-search"> </span>
                </form>
              </div>
            </div>
            <!----search-scripts---->
            <script src="js/classie.js"></script>
            <script src="js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <!----//search-scripts---->
            

<?php
//We display a welcome message, if the user is logged, we display it username
?><?php if(isset($_SESSION['username'])){


?>
   
 <div id="logoutContainer" style=" display:"block" onmouseover="hover()" onmouseout="nothover()" " >
            <div id="logoutButton" >
                <img src="images/login.png">
                <h1 id="user"><span>Hello </span><?php echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?> 
                    
                </h1>
                </div>
              <div class="dropdownn" id="dropdownn">
                  <ul>
                   <li> <a href="edit_infos.php"><span>Edit my personnal informations</span></a><br /></li>

            
                 <li><a href="marks.php"><span>user performance</span></a><br />  </li>
              
                  <li><a href="logout.php"><span>Logout</span></a></li>
               </ul>
                </div>
            
        </div>

     
              <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
              </div>

<div id="txt"></div>
   
<!--end of header -->
<script src="js/bootstrap.min.js"></script>