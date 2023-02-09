<?php
// Initialize the session


/* Funktio joka tallettaa kommentin ja sen kirjoittajan tiedot kantaan*/  
// Check if the user is already logged in, if yes then redirect him to My profile page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: post2.php");
    exit;
}

function setComments($link){  
   
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['user_id'];
        $date = $_POST['date'];
        $message = $_POST['message'];
    
    $sql = "INSERT INTO comments (user_id, date, message) VALUES ('$uid', '$date', '$message')";
$result = $link->query($sql);
   
} 
}
/* Funktio jota kutsumalla saadaan kommentit näkymään verkkosivulla*/
function getComments($link){ 
    $sql="SELECT * FROM comments";
    // proceed only if a query is executed
    if($result = $link->query($sql)){
        while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-container'>";
        echo "<div class='comment-card'><p>"; 
       /* print_r ($row['avatar']."<br>");*/       /* Aseta avatar myöhemmin*/
        echo ($row['user_id']."<br><br>");
            echo ($row['date']."<br><br>");
            echo nl2br($row['message']."<br><br>");/* Kommenttien rivivälit*/
            echo "</div>";
           
            echo "</p>
            <form class ='delete-form' method='POST' action='".deleteComments($link)."'>
            <input type='hidden' name='comment_id' value='".$row['comment_id']."'>
            
            <button type='submit' name='commentDelete'>Delete</button>
            </form>
            <form class ='edit-form' method='POST' action='editcomment.php'>
            <input type='hidden' name='comment_id' value='".$row['comment_id']."'>
            <input type='hidden' name='user_id' value='".$row['user_id']."'>
            <input type='hidden' name='date' value='".$row['date']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <button>Edit</button>
            </form>
            
            </div>";
       
        }
    }
  }
  /*funktio jolla muokataan kommenttia*/
  
  function editComments($link){  
    if(isset($_POST['commentSubmit'])){
        $comment_id = $_POST['comment_id'];
        $uid = $_POST['user_id'];
        $date = $_POST['date'];
        $message = $_POST['message'];
    
    $sql = "UPDATE comments SET message='$message' WHERE comment_id='$comment_id'";
$result = $link->query($sql);
header("Location:post2.php");   


} 
}
/* Funktio jolla voidaan poistaa tietty kommentti*/

function deleteComments($link){

        if(isset($_POST['commentDelete'])){
            $comment_id = $_POST['comment_id'];
        $sql = "DELETE FROM comments WHERE comment_id ='$comment_id'";
    $result = $link->query($sql);
   
    
    
    } 
    
    
}

/*login funktio*/
function getLogin($link){ 
    if(isset($_POST['loginSubmit'])) {
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];
    
    $sql="SELECT * FROM user WHERE uid='$uid' AND pwd ='$pwd'";
    // proceed only if a query is executed
    if($result = $link->query($sql)){
    
        if(mysqli_num_rows($result) > 0 ){
        
            if ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
                header("Location:index.php?loginsuccess");
                exit();
            }

        }else{ 
            header("Location:index.php?loginfailed");
            exit();
        }
  }
}

}

/*Uloskirjautuminen*/
function userLogout(){ 
    if(isset($_POST['logoutSubmit'])){
   
    session_destroy();
    header("Location:post2.php");
    exit(); 
    
    }
}





?>