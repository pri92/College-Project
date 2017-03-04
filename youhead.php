<!doctype html>
<?php include 'mainheader.php'; ?>

<html>
    <head>
    
    <style>
        h2{font-size:13px; margin:15px 0 0 0;}
    </style>
    <link rel="stylesheet" href="css/colorbox.css" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    <script>
        $(document).ready(function(){
        $(".youtubepop").colorbox({iframe:true, innerWidth:640, innerHeight:390});
        });
    </script>

   
</head>



  <body>

  <?php
   

   $_GET['maxResults']=12;
if (@$_GET['q'] && @$_GET['maxResults'] ) {
  // Call set_include_path() as needed to point to your client library.
  set_include_path("./google-api-php-client-master/src/");
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
    ));

    $videos = '';
                        
                              $string1 = $_GET['q'];
                              
                              $strr1=explode(" ", $string1);
                                include 'list.php';
                              $result = array_intersect($strr1, $sttr2);
                              
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
                                           echo '<div class="living_box"><a href="#">';
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
                                               echo ('<a class="youtubepop" href="http://www.youtube.com/embed/'.$link.'?rel=0&amp;wmode=transparent" >');
                                              echo '<img class="img-responsive width="200px" height="200px" style="align:center;" src="http://img.youtube.com/vi/'.$link.'/hqdefault.jpg"></img>';
                                              echo '<span class="sale-box">';
                                              echo '<span class="sale-label">PLAY</span>';
                                              echo '</span>';
                                              echo '</a>';

                                              //title starts
                                               echo '<div class="living_desc" style="height:20px;overflow:hidden;margin-bottom:10px;">';
     echo '<p>';
                                                      echo $title;
                                                  echo '</p>';
                                              echo '</div>';
                                              //title ends here
                                                     

                                             $url="https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$link&key=AIzaSyBb2LL8VWkPrktqA6LQi9mnCQwqi5zuODA";
                                              // $url="https://gdata.youtube.com/feeds/api/videos/{$link}?v=2&alt=json";
                                              $JSON = file_get_contents($url);
                                              // $JSON_Data = json_decode($JSON);
                                              $json_data = json_decode($JSON, true);
      // echo $JSON;
                                             @$views=$json_data['items'][0]['statistics']['viewCount'];
                                              @$like=$json_data['items'][0]['statistics']['likeCount'];
                                               @$unlike=$json_data['items'][0]['statistics']['dislikeCount'];
                                                  
                                              echo '<div id="json" style="align:right;">';

                                                     //table starts here

                                                    echo '<table border="1" class="propertyDetails">';
                                                      echo  '<tbody><tr>';
                                                          echo  '<td><img src="#" alt="" style="margin-right:7px;">';
                                                              echo '<img src="images/view.png">'.$views.'</img>';
                                                          echo '</td>';
                                                          echo     '<td><img src="#" alt="" style="margin-right:7px;">';
                                                              echo '<img src="images/unlike.png">'.$unlike.'</img>';
                                                          echo '</td>';
                                                          echo     '<td><img src="#" alt="" style="margin-right:7px;">';
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

 
                               
                           
                        } 

                        catch (Google_ServiceException $e) {
                              $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
                              htmlspecialchars($e->getMessage()));
                        }
                        catch (Google_Exception $e) {
                                  $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
                                  htmlspecialchars($e->getMessage()));
                        }
              }
 


echo '</div>';
echo '</div>';




?>

    
</body>
</html>