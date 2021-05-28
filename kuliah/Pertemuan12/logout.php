<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 12 - 8 mei 2021
Mempelajari Login dan Registrasi
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>