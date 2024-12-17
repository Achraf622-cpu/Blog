<?php

setcookie("user_id", "", time() - 3600, "/");
setcookie("auth_token", "", time() - 3600, "/");

header("Location: ../index.php");
exit;
?>
