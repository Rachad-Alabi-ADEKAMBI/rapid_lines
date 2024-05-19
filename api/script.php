<?php

function verifyInput($inputContent)
{
    $inputContent = htmlspecialchars($inputContent);
    $inputContent = trim($inputContent);
    return $inputContent;
}

$action = $_GET['action'] ?? '';
if($action =='booking'){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];  // Replace with the recipient's email address
    $subject = "Your new booking search";
    $message = "We have received your search. You will receive an email with the best flights tickets very soon.";
    $headers = "From: contact@rapid_lines.com";

 //   echo $to;

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email";
    }

 //   echo $email;
    ?>

    <script>
        alert('We have received your search. You will receive an email with the best flights tickets very soon.')
         window.location.replace('../index.php');
    </script>
<?php } } ?>