<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Config extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    private function validation()
    {
        $config = array(
            array(
              'field' => 'name',
              'label' => 'İsim',
              'rules' => 'required',
              'errors' => array(
                    'required' => '%s boş bırakılamaz.'
                    )
            ),
            array(
              'field' => 'value',
              'label' => 'Değer',
              'rules' => 'required',
              'errors' => array(
                    'required' => '%s boş bırakılamaz.'
                    )
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if ($this->session->has_userdata('isadmin')) {
            if ($this->validation() === FALSE) {
                $this->load->view('/admin/config/create');
            } else {
                $data = array(
                    'name' =>  $this->input->post('name'),
                    'value' =>  $this->input->post('value')
                );
                $this->config_model->create($data);
                $this->session->set_flashdata('validation', 'Ayar başarıyla eklenmiştir.');
                redirect('/admin/ayarlar');
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
        if ($this->session->has_userdata('isadmin')) {
            $data['config'] = $this->config_model->get_with_id($id);
            $this->load->view('admin/config/show', $data);
        } else {
            redirect('/main/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if ($this->session->has_userdata('isadmin')) {
            $data['config'] = $this->config_model->get_with_id($id);
            $this->load->view('admin/config/edit', $data);
        } else {
            redirect('/main/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        if ($this->session->has_userdata('isadmin')) {
            if ($this->validation() === FALSE) {
                $data['config'] = $this->config_model->get_with_id($id);
                $this->load->view('admin/config/edit', $data);
            } else {
                $data = array(
                    'name' =>  $this->input->post('name'),
                    'value' =>  $this->input->post('value')
                );
                $this->config_model->update($id, $data);
                $this->session->set_flashdata('validation', 'Ayar başarıyla güncellenmiştir.');
                redirect('/ayar/'.$id.'/duzenle');
            }
        } else {
            redirect('/main/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if ($this->session->has_userdata('isadmin')) {
            $this->config_model->delete($id);
            redirect('/admin/ayarlar');
        } else {
            redirect('/main/login');
        }
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