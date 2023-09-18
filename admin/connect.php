<?php
$connect = mysqli_init();
mysqli_ssl_set($connect, NULL, NULL, "./DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($connect, "munonchat.mysql.database.azure.com", "tienanhdz", "phuc17@@", "ban_mu", 3306, MYSQLI_CLIENT_SSL);
