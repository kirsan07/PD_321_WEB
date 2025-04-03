<?php

$server_name		= "DESKTOP-0TCDSR6\SQLEXPRESS";
$connection_info	= array("UID"=>"PHP", "PWD"=>"111", "Database"=>"PD_212", "CharacterSet"=>"UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);

$query = "SELECT
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name',
		birth_date,
		DATEDIFF(DAY, work_since, GETDATE())/365 AS 'experience'
FROM	Teachers";

$result = sqlsrv_query($connection, $query);

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
	echo '<tr>';

	echo '<td>';
	echo $row["teacher_id"];
	echo '</td>';

	echo '<td>';
	echo $row["full_name"];
	echo '</td>';

	echo '<td>';
	echo $row["birth_date"]->format("d.m.Y");
	echo '</td>';

	echo '<td>';
	echo $row["experience"];
	echo '</td>';


	echo '</tr>';
}

sqlsrv_close($connection);

?>