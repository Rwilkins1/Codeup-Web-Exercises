<?php
require_once 'Input.php';
require_once 'public/php/Log.php';
class Auth
{
	public static function attempt($username, $password)
	{
		if (($username == "guest" || $username == "Guest") && password_verify($password, password_hash('password', PASSWORD_DEFAULT))) {
			$_SESSION['Loggedinuser'] = $username;
			header('location: authorized.php');
			die();
		} else {
			if (isset($_POST['username']) && isset($_POST['password'])) {
				header('location: failed.php');
				die();
			}
		}
	}

	public static function check($username)
	{
		if (empty($_SESSION['Loggedinuser'])) {
			echo Log::logmessage("[FAILURE]", "There was an error logging you in");
		} else {
			echo Log::logmessage("[SUCCESS]", "User '{$username}' has successfully logged in!");
		}
	}

	public static function user($inputs)
	{
		return $inputs;
	}

	public static function logout()
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
		header('location: login.php');
		die();
	}
}
?>