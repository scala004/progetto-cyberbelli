<?php
session_start();
session_destroy();
header('Location: ../autenticazione/autenticazione.html');
exit;
?>