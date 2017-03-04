<?php
include'config.php';
 $con=mysqli_connect("localhost","root","","user");
//$enable=true;
//If the user is logged, we log him out
//(isset($_SESSION['username']))
//{
  //We log him out by deleting the username and userid sessions
 // unset($_SESSION['username'], $_SESSION['userid']);
?>
 <!--   <div class="message">You have successfuly been loged out.<br />
    <a href="index.php">Home</a></div>-->
<script type="text/javascript">
var cross=document.getElementById('loginBoxx');
function clickedcross(){
        cross.style.display='none';

    }
</script>    
    <?php
if(isset($_SESSION['username']))
{
  //We log him out by deleting the username and userid sessions
  unset($_SESSION['username'], $_SESSION['userid']);
?>
<?php header('Location :index.php'); ?>
<?php
}
else
{
  $ousername = '';
  //We check if the form has been sent
  if(isset($_POST['username'], $_POST['password']))
  {
    //We remove slashes depending on the configuration
    if(get_magic_quotes_gpc())
    {
      $ousername = stripslashes($_POST['username']);
      $username = mysqli_real_escape_string($con,stripslashes($_POST['username']));
      $password = stripslashes($_POST['password']);
    }
    else
    {
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = $_POST['password'];
    }
    //We get the password of the user
    $req = mysqli_query($con,'select password,id from users where username="'.$username.'"');
    $dn = mysqli_fetch_array($req);
    //We compare the submited password and the real one, and we check if the user exists
    if($dn['password']==$password and mysqli_num_rows($req)>0)
    {
      //If the password is good, we dont show the form
      $form2 = false;
      //We save the user name in the session username and the user Id in the session userid
      //echo '<p>Session created</p>';
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['userid'] = $dn['id'];

?>
<!--<div class="message">You have successfuly been logged. You can access to your member area.<br />
<a href="<?php// echo $url_home; ?>">Home</a></div>-->
<?php header('location:home.php'); ?>
<?php
    }
    else
    {
      //Otherwise, we say the password is incorrect.
      $form2 = true;
      $message2 = 'The username or password is incorrect.';
    }
  }
  else
  {
    $form2 = true;
  }
  if($form2)
  {
    //We display a message if necessary
  if(isset($message2))
  {
    echo '<div class="message">'.$message2.'</div>';
  }
  //We display the form
?>

            <form id="loginForm" action="login.php" method="post">
              <fieldset id="body">
                <fieldset>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" placeholder="username">
                </fieldset>
                <fieldset>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="password">  
                </fieldset>
                   <input type="submit" id="login" value="Log in" name="submit">
                  
                </fieldset>
                 <div >
              <img src="images/cross1.jpg"  onclick="clickedcross()" style="width: 40px;display: inline;position: relative;bottom:15px;float:right;z-index: 1005;pointer:cursor;">
              </div>
                       </form>
                      
                      

<?php
  }
}
            ?>       