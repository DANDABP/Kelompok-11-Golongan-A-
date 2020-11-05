<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
start by <?php $_POST["start"]; ?>
<?php
// Set session variables
echo "Session variables are set.";
?>
<form method="post" action="session.php">
    <input type="submit" value="destroy">
</form>

</body>
</html>