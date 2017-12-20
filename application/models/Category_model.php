<?php
class Category_model extends DB_model
{
	function __construct()
	{
		parent::__construct();
		$this->table = "category";
	}
}
?>