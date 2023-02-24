<?php   // Include config file
                  require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php";                      
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TSE</title> <!--Title joka on välilehden otsikko -->
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css"><!--Ulkoisen css tiedoston linkki -->
<link rel="icon" type="image/x-icon" href="Logo v2.png"> <!-- Sivun yläosan logo kuvake joka näkyy välilehdessä -->
<script src="script.js"></script><!--Ulkoinen javascript tiedosto -->
</head>
<body>
 

  <div class="topnav" id="myTopnav"> <!-- Responsiivinen top nav  uusi-->
    <div class="logo"><a href="index.php" id="a-home"><img src="Logo v2.png" id="home" alt="TSE logo" width="40px" height="60px"></a> </div> <!-- logo jossa linkki etusivulle -->
    <a id="toplogin" href="login.php" target="_blank">Login</a> <!-- login linkki sisäänkirjautumisssivulle -->
    <a  id ="topmyprofile" href="profile.php" target="_blank">My profile</a> <!--My profile linkki profiiliin  -->
    <a id="arrow" href="javascript:void(0);" class="icon" onclick="myFunction()"> <!--navbarin responsiivinen toiminto linkki ja nuolen suunnan vaihto funktio  -->
      <i onclick="my2Function(this)" class="fa fa-arrow-down"></i>
    </a> 
    <a> <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>   
    </div></a>
  </div>
   
  <div class="container">  <!-- Index sivun sisältöcontaineri-->
  
<!-- The sidebar collapse avattava ja suljettava -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</i></a>
  <a href="index.php">Home</a>
  <a href="posts.php">Posts</a>
  <a href="privacy.html">Privacy policy</a>

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
                                  echo "<div class='row'>";
                                  echo "<div class='center'>"; 
                                        echo "<p>" . $row['post_id'] . "</p> <br>";
                                        echo "<h2>" . $row['heading'] . "</h2><br>";/*heading*/
                                        echo "<h4>" . $row['date'] . "</h4><br>";/*date*/
                                        /* echo "<h2>" . $row['image'] . "</h2>";image later  HERE*/
                                        echo "<p>"; 
                                        echo nl2br($row['abstract']."<br><br>");/* Postien rivivälit rivivälit INDEX sivulle postauksen tiivistelmä*/
                                        echo"</p>";
                                        echo ' <a href="read.php?id='. $row['post_id'] .'" class="button" title="View Post" data-toggle="tooltip">Read more...</a>'; /*Etusivun readmore, joka näyttää koko postauksen painettaessa*/
                                           
                                        echo "</div>";  
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


