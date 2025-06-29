<?php include('includes/header.php'); ?>

<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

echo "<h2>Thanks, $name!</h2>";
echo "<p>We received your message:</p>";
echo "<blockquote>$message</blockquote>";
echo "<p>We'll reach you at <strong>$email</strong>.</p>";
?>

<?php include('includes/footer.php'); ?>
