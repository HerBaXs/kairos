<?php



class UserController extends CI_Controller {

    public function index()
    {
        $data['nav_db']         = $this->db->order_by('id', 'DESC')->get('nav_item')->result_array();
        $data['nav_new']        = $this->db->order_by('id', 'DESC')->get('nav_upload')->result_array();
        $data['home_db']        = $this->db->order_by('id', 'DESC')->get('home_data')->result_array();
        $data['home_icon']      = $this->db->get('home_icon')->result_array();
        $data['about_title']    = $this->db->limit(1)->order_by('id', 'desc')->get('about_data')->result_array();
        $data['about_desc']     = $this->db->limit(10)->get('about_desc')->result_array();

        $this->load->view('user/index', $data);
    }

}