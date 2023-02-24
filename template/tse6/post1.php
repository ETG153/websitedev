



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
    <div class="card" id="postcard">
       <h2> HEADING1</h2>
      <h5>Title description, Dec 7, 2022</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <div class="center-posts"><!--Blogin postaukset laatikoissa ja napit-->
      
        <p>Täältä neat osan tekstistä ja voit lukea lisää aiheesta </p>
        <p> ja voit lukea lisää aiheesta </p>
        <p> ja voit lukea lisää aiheesta </p>
        
        
        <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille.Tänne  voi kirjoittaa kontenttia. </p>
        <p>Lorem ipsumia. </p>
      
      
      
        <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p> 
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
  
    <p>Lorem ipsumia. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
  
    <p>Lorem ipsumia. </p>
   
   
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
  
    <p>Lorem ipsumia. </p>
   
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
    <p>Mitä täällä voisi sanoa käyttäjille. Terve vaan yhteisön jäsenille. </p>
  
    <p>Lorem ipsumia. </p>
   
   
     <p>Täältä näet koko postauksen ja voit lukea lisää aiheesta </p>
   
    <p>Täältä näet koko postauksen ja voit lukea lisää aiheesta </p>
    <p>Lorem ipsumia. </p>
   
    
        
   
    </div>
 </div>
 
 <div class="card"> <!--Kommenttialue joka tulee kaikille sivuille -->
  <h2> Comments card</h2></a> 

  
  <div class="center-posts"><!--Blogin postaukset laatikoissa ja napit-->
  

<br>
<p> Leave a comment:</p>
<div class="form">  
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
   <textarea class="comment" placeholder="Write something.."<?php echo $message; ?> ></textarea>
   <br>
   <input type="submit" class="button" id="combtn" name="post_comment" value="Send">
 </form> 
</div>

<div class="comment-container" > <!--Comment container jonka sisälle tulee kaikki kommenttikentät*** -->
  <div class="comment-card" ><!--kortti jonka sisällä on yksittäinen kommentti tai vastaus siihen -->
  <h3 class="comment-title">The first comment</h3>
  <img src="user.png" alt="Avatar" class="avatar"> <!-- Käyttäjän avatar -->
  
  <h4>Username </h4>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     </p>
     
  
     
  <div class="comment-footer"><!--kortin footeri jossa on sisältöä tykkäykset ei tykkäykset ja montako vastausta -->
   <div>likes 123</div> 
  <div>dislikes 23</div>
  <div class="show-replies">Reply2</div>
   
  </button>  
  </div>
  </div>
  <div class="comment-container"> <!--kortti jossa on ensimmäinen vastaus kommenttiin  -->
    <div class="comment-card">
      <h3 class="comment-title">The first reply</h3>
      <img src="avatar.png" alt="Avatar" class="avatar"><!-- Käyttäjän avatar -->
      
         
         
      <div class="comment-footer">
       <div>likes 123</div> 
      <div>dislikes 23</div>
      <div class="show-replies">Reply1</div>
      </div>
      </div>
  
    <div class="comment-container"  id="divTohide"> <!--kortti jossa on ensimmäinen vastaus ensimmäiseen vastaukseen avatar ja komentoijan nimi  -->
      <div class="comment-card">
      
        <h3 class="comment-title">The first reply to the first reply</h3>
        <img src="user.png" alt="Avatar" class="avatar"><!-- Käyttäjän avatar -->
        
           
        <div class="comment-footer">
         <div>likes 123</div> 
        <div>dislikes 23</div>
        <div class="show-replies">Reply1</div>
  </div>
  </div>
  <div class="comment-container" id="first-first-reply"> 
     <div class="comment-card">
      
       <h3 class="comment-title">The first reply to the reply to the  first reply</h3>
       <img src="avatar.png" alt="Avatar" class="avatar"> <!-- Käyttäjän avatar -->
       
          
          
       <div class="comment-footer">
        <div>likes 123</div> 
       <div>dislikes 23</div>
       <div class="show-replies">Reply0</div>
       </div>
       </div>
  </div>
  </div>
  </div>
  
  <div class="container">
     <div class="comment-container" id="first-comment"> 
     <div class="comment-card">
     <h3 class="comment-title">The second reply</h3>
     <img src="user.png" alt="Avatar" class="avatar"> <!-- Käyttäjän avatar -->
     
        
     <div class="comment-footer">
      <div>likes 123</div> 
     <div>dislikes 23</div>
     <div class="show-replies">Reply0</div>
     </div>
     </div>
  </div>
  </div>


</div>
  
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



        <div class="footer-posts"> 
    <p>Footer</p>
</div>       
      
</div>
</body>
</html>


