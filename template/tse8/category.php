<?php   // Include config file
                  require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php";                      
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TSE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css"> <!-- Erillinen stylesheet muotoiluun -->
<link rel="icon" type="image/x-icon" href="Logo v2.png"> <!-- Sivun yläosan logo kuvake joka näkyy välilehdessä -->
<script src="script.js"></script><!--Ulkoinen javascript tiedosto -->
</head>
<body>

<?php include 'topnav.php';?><!-- topnav osa php tiedostosta-->
    
  <div class="container container-posts">  <!-- Posts sivun sisältöalue-->
    
<!-- The sidebar collapse avattava ja suljettava -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.php">Home</a>
  <a href="posts.php">Posts</a>
  <a href="privacy.html">Privacy policy</a>
 
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
 
</div>


<div class="container1 container1-posts"> <h1>TSE</h1> <!-- Container jonka sisällä otsake -->
<h2>Totally Safe electronics</h2> 
</div>
 
<div class="content-posts" id="content"> <!--Sisältöalue Posts sivulla oma muotoilu asettelu-->
 
 <div class="row"> <!-- Rivi jossa columnit on jaettu osiin-->
  <div class="leftcolumn"> <!-- Vasen columni jossa kortti jonka sisällä postaukset näkyvät-->
   
  <!-- Muista lisätä kaikille sivuille sidebarin osat-->
  <?php
                    // Attempt select query execution uusimmat postaukset ylhäällä
     $sql = "SELECT * FROM posts ORDER BY date DESC";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          
                           
                                while($row = mysqli_fetch_array($result)){
                                if($row['published']==true){
                                  echo "<div class='row'>";
                                  echo "<div class='card' id='postcard'>"; 
                                        echo "<p>" . $row['id'] . "</p> <br>"; /* tämän voi poistaa myöhemmin*/
                                        echo "<h2>";
                                        echo '<a id="a-heading" href="read.php?id='. $row['id']. '">'. $row['heading']. '</a>'; /* Otsikko jossa linkki otsikon osoittamaan postaukseen */
                                       
                                        echo "</h2><br>";
                                        echo "<h4>" . $row['date'] . "</h4><br>";/*date*/
                                        echo "  <div class='fakeimg' style='height:200px;'>Image</div>";
                                          echo "". $row['img']. "<br><br>";
                                     echo "<p>" ; 
                                        echo nl2br($row['post']."<br><br>");/* Postien rivivälit rivivälit*/
                                       echo"</p>";
                                        echo "<td>";
                                            echo ' <a href="read.php?id='. $row['id'] .'" class="button" title="View Post" data-toggle="tooltip">Read more...</a>'; /*Etusivun readmore, joka näyttää koko postauksen painettaessa*/   
                                        echo "</td>";
                                    echo "</tr>";
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
 
                
                  
                    ?>
 </div>
  
 <?php include('sidebar.php'); ?> <!--include sidebar   -->
 
 

        <div class="footer-posts"> 
    <p>Footer</p>
</div>       
      
</div>
</body>
</html>







