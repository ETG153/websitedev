<?php include 'header.php';?><!-- header osa php tiedostosta-->
<body>
  <?php include 'topnav.php';?><!-- topnav osa php tiedostosta-->
 
  <div class="container container-posts">  <!-- Posts sivun sisältöalue-->
    
<!-- The sidebar collapse avattava ja suljettava -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.php">Home</a>
  <a href="posts.php">Posts</a>
  <a href="privacy.php">Privacy policy</a>
  
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
       <h2> Privacy policy</h2>
      <h5>Updated , Dec 7, 2022</h5>
  
      <div class="center-posts"><!--Blogin postaukset laatikoissa ja napit-->
      
        <p>Tänne tulee GDPR mukainen tietosuojaseloste</p>
    
   

    </div>
 </div>
    </div>
 
    <?php include('sidebar.php'); ?> <!--include sidebar   -->

        <div class="footer-posts"> 
    <p>Footer</p>
</div>       
      
</div>
</body>
</html>




