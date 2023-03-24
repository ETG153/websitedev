
<?php 

include 'comments_inc.php';


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


 <?php getComments($link);  ?>
  
     
</div>
  
</div>
</div>