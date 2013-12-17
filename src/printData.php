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
$query = "SELECT * FROM Messages";
if($result = $database->query($query, SQLITE_BOTH, $error))
{
  while($row = $result->fetch())
  {
    print("ID: {$row['mid']} <br />" .
          "MESSAGE: {$row['msg']} <br />".
          "DIGITS: {$row['dig']} <br /><br />");
  }
}
else
{
  die($error);
}

?>