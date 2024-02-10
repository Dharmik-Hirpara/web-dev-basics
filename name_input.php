<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 

    <title>Documen</title>
</head>
<body>
    <form method = "post">
        <h1>Enter your name</h1> <!---  heading -->
        <input type ="text" id="name"/><br/><br/> <!--  input field for the user to enter their name-->
        <button onclick="myFunction()">Submit</button> <!--- button that triggers -->
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //checks if form has been submitted
    $name = $_POST["name"]; //gets the value of the name input field
    
    echo "<p>Your Name is: ". $name . "</p>";//
    }
?>
</body>
</html>