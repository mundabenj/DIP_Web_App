<?php
require_once "includes/DB_Connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DBT</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- top navigation starts here -->
    <?php require "includes/navigation.php"; ?>
    <!-- top navigation ends here -->
<div class="header">
    <h1>Talk to Us</h1>
</div>
<!-- the main content section starts here -->
<div class="row">
    <div class="content">
<h3>Update Message content</h3>

<?php
if(isset($_GET["EditId"])){
    $stmt = $pdo->prepare("SELECT * FROM messages WHERE messageId=? LIMIT 1");
    $stmt->execute([$_GET["EditId"]]);
    $messages = $stmt->fetch();
}
?>

<form action="processes/messages_proc.php" method="POST">
    <label for="sender_email">Sender Email:</label><br>
    <input type="text" name="sender_email" id="sender_email" placeholder="Enter the sender Email" value="<?php print $messages["sender_email"]; ?>" maxlength="60" required /><br><br>

    <label for="receiver_email">Receiver Email:</label><br>
    <input type="email" name="receiver_email" id="receiver_email" placeholder="Enter the receiver Email" value="<?php print $messages["receiver_email"]; ?>" maxlength="60" /><br><br>

    <label for="subject">Subject:</label><br>
    <input type="text" name="subject" id="subject" placeholder="Enter the subject" value="<?php print $messages["subject"]; ?>" maxlength="160" required /><br><br>

    <label for="message">Message:</label><br>
    <textarea name="message" id="message" placeholder="Enter the message" rows="10" required><?php print $messages["message"]; ?></textarea><br><br>

    <input type="submit" name="update_message" value="Update Message" />
    <input type="hidden" name="messageId" value="<?php print $messages["messageId"]; ?>" />
    <a href="view_messages.php">Cancel</a>
</form>

    </div>
    <div class="sidebar">
<h3>Side Bar</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
<!-- the main content section ends here -->
<div class="footer">
copyright &copy; DBIT 2023
</div>
</body>
</html>