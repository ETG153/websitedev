

<?php include 'header.php';


?><!-- header osa php tiedostosta-->
<body>


<?php include 'topnav.php';?><!-- topnav osa php tiedostosta-->
     
  <div class="container">  <!-- Index sivun sisältöcontaineri-->
  
<!-- The sidebar collapse avattava ja suljettava -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</i></a>
  <a href="index.php">Home</a>
  <a href="posts.php">Posts</a>
  <a href="privacy.php">Privacy policy</a>

</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
  
</div>

<div class="container1"> <!-- Otsake containeri-->

  <h1>TSE</h1>
<h2>Totally Safe electronics</h2> 

</div>
 
<div class="content" id="content"><!--Sisältöalue jossa blogin sisältölaatikot-->
  
 
<h2>Blog tamplate</h2>
  <p>Content area.</p>
  
 
 <!--Blogin postaukset laatikoissa ja napit-->
  <?php
                    // Attempt select query execution
     $sql = "SELECT * FROM posts";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                                
                          while($row = mysqli_fetch_array($result)){
                            if($row['published']==true){ 
                            echo "<div class='row'>";
                                  echo "<div class='center'>"; 
                                        echo "<p>" . $row['id'] . "</p> <br>";
                                        echo "<h2>" . $row['heading'] . "</h2><br>";/*heading*/
                                        echo "<h4>" . $row['date'] . "</h4><br>";/*date*/
                                        /* echo "<h2>" . $row['image'] . "</h2>";image later  HERE*/
                                        echo "<p>"; 
                                        echo nl2br($row['abstract']."<br><br>");/* Postien rivivälit rivivälit INDEX sivulle postauksen tiivistelmä*/
                                        echo"</p>";
                                        echo ' <a href="read.php?id='. $row['id'] .'" class="button" title="View Post" data-toggle="tooltip">Read more...</a>'; /*Etusivun readmore, joka näyttää koko postauksen painettaessa*/
                                           
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
                    mysqli_close($link); ?>
 <div>
</div>
 
  

</div>

 <div class="footer">
   
    <p>Footer</p>
</div>       
      
</div>
</body>
</html>


