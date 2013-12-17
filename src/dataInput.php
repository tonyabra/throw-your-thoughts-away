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

$msgIn = $_GET['form-msg'];
$digIn = $_GET['form-dig'];

$query = "SELECT * FROM Messages WHERE dig = " . $digIn;

if($result = $database->query($query, SQLITE_BOTH, $error))
{
  if ((!$row = $result->fetch()) || ($digIn == '14432800850') || ($digIn == '17085398175') || ($digIn != '17735279812'))
  {

  $swears = array('shit', 'fuck', 'Fuck', 'suck', 'dick', 'nigger', 'nigga', 'cunt', 'fag');

  foreach ($swears as $value) {
  		
	if (stripos($msgIn, $value)!==false){

	    echo "Swears found:" . $value . "\n";
	    $msgIn = str_ireplace($value, "*#!*", $msgIn);

	}
  }

  //insert data into database
  $query =
  	 'INSERT INTO Messages (msg, dig) ' .
 	 'VALUES ("' . $msgIn . '" ,' . $digIn . ')';

  	 if(!$database->queryExec($query , $error))
	 {
		die($error);
	 }

	 echo "Post successful!";
     }
  
  else{
   echo "Declined: Duplicate originator.";
  }

}

else
{
  die($error);
}

?>