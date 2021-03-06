<?php namespace Ainet\Models;

class AbstractModel {

	private static $conn;

	protected static function dbConnection()
	{
		global $database;
		if(!isset(self::$conn)) {
			@self::$conn = new \mysqli($database['host'],$database['user'],$database['password'],$database['database']);
		}
		return self::$conn;
	}

	protected static function dbQuery($query)
	{
		$conn = self::dbConnection();
		$result = $conn->query($query);
		return $result;
	}

	protected static function dbClose()
	{

	}
}