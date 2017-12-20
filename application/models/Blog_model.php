<?php
class Blog_model extends DB_model
{
	function __construct()
	{
		parent::__construct();
		$this->table = "blog";
	}
	public function get_all_entries($table)
	{
		$this->db->select("user.name as admin, blog.*, category.name as category");
		$this->db->from($table);
		$this->db->join('user', 'user.id = blog.user_id');
		$this->db->join('blog_categories', 'blog_categories.blog_id = '.$table.'.id');
		$this->db->join('category', 'category.id = blog_categories.category_id');
		$query = $this->db->get();
		return $query->result();
	}
}
?>