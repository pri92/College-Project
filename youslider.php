<?php include 'mainheader.php'; ?>
<html>
  <head>
    <title>YouTube Search</title>
   
   
    <style>
       
        
    #layer1
    {

     
      left: 470px;
       top:260px;
      }
    </style>
    <link rel="stylesheet" href="css/colorbox.css" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    <script language="JavaScript" type="text/javascript" src="suggest.js"></script>



    <script>
        $(document).ready(function(){
        $(".youtubepop").colorbox({iframe:true, innerWidth:640, innerHeight:390});
        });
    </script>

   
</head>

<body>


 <div class="banner wow fadeInUp" data-wow-delay="0.4s">
                  <div class="container_wrap">
                      <h1>What are you looking to 
                             learn today?</h1>
                      <div class="dropdown-buttons"  style="position:relative; width:100%; height:61px;">   
                          <div class="dropdown-button" style="position:absolute; width:308px; left:250px;">
                              <form method="get" action="" id="suggestSearch">                 
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
                            <input type="text" name="q" value="Search more topics here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search more topics here...';}" id="PoNumber" alt="Search Criteria" onkeyup="searchSuggest();" autocomplete="on">
                      </div>
                      <div id="layer1"></div><br>
                      <div class="contact_btn">
                          <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
                      </div>
                      </form>   
                      
                      <div class="clearfix"></div>
                  </div>
              </div>
          
