<?php

namespace controller;

use controller\Database;

class News extends Database {

	public function getAll($table)
	{
		$sql = "SELECT * FROM $table ORDER BY id DESC";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function getById($table, $id)
	{
		$sql = "SELECT * FROM $table WHERE id = '$id' ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->fetch();
	}
}