<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>throw your thoughts away</title>
  <style type="text/css">
  		@import "css/stageStyle.css";
<?php
       include 'letters.php';
       browser_info(); 
       $maxVal = 0;

   try
   {
     $database = new SQLiteDatabase('DATA.sqlite', 0666, $error);
   }

   catch(Exception $e)
   {
     die($error);
   }

   //read data from database
   $query = "SELECT * FROM Messages WHERE mid = (select max(mid) from Messages)";
   //$query = "SELECT * FROM Messages ORDER BY RANDOM() LIMIT 1";

   if($result = $database->query ($query, SQLITE_BOTH, $error))
   {

     while($row = $result->fetch())
     {
        $maxVal = $row['mid'];
     }

   }

   else
   {
      die($error);
   }   

?>
  </style>
 
  <script language="Javascript">
    function forward(){location.href="./stage.php?max=<?php echo $maxVal; ?>&last=0";}
  </script>
 
</head>

<body onload="forward()">
<?php	
  	printTrash();
?>

</body>
</html>
