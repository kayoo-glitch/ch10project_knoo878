<!DOCTYPE html>
<html lang="en">
<!--
Name: Kay Nae Oo
Date: 10/27/2026
--> 
<head>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Project: Building a Dynamic Form with PHP</h1>
    <p>Name: Kay Nae Oo</p>
    <p>Date: 10/27/2026</p>

    <!---->
    <form action="confirm.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <input type="submit" value="Submit">
    </form>

</body>
</html>