</div>
</div>










    <?php
          // set_time_limit(0);
          ini_set('max_execution_time',0);

          if(!isset($_GET['submit']))
          {
    ?>


    <?php
          }
          else
                    if (@$_GET['q'] && $_GET['maxResults'] ) {
                    // Call set_include_path() as needed to point to your client library.
                        set_include_path("courses/google-api-php-client-master/src/");
                        require_once 'Google/autoload.php';
                        require_once 'Google/Client.php';
                        require_once 'Google/Service/YouTube.php';
                        require_once 'Google/Service.php';
                        
                      


                  /* Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
                     Google APIs Console <http://code.google.com/apis/console#access>
                     Please ensure that you have enabled the YouTube Data API for your project. */


    
                  $DEVELOPER_KEY = 'AIzaSyBb2LL8VWkPrktqA6LQi9mnCQwqi5zuODA';

                  $client = new Google_Client();
                  $client->setDeveloperKey($DEVELOPER_KEY);

                  
                  $youtube = new Google_Service_YouTube($client);


                  try {
                        $searchResponse = $youtube->search->listSearch('id,snippet', array(
                            'q' => $_GET['q'],
                            'maxResults' => $_GET['maxResults'],
                            'order'=> $_GET['order'],
                        ));

                        $videos = '';
                        // $a=array('heap','algorithm','html','css','java');
                        // $string=implode('', $a);
  
                        // if(fnmatch($_GET['q'], $string))
                        // {
                              $string1 = $_GET['q'];
                              // $string2 = $row['vid_name']; 
                              //echo  "$string2"; print_r($strr1=explode(" ", $string1));
                              //echo $strr1[0];
                              $strr1=explode(" ", $string1);
                            // $sttr2=array('html','css','php','python','java','javascript' );
                      include 'list.php';
                              //  $strr2=explode(" ", $string2);
                              $result = array_intersect($strr1, $sttr2);
                              //echo '<div style="background: #FFFFFF; margin-top: 5%; box-shadow: 0px 0px 10px #666666;border: 1px solid #CCCCCC;width: relative;height:relative;">';
                              
                              $left=0;
                              $down=0;
                              echo '<div class="container" style="position:relative; width:90%;">';
                                  echo '<h2 class="title block-title">Recent Result</h2>';
                                  //echo '<div id="main">';
                                  //  echo '<div class="youtubepop1">';
                             
                                    echo '<div style="position:absolute;top:50px;left:-30px">';
                                    if(count($result)!=0)
                                    {
                                        foreach ($searchResponse['items'] as $searchResult) {
                                          //switch case starts here
                                           echo  '<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s" style="width:300px;height:300px;border:2px solid;position:absolute;top:'.$down.'px;left:'.$left.'px;">';
                                           echo '<div class="living_box"><a href="#"></a>';
                                           if($left<700)
                                           {
                                            $left+=320;
                                          }
                                          else
                                          {
                                            $left=0;
                                            $down+=320;
                                          }
                                          switch ($searchResult['id']['kind']) {
                                            case 'youtube#video':
                                              $videos .= sprintf('<li>%s (%s)</li>', $searchResult['snippet']['title'], $searchResult['id']['videoId']);
                                              // echo "yoooo";
                                              $link=$searchResult['id']['videoId'];
                                              $title=$searchResult['snippet']['title'];
                                              //echo ('<a href="https://www.youtube.com/watch?v='.$link.'">'.$searchResult['snippet']['title'].'</a>');
                                              //echo '<div class="video-align" style="float:right;">';

                                               echo ('<a class="youtubepop" href="http://www.youtube.com/embed/'.$link.'?rel=0&amp;wmode=transparent;modestbranding=1" >');
                                              echo '<img class="img-responsive width="200px" height="200px" style="align:center;" src="http://img.youtube.com/vi/'.$link.'/hqdefault.jpg"></img>';
                                              echo '<span class="sale-box">';
                                             // echo '<span class="sale-label">PLAY</span>';
  echo '</a>';

                                             // echo '</span>';
                                            
                                              //title starts
                                              echo '<div class="living_desc" style="height:20px;overflow:hidden;margin-bottom:10px;">';

                                                  echo '<p>';
                                                      echo $title;
                                                  echo '</p>';
                                              echo '</div>';
                                              //title ends here
                                                     

                                                        //$video_ID = 'wJ0Qhbm3Xj8';
                                              $url="https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$link&key=AIzaSyBb2LL8VWkPrktqA6LQi9mnCQwqi5zuODA";
                                              // $url="https://gdata.youtube.com/feeds/api/videos/{$link}?v=2&alt=json";
                                              $JSON = file_get_contents($url);
                                              // $JSON_Data = json_decode($JSON);
                                              $json_data = json_decode($JSON, true);
      // echo $JSON;
                                             @$views=$json_data['items'][0]['statistics']['viewCount'];
                                              @$like=$json_data['items'][0]['statistics']['likeCount'];
                                               @$unlike=$json_data['items'][0]['statistics']['dislikeCount'];
                                              // @$views = $JSON_Data->{'entry'}->{'yt$statistics'}->{'viewCount'};
                                              // @$unlike=$JSON_Data->{'entry'}->{'yt$rating'}->{'numDislikes'};
                                              // @$like=$JSON_Data->{'entry'}->{'yt$rating'}->{'numLikes'};
                                                  
                                              echo '<div id="json" style="align:right;">';

                                                     //table starts here

                                                    echo '<table border="1" class="propertyDetails">';
                                                      echo  '<tbody><tr>';
                                                          echo  '<td style="margin-right:3px;">';
                                                              echo '<img src="images/view.png">'.$views.'</img>';
                                                          echo '</td>';
                                                          echo     '<td style="margin-right:3px;">';
                                                              echo '<img src="images/unlike.png">'.$unlike.'</img>';
                                                          echo '</td>';
                                                          echo     '<td style="margin-right:3px;">';
                                                              echo '<img src="images/like.png">'.$like.'</img>';
                                                          echo '</td>';
                                                      echo '</tr>';
                                                    echo '</tbody></table>';

                                                    //table ends here

                                             echo '</div>';
                                          echo '</div>';
                                        echo '</div>';                               

                                          break;
                                      }
                                      //switch case ends here
                                  }
                                  //enf of foreach
                            }
                            //end of if
                            else
                            {
                                    echo   "";
                            }

 
                               
                              /*$htmlBody .= <<<END
                              h3>Videos</h3>
                              <ul>$videos</ul> 
   
                              END; */
                        } 

                        catch (Google_Service_Exception $e) {
                              $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
                              htmlspecialchars($e->getMessage()));
                        }
                        catch (Google_Exception $e) {
                                  $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
                                  htmlspecialchars($e->getMessage()));
                        }
              }
 
/*
 }  
            
              } 
              else 
                {     echo "No records matching your query were found.";   }
                 } 
                 else
                  {   echo "ERROR: Could not execute $sql. " . $mysqli->error; 
              }

$mysqli->close(); 
*/


echo '</div>';
echo '</div>';




?>
<script type="text/javascript">
    
  
    

                        $.ajax({
                            type: "GET",
                                    url: https://www.googleapis.com/youtube/v3/videos?part=statistics&id=Q5mHPo2yDG8&key={YOUR_API_KEY},
                                    
                                    cache: false,
                                    success: function (data)
                                    {
                                        alert("Address Status Change To Letter Sent") ;  
                                        location.reload();                  
                                    }
                            });
                        

    
</script>

    
</body>
</html>