<?php

require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php"; 
  
/* To sort the id and limit the post by 4 */
$sql = "SELECT * FROM posts ORDER BY date desc limit 4 "; 
$result = $link->query($sql);
$sqlall= "SELECT * FROM posts ORDER BY date desc";
$resultall = $link->query($sqlall);
   
$i = 0;
   
if ($result->num_rows > 0) {  
  
    // Output data of each row
    $idarray= array();
    while($row = $result->fetch_assoc()) {
        echo "<br>";  
        
        // Create an array to store the
        // id of the blogs        
        array_push($idarray,$row['post_id']); 
    } 
}
else {
    echo "0 results";
}
?>