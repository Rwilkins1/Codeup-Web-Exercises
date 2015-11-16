<?php
session_start();
function endSession()
{
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}
endSession();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Log Out</title>
</head>
<body>
	<h2>You are now logged out</h2>
	<a href="login.php">Log In</a>
</body>
</html>