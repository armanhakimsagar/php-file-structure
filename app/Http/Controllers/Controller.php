<?php

include("config/site.php");
include("config/server.php");
include("config/database.php");

class Controller
{
	public $connection;
	
	public function __construct()
	{
		$this->connection = new mysqli('mysql:host='.$GLOBALS['DBHOST'].';dbname='.$GLOBALS['DBNAME'].';charset=utf8', $GLOBALS['DBUSER'], $GLOBALS['DBPASS']);

	}
	
}
?>