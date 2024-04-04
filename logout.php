<h1>logout...</h1>

<?php
setcookie('user', '', time() - 3600);
header("location: index.php");
exit();
?>