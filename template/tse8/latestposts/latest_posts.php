<?php 
require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php";     
include 'retrieve_id.php'


?>
  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content=

  "width=device-width, initial-scale=1">
  <title>Posts</title>
    <link rel="stylesheet" href="/tse/styles.css"><!--Ulkoisen css tiedoston linkki -->

  
 
</head>
  
<body>
  <!-- Blog Latest -->
  
 

      <h1 class="blog-secondary-heading text-dark">
        Latest Posts</h1>
  
     
        <div class="row">
  
        <?php
                    // Attempt select query execution
     $sql = "SELECT * FROM posts ORDER BY date DESC limit 4";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          
                                while($row = mysqli_fetch_array($result)){
                                if($row['published']==true){
                               
                                        echo "<p>";
                                        echo '<a  href="/tse/read.php?id='. $row['post_id']. '">'. $row['heading']./* Otsikko jossa linkki otsikon osoittamaan postaukseen */
                                        '</a>';
                                    echo "</div>";  
                                   echo "</div>";  
                                  }
                                                      
                                 }
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
         
                  
                
                 
                 
                </div>
          
       
        </div>
      </div>
    </div>
  </div>
  
  
</body>
  
</html>