<!DOCTYPE html>
<html>
<head>
    <title>Brijesh Yadav - Contact</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include('includes/header.php'); ?>

    <h1>Contact Me</h1>
    <!-- Your contact form content here -->
    <form method="POST" action="process_contact.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea name="message" required></textarea>
        
        <input type="submit" value="Submit">
    </form>

    <?php include('includes/footer.php'); ?>
</body>
</html>