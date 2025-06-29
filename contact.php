<?php include("includes/headers.php")?>
<h1>Contact Us</h1>
<form action="submit.php" action='POST'>
    <input type="text" name="name" placeholder="Your name here" required><br><br>
    <input type="email" name="email" placeholder="your email" required><br><br>
    <textarea name="message" placeholder="Your message"></textarea><br><br>
    <button type="submit">Send</button>
</form>
<?php include("includes/footer.php")?>