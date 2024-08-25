<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname']; // Make sure the field name matches the form
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['Country'];
    $message = $_POST['message'];

    // Create a string with the form data
    $data = "Name: $name\nEmail: $email\nPhone: $phone\nCountry: $country\nMessage: $message\n\n";

    // Append the data to a file
    $file = 'form_data.txt'; // Change this to the path of your desired file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
    exit;
}
?>
