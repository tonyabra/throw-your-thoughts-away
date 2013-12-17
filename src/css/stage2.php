<?php
	$max = $_GET['max'];
	$newMax = $max;
	$last = $_GET['last'];

   //read data from database

   try
   {
     $database = new SQLiteDatabase('DATA.sqlite', 0666, $error);
   }

   catch(Exception $e)
   {
     die($error);
   }

   $query = "SELECT * FROM Messages WHERE mid = (select max(mid) from Messages)";
   //$query = "SELECT * FROM Messages ORDER BY RANDOM() LIMIT 1";

   if($result = $database->query ($query, SQLITE_BOTH, $error))
   {

     while($row = $result->fetch())
     {
        $newMax = $row['mid'];
     }

   }

   else
   {
      die($error);
   } 

    if ($max == $newMax){

	$now = rand(1, $max);
	
	while($now == $last){
 	   $now = rand(1, ($max - 1));	
        }
     }
     else {
	$now = $max + 1;
	$max = $max + 1;
     }
        
        $page = $_SERVER['PHP_SELF'] . "?max=" . $max . "&last=" . $now;     	
	$sec = "20"; 
	header("Refresh: $sec; url=" . $page);

?>

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
				
			prepAnimation(0, 10);
			prepAnimation(40, 10);
			prepAnimation(90, 10);
			prepAnimation(140, 10);
			prepAnimation(180, 10);
?>				
  </style>
  
</head>

<body>

<div class="wordSpace"></div>

<?php		

try
{
  //create or open the database
  $database = new SQLiteDatabase('DATA.sqlite', 0666, $error);
}
catch(Exception $e)
{
  die($error);
}


//read data from database
$query = "SELECT msg FROM Messages WHERE mid = " . $now;
if($result = $database->query($query, SQLITE_BOTH, $error)){
  
  while($row = $result->fetch()){
	printThought($row['msg']);
  }
}

else
{
  die($error);
}

?>

</body>
</html>