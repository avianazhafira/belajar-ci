<?php
session_start();

session_unset(); //hapus semua var session
session_destroy(); //hancurkan sesion

//hancurkan cookie
setcookie("cookietoken","", time()-3600,"/");
include "cekautentikasi.php";

?>