<?php
	session_start();
    $_SESSION = [];
    

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
$_SESSION["u_usuario"] = null;	
$_SESSION["u_tipo_user"] = null;
session_destroy();
	#header("Location: ../index.php");
	echo "<script>location.href='../index.php'</script>";
?>