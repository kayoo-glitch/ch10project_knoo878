<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Project: Building a Dynamic Form with PHP</h1>
    <p>Name: Kay Nae Oo</p>
    <p>Date: 10/27/2026</p>

    <?php
    //This will create the form and "POST" is able to operate on it
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //This uses the "$__POST" array & trim function, to remove unnecessary whitespace
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        //This will make sure that you will type in the correct email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        //This is the variable that will be used
        $colorBoxClass = "";
        $response = "";

        //This checks if you had left any boxes empty
        if (empty($name) || empty($email) || empty($message)) {
            $response = "Please type in all the boxes that are required.";
            //This can make the box a certain color if you didnt do what's required
            $colorBoxClass = "error"; 
        } else {
            $feedback = "Thank you, you have completed the form.";
            //This can make the box a certain color if you do what's required
            $colorBoxClass = "success";
        }
        //This is the response of it
        echo "<div class='$colorBoxClass'>";
        echo "<p>$response</p>";
        echo "</div>";

        //This is the response of it, if you completed all that is required
        if ($colorBoxClass == "success") {
            echo "<div class='output'>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong> $message</p>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
