<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $gender = $_POST["gender"];
    
    // You can perform database operations or save the data to a file here.
    
    echo "Registration successful!<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Course: " . $course . "<br>";
    echo "Gender: " . $gender . "<br>";
}
?>
