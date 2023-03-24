<!DOCTYPE html>
<html lang="en">
<head>
<title>TSE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="\tse\styles.css"> <!-- Erillinen stylesheet muotoiluun -->
<link rel="icon" type="image/x-icon" href="\tse\Logo v2.png"> <!-- Sivun yläosan logo kuvake joka näkyy välilehdessä -->
<script src="\tse\script.js"></script><!--Ulkoinen javascript tiedosto -->
</head>
<body>
  <div class="topnav" id="myTopnav"> <!-- Responsiivinen top nav -->
    <div class="logo"><a href="\tse\index.html" id="a-home"><img src="\tse\Logo v2.png" id="home" alt="TSE logo" width="40px" height="60px"></a> </div> 
     <a id="toplogin" href="\tse\login.html" target="_blank">Login</a>
   <a  id ="topmyprofile" href="\tse\profile.html" target="_blank">My profile</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
   <i onclick="my2Function(this)" class="fa fa-arrow-down"></i>  </a> <!--Topnavin avaus ja sulkemis painike nuolilla -->
   <a><div class="search-container">
      <form action="\tse\action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>   
    </div></a>
  </div>
     
  <div class="container container-posts">  <!-- Posts sivun sisältöalue-->
    
<!-- The sidebar collapse avattava ja suljettava -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="\tse\index.html">Home</a>
  <a href="\tse\posts.html">Posts</a>
  <a href="\tse\privacy.html">Privacy policy</a>
  
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
    
    /*kategorian perusteella tehtävä kysely*/
    
    require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php";
    $sql = "SELECT *FROM posts WHERE category='tutorial'ORDER BY date DESC";
    $result = $link->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='card' id='postcard'><h2>"; 
       
        echo ($row['heading']."<br><br>"); /* otsikko*/
        echo "</h2>";   
        echo "<h5>";
        echo ($row['date']."<br><br>");/* päivämäärä jolloin postaus on päivitetty*/
            echo "</h5>";  
            echo "  <div class='fakeimg' style='height:200px;'>Image</div>";
            echo "". $row['img']. "<br><br>";
            echo nl2br($row['post']."<br><br>");/* Postien rivivälit rivivälit*/
            echo "</div>";
           
          echo "</div>";  
   
      }
    } else {
      echo "0 results";
    }
    
    $link->close();
    ?>
   
 </div>
 
    <div class="rightcolumn">
    <div class="card">
        <ul>
            <h2>Latest posts</h2>
           <p><a id="a-side" href="post1.html">Posts title1</a></p>
           <p><a id="a-side" href="post2.html">Posts title2</a></p>
           <p><a id="a-side" href="post3.html">Posts title3</a></p>
           <p><a  id="a-side" href="post4.html">Posts title4</a></p>
        </ul>
    </div>
    <div class="card">
      <h2>Latest comments</h2>
       <ul>
           <p><a id="a-side" href="#"> comment1</a></p>
           <p><a  id="a-side" href="#"> comment2</a></p>
           <p><a  id="a-side" href="#"> comment3</a></p>
          
        </ul>
      
    </div>
    <div class="card">
      <ul>
        <h2>Archives</h2> 
        <p><a id="a-side" href="#">January 2023</a></p>
        <p><a id="a-side" href="#">February 2023</a></p>
        <p><a  id="a-side" href="#">December 2022</a></p>
        <p><a id="a-side" href="#">November 2022</a></p>
     </ul>
    </div>
    <div class="card">
      <h2>Categories</h2> 
      <a id="a-side" href="hardware.php"><p>Hardware</p></a>   
      <a id="a-side" href="mechanics.php"> <p>Mechanics</p></a>  
      <a id="a-side" href="software.php"><p>Software projects</p></a>
       <a id="a-side" href="tutorial.php"><p>Tutorial</p></a>
     
      
    </div>
  </div>
</div>



        <div class="footer-posts"> 
    <p>Footer</p>
</div>       
      
</div>
</body>
</html>





