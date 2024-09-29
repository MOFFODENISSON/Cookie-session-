<?php
// Set a cookie named "username" with the value "JohnDoe"
// The cookie will expire in 1 hour (3600 seconds)
setcookie("username", "JohnDoe", time() + 3600, "/"); // "/" makes it available site-wide

// Redirect to retrieve the cookie
header("Location: retrieve_cookie.php");
exit();
?>