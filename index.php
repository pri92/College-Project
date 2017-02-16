<!doctype html>
<html>
<head>
<title>Welcome to StudyVid</title>
<link rel="icon" href="images/logo.gif">
<link rel="icon" href="images/logo.gif" type="image/x-icon">
<!--<link rel="stylesheet" type="text/css" href="css/login-signup.css">
--><link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
 </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
 <script type="text/javascript" src="js/merijs.js"></script>
<script type="text/javascript" src="js/login-signup.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>
<script language="JavaScript" type="text/javascript" src="suggest.js"></script>

<script src="phpajax.js"></script>
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
    .bs-example{
  font-family: sans-serif;
  position: relative;
  margin: 50px;
  margin-left:-100px;
  bottom:25px;
  left:100px;
}

 
    #layer1
    {

     
      left: 470px;
       top:260px;
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
            <a href="index.php"><img src="images/logo.gif" width="150px" height ="55px" alt=""/></a>
          </div>
          <div class="menu">
              <a class="toggleMenu" href=""><img src="images/nav.png" alt="" /></a>
                <ul class="nav" id="nav">
               <li class="active" onclick="show(this.value)" value="1"><a href="index.php" >Home</a></li>
                  <li onclick="show(this.value)" value="2"><a href="chatt.php" >Chat</a></li>
                  
                
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
</li><div class="clearfix"></div>
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
            


<!--Login container starts her-->
   
        <div id="clearfix"></div>
        <div id="loginContainer" >
                <div id="loginButton" onclick="loginBoxPopup();"><img src="images/login.png"><span>Login/Signup</span></div>
                
            <div id="loginBoxx"  >
            <div style="background-color: #fff;margin:50px auto;position:absolute;left:-500px;border:2px solid;z-index:100;">
              <div class="box-topping">
                <ul class="box-topping-content" >
                    <li class="lifirst" id="lifirst"><p onclick="clickedlogin();">Login</p></li>
                  <li class="lisecond" id="lisecond"><p onclick="clickedsignup();">SignUp</p></li>
                </ul>
              </div>

              <div id="loginnn">
                <!--login page -->                
                    <?php include'login.php'; ?>
                    
                </div>

                <div id="signuppp" >
                    <!--signup page-->
                    <?php include'sign_up.php'; ?>
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

        
   
<!--end of header -->
 
<!--end of header -->



<!-- container box starts her-->
          

          <!--banner(search box) starts her-->
              <div class="banner wow fadeInUp" data-wow-delay="0.4s">
   	              <div class="container_wrap">
   		                <h1>What are you looking to 
                             learn today?</h1>
   	                  <div class="dropdown-buttons"  style="position:relative; width:100%; height:61px;">   
            	            <div class="dropdown-button" style="position:absolute; width:308px; left:250px;">
                              <form method="get" action="youslider.php" id="suggestSearch">           			
            			              <select class="dropdown"  name="order" id="order" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			                <option value="rating">Rating</option>
                                  <option value="title">Title</option>
                                  <option value="viewCount">View count</option>
                                  <option value="relevance">Relevance</option>
                                  <option value="videoCount">Video count</option> 
					                      </select>
                              
					                </div>

				                  <div class="dropdown-button" style="position:absolute; width:208px; margin-left:100px; right:200px;">
					                    <input type="text"  id="maxResults" style="margin-bottom:0px; padding:14px; text-align:center;" name="maxResults" min="1" max="50" step="1" value="12" class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                          </div>
				              </div>  
		                  <div class="dropdown-buttons" style="position:relative;" >
          	                <input type="text" name="q" value="Ex. Html ,Css , Python..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search more topics here...';}" id="PoNumber" alt="Search Criteria" onkeyup="searchSuggest();" autocomplete="on">
			                </div>
                      <div id="layer1"></div><br>
                      <div class="contact_btn">
	                        <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
	                    </div>
			                </form>   
                      
   		                <div class="clearfix"></div>
                  </div>
              </div>
          <!--banner(search box) ends here-->

          <!--content top starts here-->
             <div class="content_top wow bounceInRight" data-wow-delay="0.4s">
      <div class="container">
      <div class="col-md-4 bottom_nav">
        <div class="content_menu" >
          
          <div id="more"></div>
        </div>
         <div class="content_menu">
        <ul>
          <li class="active"><a href="index.php">Courses</a></li> 
        
        </ul>
      </div>
    </div>
    
    </div>
   </div>
   <div class="content_middle wow bounceInLeft" data-wow-delay="0.4s">
      <div class="container">
        <div class="content_middle_box">
          <div class="top_grid">
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/learnhtml.php">
                  <div class="index_img"><img src="images/pic1.jpg" class="img-responsive" alt=""/></div>
              
                  <div class="mask">
                        <div class="info"><i class="search" style=""> </i> Show More</div>
                       <!-- <ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                       </div>
                   </div> 
                   <i class="home"></i>
           <div class="inner_wrap">
            <h3>Hyper Text Markup Language</h3>
            <ul class="star1">
              <h4 class="green">YouTube</h4>
              <li><a href="#"> <img src="images/star1.png" alt=""></a></li>
              </a>
            </ul>
           </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/css.php">
                  <div class="index_img1"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
               <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                 <i class="home1"> </i>
           <div class="inner_wrap">
            <h3>Cascading Style Sheet</h3>
            <ul class="star1">
              <h4 class="yellow">YouTube</h4>
              <li><a href="#"> <img src="images/star2.png" alt=""></a></li>
            </ul>
            </a>
           </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/javascript.php">
                  <div class="index_img2"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
               <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                 <i class="home2"> </i>
           <div class="inner_wrap">
            <h3>Javascript</h3>
            <ul class="star1">
              <h4 class="blue">YouTube</h4>
              <li><a href="#"> <img src="images/star2.png" alt=""></a></li>
            </ul>
            </a>
           </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/algomit.php">
                  <div class="index_img"><img src="images/pic4.jpg" class="img-responsive" alt=""/></div>
               
                  <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                  <i class="home"></i>
            <div class="inner_wrap">
            <h3>Algorithm</h3>
            <ul class="star1">
              <h4 class="green">YouTube</h4>
              <li><a href="#"> <img src="images/star1.png" alt=""></a></li>
            </ul>
            </a>
            </div>
           </div>
        </div>
        <div class="clearfix"> </div>
      </div>
        <div class="middle_grid wow fadeInUp" data-wow-delay="0.4s">
        <div class="col-md-6">
           <div class="grid1">
            <a href="courses/data.php">
             <div class="index_img"><img src="images/pic5.jpg" class="img-responsive" alt=""/></div>
            <i class="m_home"> </i>
                  <!--<ul class="vision">
                     <li>YouTube</li>
                     <li class="desc"><a href="#"> <img src="images/star1.png" alt=""></a></li>
                  </ul>-->
            <div class="inner_wrap1">
            <ul class="item_module">
            x
              <li class="module_left"><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
              <li class="module_right">
             
                <img src="images/m_star.png" class="img-responsive" alt=""/></a>
                <h5>Data Structure</h5>
                        <p>" Data structure is a particular way of organizing data in a computer so that it can be used efficiently . For example, B-tree "</p>
                <!--<a href="#" class="content_btn">....read more</a>-->
              </li>
              <div class="clearfix"> </div>
             </ul>
            </div>
           </div>
        </div>
        <div class="col-md-6">
           <div class="grid1">
            <a href="courses/operating.php">
             <div class="index_img1"><img src="images/pic6.jpg" class="img-responsive" alt=""/></div>
            <i class="m_home1"> </i>
                  <!--<ul class="vision">
                     <li>YouTube</li>
                     <li class="desc"><a href="#"> <img src="images/star2.png" alt=""></a></li>
                  </ul>-->
            <div class="inner_wrap1">
            <ul class="item_module">
              <li class="module_left"><img src="images/m2.jpg" class="img-responsive" alt=""/></li></a>
              <li class="module_right">

                <img src="images/m_star1.png" class="img-responsive" alt=""/>
                <h5>Operating System</h5>
                <p>"An operating system is software that manages computer hardware and software resources and provides common services for computer programs."</p>
                <!--<a href="#" class="content_btn">....read more</a>-->
              </li>
              <div class="clearfix"> </div>
             </ul>
            </div>
           </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="top_grid wow fadeInRight" data-wow-delay="0.4s">
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/learnphp.php">
                  <div class="index_img"><img src="images/pic7.jpg" class="img-responsive" alt=""/></div>
   
                  <div class="mask">
                       <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                        </div>
                    </div> 
                    <i class="home"></i>
           <div class="inner_wrap">
            <h3>HyperText Preprocessor(PHP)</h3>
            <ul class="star1">
              <h4 class="green">YouTube</h4>
              <li><a href="#"> <img src="images/star1.png" alt=""></a></li>
              </a>
            </ul>
           </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/c.php">
                  <div class="index_img1"><img src="images/pic8.jpg" class="img-responsive" alt=""/></div>
               <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                 <i class="home1"> </i>
           <div class="inner_wrap">
            <h3>C programming</h3>
            <ul class="star1">
              <h4 class="yellow">YouTube</h4>
              <li><a href="#"> <img src="images/star2.png" alt=""></a></li>
              </a>
            </ul>
           </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/sql.php">
                  <div class="index_img2"><img src="images/pic9.jpg" class="img-responsive" alt=""/></div>
               <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                 <i class="home2"> </i>
           <div class="inner_wrap">
            <h3>SQL</h3>
            <ul class="star1">
              <h4 class="blue">YouTube</h4>
              <li><a href="#"> <img src="images/star2.png" alt=""></a></li>
            </ul>
            </a>
           </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/vbs.php">
                  <div class="index_img"><img src="images/pic10.jpg" class="img-responsive" alt=""/></div>
               
                  <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                  <i class="home"></i>
            <div class="inner_wrap">
            <h3>VBScript</h3>
            </a>
            <ul class="star1">
              <h4 class="green">YouTube</h4>
              <li><a href="#"> <img src="images/star1.png" alt=""></a></li>
            </ul>
            </div>
           </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="bottom_grid wow bounce" data-wow-delay="0.4s">
        <div class="col-md-6">
           <div class="grid1">
           <a href="courses/network.php">
             <div class="index_img1"><img src="images/pic11.jpg" class="img-responsive" alt=""/></div>
            <i class="m_home1"> </i>
                  <!--<ul class="vision">
                     <li>YouTube</li>
                     <li class="desc"><a href="#"> <img src="images/star2.png" alt=""></a></li>
                  </ul>-->
            <div class="inner_wrap1">
            <ul class="item_module">
              <li class="module_left"><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
              <li class="module_right">
                <img src="images/m_star.png" class="img-responsive" alt=""/>
                </a>
                <h5>Networking</h5>
                <p>"In the world of computers, networking is the practice of linking two or more computing devices together for the purpose of sharing data."</p>
                <!--<a href="#" class="content_btn">....read more</a>-->
              </li>
              <div class="clearfix"> </div>
             </ul>
            </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/ajax.php">
                  <div class="index_img"><img src="images/pic12.jpg" class="img-responsive" alt=""/></div>
               
                      <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                  <i class="b_home"></i>
            <div class="inner_wrap2">
            <h3>AJAX</h3>
            <ul class="star1">
              <h4 class="green">YouTube</h4>
              <li><a href="#"> <img src="images/star1.png" alt=""></a></li>
            </ul>
            </a>
            </div>
           </div>
        </div>
        <div class="col-md-3">
          <div class="grid1">
          <div class="view view-first">
          <a href="courses/oop.php">
                  <div class="index_img1"><img src="images/pic13.jpg" class="img-responsive" alt=""/></div>
               <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <!--<ul class="mask_img">
                          <li class="star"><img src="images/star.png" alt=""/></li>
                          <li class="set"><img src="images/set.png" alt=""/></li>
                          <div class="clearfix"> </div>
                        </ul>-->
                      </div>
                  </div> 
                 <i class="b_home1"> </i>
           <div class="inner_wrap2">
            <h3>Object Oriented Programming</h3>
            <ul class="star1">
              <h4 class="yellow">YouTube</h4>
              <li><a href="#"> <img src="images/star2.png" alt=""></a></li>
           </a>
            </ul>
           </div>
           </div>
        </div>
        <div class="clearfix"></div>
        </div>
        </div>
  
   		  

    <!--offering starts here-->
        <div class="offering">
            <h2>What can Studyvid offer to you ?</h2>
   		  	  <ul class="icons wow fadeInUp" data-wow-delay="0.4s">
   		  	  	 <li><i class="icon1"> </i><span class="one"> </span></li>
   		  	  	 <li><i class="icon2"> </i><span class="two"> </span></li>
   		  	  	 <li><i class="icon3"> </i><span class="three"> </span></li>
   		  	  	 <li><i class="icon4"> </i><span class="four"> </span></li>
   		  	  	 <li><i class="icon5"> </i></li>
   		  	  </ul>
   		  	  <div class="real">
   		  	  	  <h4>Reality</h4>
   		  	  	  <div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				  <i class="s1"> </i>
   	   				     <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				     <p>Studyvid is a website which provides videos of programming languages and courses related to these.</p>
   	   				     </li>
   	   				   <div class="clearfix"> 
                 </div>
   	   			    </ul>
   	   			 </div>
   	   			 <div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s2"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				   <p>In this we provide videos by courses and also provide a search engine which search only study videos and a chatserver for making a website to opensource.</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="clearfix"> </div>
   	   			 </div>
   		  	  </div>
    <!--offering ends here-->

   		  </div>
   	  </div>
   </div>

<!-- container box ends here-->

<a href="#" class="scrollToTop"><img src="images/arrow_up.jpg" width="30px" height="30px" alt="scroll up"></a>
   <!-- footer starts here-->
   <div class="footer">
    	<div class="container">
   	        <div class="footer_grids">
	               <div class="footer-grid">
			                <h4>About Us</h4>
			                <ul class="list1">
				                  <li><a href="contact.php">Contact Us</a></li>
				                  <li><a href="rss.php">Tech</a></li>
				            
				                  <li><a href="#"></a></li>
			                 </ul>
		              </div>
                   <div id="google_translate_element">
            </div>
            <script type="text/javascript">
                  function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,fr,gu,hi,mr,ru,ta,zh-CN'}, 'google_translate_element');
                  }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
           
		              <div class="footer-grid last_grid" style="float:right;">
			                    <h4>Follow Us</h4>
			                    <ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			                           <li><a href="https://www.facebook.com/pages/Study-with-vid-studyvid/796985460361211"> <i class="fb"> </i> </a></li>
			                           <li><a href="https://plus.google.com/u/0/b/114352645499839424127/114352645499839424127/about"><i class="google"> </i> </a></li>
			                           <li><a href="https://www.youtube.com/channel/UCr-pnXnwOeJzLAtXOuVyrMQ?guided_help_flow=3"><i class="u_tube"> </i> </a></li>
		 	                    </ul>
		 	                    <div class="copy wow fadeInRight" data-wow-delay="0.4s">
                          </div>
		              </div>
		              <div class="clearfix"> </div>
	          </div>
      </div>
   </div>
   <!--footer ends here-->


<script src="js/bootstrap.min.js"></script>
   
     
</body>
</html>		