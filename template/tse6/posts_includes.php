<?php



/* Funktio jota kutsumalla saadaan kommentit näkymään verkkosivulla*/
function getPosts($link){ 
    $sql="SELECT * FROM posts";
    // proceed only if a query is executed
    if($result = $link->query($sql)){
        while ($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='card' id='postcard'><h2>"; 
       
        echo ($row['heading']."<br><br>"); /* otsikko*/
        echo "</h2>";   
        echo "<h5>";
        echo ($row['date']."<br><br>");/* päivämäärä jolloin postaus on päivitetty*/
            echo "</h5>";  
            echo "<p>";  
            echo nl2br($row['post']."<br><br>");/* Postien rivivälit rivivälit*/
            echo "</p>";  
            echo "</div>";
           
          echo "</div>";  
        }
    }
  } 

?>

