<?php

namespace controller;

use controller\Database;

class Category extends Database {

	public function getAllCategory($table)
	{
		$sql = "SELECT * FROM $table ORDER BY id DESC";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function getByCategory($table1, $id)
	{
		$sql = "SELECT * FROM $table1 WHERE id_category = '$id' ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function getTotalCategory($table1, $id)
	{
		$sql = "SELECT * FROM $table1 WHERE id_category = '$id' ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->rowCount();
	}
}