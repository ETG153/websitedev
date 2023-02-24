<?php
include 'C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php';
include 'comments_inc.php';
include 'posts_includes.php';
date_default_timezone_set('Europe/Helsinki'); /* asetetaan dafault aikavyöhyke*/


session_start();


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
  <a href="index.html">Home</a>
  <a href="posts.html">Posts</a>
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
  
  <?php  getPosts($link); ?>
  
  <div class="card" id="postcard">
       <h2> HEADING2</h2>
      <h5>Title description, Dec 7, 2022</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <div class="center-posts"><!--Blogin postaukset laatikoissa ja napit-->
      
      
     <p>Täältä näet koko postauksen ja voit lukea lisää aiheesta </p>
   
    <p>Täältä näet koko postauksen ja voit lukea lisää aiheesta </p>
    <p>Lorem ipsumia. </p>
   
    </div>
 </div>
 
 <div class="card"> <!--Kommenttialue joka tulee kaikille sivuille -->
   <h2> Comments card</h2></a> 

  
  <div class="center-posts"><!--Blogin postaukset laatikoissa ja napit-->
  
  <?php 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  echo "You are logged in";
} else {
  echo "You are NOT logged in";
 
}
?>

  
<br>

<p> Leave a comment:</p><!--Kommenttien lähetys kantaan -->
<div class="form">  
<?php
  if(isset($_SESSION["id"])){
  echo "<form method='POST' action='".setComments($link)."'>
  <input type='hidden' name='id' value='".$_SESSION['id']."'>
  <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
  <textarea name='message'></textarea>
   <button type='submit' name='commentSubmit'>Comment </button>
 </form>";
} else {
  echo "You need to be logged in to comment!";

}

?>
 
</div>


 <?php  getComments($link); ?>
  
     
</div>
  
</div>
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
      <a id="a-side" href="categories/hardware.php"><p>Hardware</p></a>   
      <a id="a-side" href="categories/mechanics.php"> <p>Mechanics</p></a>  
      <a id="a-side" href="categories/software.php"><p>Software projects</p></a>
       <a id="a-side" href="categories/tutorial.php"><p>Tutorial</p></a>
     
      
    </div>
  </div>
</div>

<h1>Comments</h1>

<br>

<p>comments here </p>

        <div class="footer-posts"> 
    <p>Footer</p>
</div>       
      
</div>
</body>
</html>


