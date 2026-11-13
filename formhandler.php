<?php

/* Check if the form was submitted using the POST method 
   This prevents the code inside from running when the page is just loaded normally */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
  /* Retrieve user input from the $_POST array and sanitize it with htmlspecialchars() 
     to protect against XSS (Cross-Site Scripting) security vulnerabilities */
  $firstname = htmlspecialchars($_POST["firstname"]) ;
  $lastname = htmlspecialchars($_POST["lastname"]) ;
  $favouritepet = htmlspecialchars($_POST["favouritepet"]) ;

  /* Validation: Check if the firstname input field was left empty by the user */
  if(empty($firstname)){
    /* If empty, immediately redirect the user back to the form page */
    header("Location: indexOne.php");
    /* Stop the script execution right here so no further code runs */
    exit();
  }

  /* Display a confirmation message and print out the sanitized user data */
  echo "These are the data that the user submitted:";
  echo "<br>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $favouritepet;

  /* After successfully displaying the data, redirect the user back to the form page */
  header("Location: indexOne.php");
}
else {
  /* If someone tries to access this script directly without submitting the form via POST,
     redirect them back to the form page */
  header("location: indexOne.php");
}

?>
