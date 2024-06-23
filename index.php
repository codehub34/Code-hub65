<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
    echo $_POST ["name"]
        // Customize the recipient email address
        $to = "masskeita64@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: {$name}\nEmail: {$email}";

        // Send the email
        mail($to, $subject, $body);
        echo "Email sent successfully!";
    } else {
        echo "Please fill in all required fields.";
    }
}
?>
