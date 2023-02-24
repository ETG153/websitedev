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
  <div class="topnav" id="myTopnav"> <!-- Responsiivinen top nav -->
    <div class="logo"><a href="index.html" id="a-home"><img src="Logo v2.png" id="home" alt="TSE logo" width="40px" height="60px"></a> </div> 
     <a id="toplogin" href="login.html" target="_blank">Login</a>
   <a  id ="topmyprofile" href="profile.html" target="_blank">My profile</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
   <i onclick="my2Function(this)" class="fa fa-arrow-down"></i>  </a> <!--Topnavin avaus ja sulkemis painike nuolilla -->
   <a><div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>   
    </div></a>
  </div>
    
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
    
  <?php
                    // Attempt select query execution
     $sql = "SELECT * FROM posts";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          
                           
                                while($row = mysqli_fetch_array($result)){
                                  echo "<div class='row'>";
                                  echo "<div class='card' id='postcard'>"; 
                                        echo "<p>" . $row['post_id'] . "</p> <br>";
                                        echo "<h2>";
                                        echo '<a id="a-heading" href="read.php?id='. $row['post_id']. '">'. $row['heading']./* Otsikko jossa linkki otsikon osoittamaan postaukseen */
                                        '</a>';
                                        echo "</h2><br>";
                                        echo "<h4>" . $row['date'] . "</h4><br>";/*date*/
                                        echo "  <div class='fakeimg' style='height:200px;'>Image</div>";
                                          echo "". $row['img']. "<br><br>";
                                     echo "<p>" ; 
                                        echo nl2br($row['post']."<br><br>");/* Postien rivivälit rivivälit*/
                                       echo"</p>";
                                        echo "<td>";
                                            echo ' <a href="read.php?id='. $row['post_id'] .'" class="button" title="View Post" data-toggle="tooltip">Read more...</a>'; /*Etusivun readmore, joka näyttää koko postauksen painettaessa*/   
                                        echo "</td>";
                                    echo "</tr>";
                                    echo "</div>";  
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
                    mysqli_close($link);
                    ?>
 </div>
  <div class="rightcolumn">
    <div class="card">
    
      <ul>
         <h2>Latest posts</h2>
        <p><a id="a-side" href="post1.php">Posts title1</a></p>
        <p><a id="a-side" href="post2.php">Posts title2</a></p>
        <p><a id="a-side" href="post3.html">Posts title3</a></p>
        <p><a id="a-side" href="post4.html">Posts title4</a></p>
     </ul>
   
    </div>
    <div class="card">
      <h2>Latest comments</h2>
      <ul>
        <p><a id="a-side" href="#"> comment1</a></p>
        <p><a id="a-side" href="#"> comment2</a></p>
        <p><a  id="a-side" href="#"> comment3</a></p>
       
     </ul>

    </div>
    <div class="card">
      <ul>
        <h2>Archives</h2> 
        <p><a  id="a-side" href="#">January 2023</a></p>
        <p><a  id="a-side" href="#">February 2023</a></p>
        <p><a  id="a-side" href="#">December 2022</a></p>
        <p><a  id="a-side" href="#">November 2022</a></p>
     </ul>
    </div>
    <div class="card">
      <h2>Categories</h2> 
      <a id="a-side" href="categories/hardware.php"><p>Hardware</p></a>   
      <a id="a-side" href="categories/mechanics.php"> <p>Mechanics</p></a>  
      <a id="a-side" href="categories/software.php"><p>Software projects</p></a>
       <a id="a-side" href="categories/tutorial.php"><p>Tutorial</p></a>
      
    </div>
  </div>
</div>

        <div class="footer-posts"> 
    <p>Footer</p>
</div>       
      
</div>
</body>
</html>


