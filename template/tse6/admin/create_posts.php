<?php
// Include config file
require_once "C:\Users\Jasa8\OneDrive\Työpöytä\oikeudet.php"; 
 
// Define variables and initialize with empty values
$heading = $abstract = $post = "";
$heading_err = $abstract_err =$post_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate heading
    $input_heading = trim($_POST["heading"]);
    if(empty($input_heading)){
        $heading_err = "Please enter a heading.";
    } elseif(!filter_var($input_heading, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $heading_err = "Please enter a valid heading.";
    } else{
        $heading = $input_heading;
    }
    
    // Validate abstract//
    $input_abstract = trim($_POST["abstract"]);
    if(empty($input_abstract)){
        $abstract_err = "Please enter an abstract for post.";     
    } else{
        $abstract = $input_abstract;
    }
    
    // Validate text//
    $input_post = trim($_POST["post"]);
    if(empty($input_post)){
        $post_err = "Please enter text for post.";     
    } else{
        $post = $input_post;
    }
    
    // Check input errors before inserting in database
    if(empty($heading_err) && empty($abstract_err) && empty($post_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO posts (heading, abstract, post, date) VALUES (?, ?, ?, now())"; 
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_heading, $param_abstract, $param_post); /* Tänne vielä onko julkaistu vai ei*/
            
            // Set parameters
            $param_heading = $heading;
            $param_abstract = $abstract;
            $param_post = $post;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: retrieve_posts.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Heading</label>
                            <input type="text" name="heading" class="form-control <?php echo (!empty($heading_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $heading; ?>">
                            <span class="invalid-feedback"><?php echo $heading_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Abstract</label>
                            <textarea name="abstract" class="form-control <?php echo (!empty($abstract_err)) ? 'is-invalid' : ''; ?>"><?php echo $abstract; ?></textarea>
                            <span class="invalid-feedback"><?php echo $abstract_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="post" class="form-control <?php echo (!empty($post_err)) ? 'is-invalid' : ''; ?>"><?php echo $post; ?></textarea>
                            <span class="invalid-feedback"><?php echo $post_err;?></span>
                       
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="retrieve_posts.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>