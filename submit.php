<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Optionally, process the form data (e.g., save to a database, send email, etc.)
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $comments = htmlspecialchars($_POST['comments']);
    
    // Redirect to the success page
    header("Location: submit.html");
    exit(); // Ensure no further code is executed
} else {
    // If accessed directly without form submission, show an error message
    echo "Invalid request!";
}
?>
