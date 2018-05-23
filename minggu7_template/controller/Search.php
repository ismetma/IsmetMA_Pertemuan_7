<?php


namespace controller;

use controller\Database;

class Search extends Database {

	public function searchByTitle($table, $fieldname, $id)
	{
		$sql = "SELECT * FROM $table WHERE $fieldname LIKE '%$id%' ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		// return $stmt->fetch();
		header('location:index.php?search='.$id);
		
	}

	public function getSearchByTitle($table, $fieldname, $id)
	{
		$sql = "SELECT * FROM $table WHERE $fieldname LIKE '%$id%' ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}