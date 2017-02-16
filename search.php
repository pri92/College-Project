<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("user",$con);
    $query=mysql_query("select * from list where courses LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['courses'];
    }
    echo json_encode($array);
?>
