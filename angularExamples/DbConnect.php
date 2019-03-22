<?php
DEFINE ('DB_USER', 'in15009351');
DEFINE ('DB_PASSWORD','15009351');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'in15009351');
@$DB = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
{
	echo 'Cannot connect to the database: '. mysqli_connect_errno();

}

?>