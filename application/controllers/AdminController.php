<?php



class AdminController extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function navpage()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('nav_item')->result_array();
        $data['select_all_up']  = $this->db->order_by('id', 'DESC')->get('nav_upload')->result_array();
        $this->load->view('admin/navsection/navpage', $data);
    }

    public function nav_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['nav_edit'] = $this->db->where('id', $id)->get('nav_item')->row_array();
        $this->load->view('admin/navsection/nav_edit', $data);
    }

    public function nav_edit_act($id)
    {
        $intro      = $_POST['intro'];
        $about      = $_POST['about'];
        $features   = $_POST['features'];
        $pricing    = $_POST['pricing'];
        $download   = $_POST['download'];

        if(!empty($intro) && !empty($about) && !empty($features) && !empty($pricing) && !empty($download)){

            $data = [
                "intro"     => $intro,
                "about"     => $about,
                "features"  => $features,
                "pricing"   => $pricing,
                "download"  => $download
            ];

            $id   = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);

            $this->db->where('id', $id)->update('nav_item', $data);
            redirect(base_url('Nav'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function nav_img_bt($id)
    {
        $id = $this->security->xss_clean($id);
        $data['nav_up_edit'] = $this->db->where('id', $id)->get('nav_upload')->row_array();
        $this->load->view('admin/navsection/nav_img_bt', $data);
    }

    public function nav_img_bt_act($id)
    {
        $title_button = $_POST['title_button'];

        if(!empty($title_button)){
            $config['upload_path']      = './uploads/admin/nav/';
            $config['allowed_types']    = 'gif|png|jpg|jpeg|svg|mp3|mp4';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "title_button" => $title_button,
                    "file"         => $file
                ];

                $id   = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->db->where('id', $id)->update('nav_upload', $data);
                redirect(base_url('Nav'));
            }else{
                
                $data = [
                    "title_button" => $title_button
                ];

                $id   = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->db->where('id', $id)->update('nav_upload', $data);
                redirect(base_url('Nav'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    // Home List ////////////////

    public function list()
    {
        $data['home_data'] = $this->db->order_by('id', 'DESC')->get('home_data')->result_array();
        $data['home_icon'] = $this->db->order_by('id', 'DESC')->get('home_icon')->result_array();
        $this->load->view('admin/home/list', $data);
    }

    public function home_add()
    {
        $this->load->view('admin/home/home_add');
    }

    public function home_add_act()
    {
        $title = $_POST['title'];
        $desc  = $_POST['desc'];

        if(!empty($title) && !empty($desc)){
            $config['upload_path']      = './uploads/admin/home/';
            $config['allowed_types']    = 'gif|png|jpg|jpeg|svg|mp3|mp4';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "title"         => $title,
                    "description"   => $desc,
                    "file"          => $file
                ];

                $this->db->insert('home_data', $data);
                redirect(base_url('Home'));

            }else{

                $data = [
                    "title"         => $title,
                    "description"   => $desc
                ];
    
                $this->db->insert('home_data', $data);
                redirect(base_url('Home'));
                
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function home_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['home_edit'] = $this->db->where('id', $id)->get('home_data')->row_array();
        $this->load->view('admin/home/home_edit', $data);
    }

    public function home_edit_act($id)
    {
        $title = $_POST['title'];
        $desc  = $_POST['desc'];

        if(!empty($title) && !empty($desc)){
            $config['upload_path']      = './uploads/admin/home/';
            $config['allowed_types']    = 'gif|png|jpg|jpeg|svg|mp3|mp4|';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){
                $file =$this->upload->data('file_name');

                $data = [
                    "title"         => $title,
                    "description"   => $desc,
                    "file"          => $file
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->db->where('id', $id)->update('home_data', $data);
                redirect(base_url('Home'));
            }else{
                $data = [
                    "title"         => $title,
                    "description"   => $desc
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->db->where('id', $id)->update('home_data', $data);
                redirect(base_url('Home'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function home_delete($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('home_data');
        redirect(base_url('Home'));
    }

    public function home_view($id)
    {
        $id = $this->security->xss_clean($id);
        $data['home_view'] = $this->db->where('id', $id)->get('home_data')->row_array();
        $this->load->view('admin/home/home_view', $data);
    }

    public function home_icon_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['home_icon'] = $this->db->where('id', $id)->get('home_icon')->row_array();
        $this->load->view('admin/home/home_icon_edit', $data);
    }

    public function home_icon_edit_act($id)
    {
        $title = $_POST['title'];
        $link  = $_POST['link'];

        if(!empty($title) && !empty($link)){

            $data = [
                "title" => $title,
                "link"  => $link
            ];

            $id   = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);
            $this->db->where('id', $id)->update('home_icon', $data);
            redirect(base_url('Home'));

        }else{
            redirect($_SERVER('HTTP_REFERER'));
        }
    }

    public function home_icon_view($id)
    {
        $id = $this->security->xss_clean($id);
        $data['home_icon'] = $this->db->where('id', $id)->get('home_icon')->row_array();
        $this->load->view('admin/home/home_icon_view', $data);
    }

    // About List ////////////////////

    public function about_list()
    {
        $data['about_data'] = $this->db->order_by('id', 'desc')->get('about_data')->result_array();
        $data['about_desc'] = $this->db->limit(10)->get('about_desc')->result_array();
        $this->load->view('admin/about/about_list', $data);
    }

    public function about_add()
    {
        $this->load->view('admin/about/about_add');
    }

    public function about_add_act()
    {
        $title  = $_POST['title'];
        $descon = $_POST['descon'];

        if(!empty($title) && !empty($descon)){

            $data = [
                "title"  => $title,
                "descon" => $descon
            ];

            $this->db->insert('about_data', $data);
            redirect(base_url('About'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function about_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['about_edit'] = $this->db->where('id', $id)->get('about_data')->row_array();
        $this->load->view('admin/about/about_edit', $data);
    }

    public function about_edit_act($id)
    {
        $title  = $_POST['title'];
        $descon = $_POST['descon'];

        if(!empty($title) && !empty($descon)){

            $data = [
                "title"  => $title,
                "descon" => $descon
            ];

            $id     = $this->security->xss_clean($id);
            $data   = $this->security->xss_clean($data);
            $this->db->where('id', $id)->update('about_data', $data);
            redirect(base_url('About'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function about_delete($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('about_data');
        redirect(base_url('About'));
    }

    public function about_view($id)
    {
        $id = $this->security->xss_clean($id);
        $data['about_view'] = $this->db->where('id', $id)->get('about_data')->row_array();
        $this->load->view('admin/about/about_view', $data);
    }

    public function about_desc_add()
    {
        $this->load->view('admin/about/about_desc_add');
    }

    public function about_desc_add_act()
    {
        $title  = $_POST['title'];
        $descon = $_POST['descon'];

        if(!empty($title) && !empty($descon)) {

            $data = [
                "title"  => $title,
                "descon" => $descon
            ];

            $this->db->insert('about_desc', $data);
            redirect(base_url('About'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function about_desc_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['about_edit'] = $this->db->where('id', $id)->get('about_desc')->row_array();
        $this->load->view('admin/about/about_desc_edit', $data);
    }

    public function about_desc_edit_act($id)
    {
        $title  = $_POST['title'];
        $descon = $_POST['descon'];

        if(!empty($title) && !empty($descon)){

            $data = [
                "title"  => $title,
                "descon" => $descon
            ];

            $id = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);
            $this->db->where('id', $id)->update('about_desc', $data);
            redirect(base_url('About'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function about_desc_view($id)
    {
        $id = $this->security->xss_clean($id);
        $data['about_view'] = $this->db->where('id', $id)->get('about_desc')->row_array();
        $this->load->view('admin/about/about_desc_view', $data);
    }

    public function about_desc_delete($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('about_desc');
        redirect(base_url('About'));
    }

}