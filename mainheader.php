
<?php include_once 'config.php'; ?>
<?php
 if(isset($_SESSION['username']))

  {

include 'loginheader.php';

  }
  else
  {
   
include 'indexheader.php';

  }



?>
</body>
</html>