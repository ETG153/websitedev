<?php
include_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php";
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($link, $sql)) {
    echo "Käyttäjän poistaminen onnistui";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
mysqli_close($link);
?>

<!DOCTYPE html>
<html>

<head> 


<title> Tuotelista</title>
<meta charset="UTF-8">	
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

 <body>
<br>
<a href="retrieve_users.php" class="btn btn-primary">takaisin tuotelistaan</a>


    
</body>

</html>