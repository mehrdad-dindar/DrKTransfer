<?php
include_once "conftg.php";

$conect = config();
$newConnect = newConfig();
$sql    = "SELECT *
FROM logdoctors
JOIN documents
ON logdoctors.LogDoctors_Id_Document = documents.Documents_Id
LIMIT 20;";
$result = mysqli_query( $conect, $sql );

foreach ( $result as $item ) {
	$attachment_groups = "SELECT * FROM `attachment_groups`";
	$result = mysqli_query( $newConnect, $sql );
	print_r($result);
	if ( $item["LogDoctors_navar_ghalb"] != 1 ) {
		$patient_id = $item["LogDoctors_Id_Document"];
		echo $item['Documents_Name_Patient'];
		$arr["LogDoctors_navar_ghalb"] = $item["LogDoctors_navar_ghalb"];
		print_r( $arr );
		echo "<br>";
		echo "______________________________________________________________________________________________";
		echo "<br>";
		echo "<br>";
	}
}