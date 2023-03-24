<?php
/*here is left join to show user name and comment*/
require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php";          
 

$sql = "SELECT comments.user_id,comments.message, users.username as username FROM comments

LEFT JOIN users ON comments.user_id=users.id
";


$results = $link->query($sql);

if($results->num_rows){

while($row=$results->fetch_object()){
  echo "{$row->user_id} <br><br>";
  echo " {$row->username} <br><br>";
  echo " {$row->message}<br><br>";
}

}else{

  'There are no results';
}


?>