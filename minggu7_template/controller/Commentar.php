<?php 
namespace controller;

use controller\Database;


class Commentar extends Database {

	public function insertComment($table, $post_id, $username, $replay)
	{
		$sql = "INSERT INTO $table VALUES('','$post_id','$username','$replay') ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		header('Location:index.php?detail='.$post_id.'&sukses');
	}

	public function getAllCommentById($table, $id)
	{
		$sql = "SELECT * FROM $table WHERE post_id = '$id' ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function getTotal($table, $id)
	{
		$sql = "SELECT * FROM $table WHERE post_id = '$id' ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		return $stmt->rowCount();
	}
}