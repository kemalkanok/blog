<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
	function index($table=NULL)
	{
		if ($this->session->has_userdata('isadmin')) {
			if ($table === NULL) {
				$this->load->view('/admin/pages/homepage.php');
			} elseif ($table == "config") {
				$data["config"] = $this->config_model->get_all_entries($table);
				$this->load->view('/admin/config/index.php', $data);
			} elseif ($table == "category") {
				$data["category"] = $this->category_model->get_all_entries($table);
				$this->load->view('/admin/category/index.php', $data);
			} elseif ($table == "blog") {
				$data["blog"] = $this->blog_model->get_all_entries($table);
				$this->load->view('/admin/blog/index.php', $data);
			}
		} else {
			redirect('/main/login');
		}
	}
	

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
	/* LOGOUT */
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('/main/login');
	}
}
?>