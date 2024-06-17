<?php
$receiving_email_address = 'Titutrends@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['platform'];
    $time = $_POST['category'];
    $people = $_POST['description'];
    

    $subject = "New table booking request from the website";

    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "platform: $platform\n";
    $email_message .= "Category: $tcategoryime\n";
    $email_message .= "Description: $description\n";

    $headers = "From: $email";

    // Uncomment the line below if you want to send HTML emails
    // $headers .= "Content-type: text/html";

    // Use the mail function to send the email
    mail($receiving_email_address, $subject, $email_message, $headers);
    
    echo "Your message has been sent successfully!";
} else {
    echo "Invalid request";
}
?>
