<?php
DEFINE ('DB_USER', '');
DEFINE ('DB_PASSWORD','');
DEFINE ('DB_HOST', '');
DEFINE ('DB_NAME', '');
@$DB = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
{
	echo 'Cannot connect to the database: '. mysqli_connect_errno();

}

?>
