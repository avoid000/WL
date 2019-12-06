<?php
print "<h3> REFRESH PAGE </h3>";
session_start();
 
if(isset($_SESSION['views']))
 
     $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
    echo"Total Number of Page Views = ".$_SESSION['views'];
?>
