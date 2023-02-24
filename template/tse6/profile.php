<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
/*session id muuttuja */
$id=$_SESSION["id"];
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
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

<div class="content-posts" id="content"> <!--Sisältöalue Posts sivulla oma muotoilu asettelu-->
 
 <div class="row"> <!-- Rivi jossa columnit on jaettu osiin-->
  <div class="leftcolumn"> <!-- Vasen columni jossa kortti jonka sisällä postaukset näkyvät-->
    <div class="card" id="postcard">
       <h2> My profile</h2>
      
      
      <div class="center-posts"><!--Blogin postaukset laatikoissa ja napit-->
      
      
        
          <h3> Username: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> </h3> 
          <h3> Profile picture:  </h3> <!--Kuvan koko tänne-->
          <?php echo"<img src='uploads/profile".$id.".png' height='100px' width='80px'class='avatar'>";?>
        
        
        <h4> Change your password: </h4> 
         
        <div>
        <form id="profile-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New Password</label>
                <input type="password"id="newpass" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password"id="confirmnewpass"  name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Change password">
               
            </div>
        </form>
</div>
<a href="logout.php" >Sign Out of Your Account</a>
      

        <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button> 
</form>




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


