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

//add Movie table to database
$query = 'CREATE TABLE Messages ' .
         '(mid INTEGER PRIMARY KEY, msg TEXT, dig INTEGER)';
         
if(!$database->queryExec($query, $error))
{
  die($error);
}

//insert data into database
$query =
  'INSERT INTO Messages (msg, dig) ' .
  'VALUES ("There is much more to come", 1234567890)';

if(!$database->queryExec($query, $error))
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