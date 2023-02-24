<?php
include_once 'C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php';

if(isset($_POST['save']))
{	 
    
	 $heading = $_POST['heading'];
     $date = date('Y-m-d H:i:s');
	 $post = $_POST['post'];
	 $abstract = $_POST['abstract'];
	 $sql = "INSERT INTO posts (heading, date, post, abstract)
	 VALUES ('$heading',now() ,'$post', '$abstract')";
	 
	 
	 if (mysqli_query($link, $sql)) {
		echo "Tietojen tallennus onnistui !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($link);
	 }
	 mysqli_close($link);
}


?>