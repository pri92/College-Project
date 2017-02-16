
<?php include '../config.php'; ?>
<?php
 if(isset($_SESSION['username']))

  {

include 'logincourses.php';

  }
  else
  {
   
include 'coursehead.php';

  }



?>
</body>
</html>