<?php
require_once('config.php');

/**
 * Insert, Update, Delete
 */
function execute($sql) {
	// Them du lieu vao CSDL
	// B1. Cach ket noi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// B2. Luu du lieu
	// $sql = "delete from student where id = $id";
	mysqli_query($conn, $sql);

	// B3. Ngat ket noi toi CSDL
	mysqli_close($conn);
}

/**
 * Select
 */
function executeResult($sql, $isSingle = false) {
	// Them du lieu vao CSDL
	// B1. Cach ket noi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// B2. Luu du lieu
	$resultset = mysqli_query($conn, $sql);

	if($isSingle) {
		$data = mysqli_fetch_array($resultset, 1);
	} else {
		$data = [];
		while(($row = mysqli_fetch_array($resultset, 1)) != null) {
			$data[] = $row;
		}
	}

	// B3. Ngat ket noi toi CSDL
	mysqli_close($conn);

	return $data;
}

