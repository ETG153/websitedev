<div class="rightcolumn">
    <div class="card">
   
    <h2>Latest Posts</h2>
      <ul>
        <?php
                    // Attempt select query execution to fetch latest posts
     $sql = "SELECT * FROM posts ORDER BY date DESC limit 4";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          
                                while($row = mysqli_fetch_array($result)){
                                if($row['published']==true){
                               
                                        echo "<p>";
                                        echo '<a id="a-side" href="/tse/read.php?id='. $row['id']. '">'. $row['heading']./* Otsikko jossa linkki otsikon osoittamaan postaukseen */
                                        '</a>';
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
            
                    ?>
     </ul>
   
    </div>
    <div class="card">
    <h2>Latest comments</h2> 
   <?php
                    // Attempt select query execution to fetch latest posts
     $sql = "SELECT * FROM comments ORDER BY date DESC limit 4";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                  $sentence = $row['message'];
                                  // Use trim() and explode() function to
                                  // get the first word of a comment string
                                  $arr = explode(' ', trim($sentence)); // otetaan uusimmista kommenteista näytettäväksi kaksi ensimmäistä sanaa ja listataan ne sidebariin
                                     echo "<p>"; 
                                 
                                  echo $arr[0]; echo" ";  echo $arr[1]; echo"..."; 
                                  echo "</p>";
                                        
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
     </ul>

    </div>
   
    <div class="card">
      <ul>
        <h2>Archives</h2> 
      
       
       
        <p><a  id="a-side" href="archives\january.php">January 2023</a></p>
        <p><a  id="a-side" href="#">February 2023</a></p>
        <p><a  id="a-side" href="#">December 2022</a></p>
        <p><a  id="a-side" href="#">November 2022</a></p>
     </ul>
    </div>
    <div class="card">
      <h2>Categories</h2> 
     
     
      <a id="a-side" href="categories\hardware.php"><p>Hardware</p></a>   
      <a id="a-side" href="categories\mechanics.php"> <p>Mechanics</p></a>  
      <a id="a-side" href="categories\software.php"><p>Software projects</p></a>
       <a id="a-side" href="categories\tutorial.php"><p>Tutorial</p></a>
      
    </div>
  </div>
</div>