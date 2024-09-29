<?php
// Check if the cookie named "username" is set
if (isset($_COOKIE["username"])) {
    echo "Cookie 'username' is set!<br>";
    echo "Value: " . $_COOKIE["username"] . "<br>";
} else {
    echo "Cookie 'username' is not set.";
}
?>