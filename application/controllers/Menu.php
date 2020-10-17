<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('DBConfig', 'menu');
    }

    public function index() 
    {
        $data['title'] = "Menu Management"; 
        $data['user'] = $this->db->get_where('employee', ['nik' => $this->session->userdata('nik')])->row_array();

        $data['menu'] = $this->menu->getMenu();

        $this->form_validation->set_rules('menu','Menu', 'required|trim');
        if($this->form_validation->run() == false )
        {
            $this->load->view('templates/header', $data); 
            $this->load->view('templates/sidebar', $data); 
            $this->load->view('templates/topbar', $data); 
            $this->load->view('menu/index', $data); 
            $this->load->view('templates/footer'); 
        }  else 
        {
            $this->db->insert('user_menu',['menu' => $this->input->post('menu', true)]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <strong>New menu Added!</strong>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>');
		    redirect('menu');
        }
    }

    public function editMenu() 
    {

    }

    public function deleteMenu($menu_id)
    {   
        $this->menu->deleteMenu($menu_id);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Menu Success</div>');
        redirect('menu');
    }

    public function submenu()
    {
        $data['title'] = "Sub Menu Management"; 
        $data['user'] = $this->db->get_where('employee', ['nik' => $this->session->userdata('nik')])->row_array();

        $data['subMenu'] = $this->menu->getSubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if($this->form_validation->run() == false) 
        {
            $this->load->view('templates/header', $data); 
            $this->load->view('templates/sidebar', $data); 
            $this->load->view('templates/topbar', $data); 
            $this->load->view('menu/submenu', $data); 
            $this->load->view('templates/footer'); 
        } else
        {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Submenu added!</div>');
			redirect('menu/submenu');
        }
    }

    public function deleteSubmenu($submenu_id)
    {
        $this->menu->deleteSubmenu($submenu_id);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Sub Menu Success</div>');
        redirect('menu/submenu');
    }
}