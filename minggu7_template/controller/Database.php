<?php

namespace controller;
use PDO;

class Database extends PDO
{

	private $host 	= 'localhost';
	private $name 	= 'dumet';
	private $dbname = 'webmaster';
	private $pass 	= 'school';

	function __construct()
	{

		parent::__construct('mysql:host='.$this->host.';dbname='.$this->dbname, $this->name, $this->pass);
	}
}