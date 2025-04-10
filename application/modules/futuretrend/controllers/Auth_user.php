<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends FrontendController {
	//
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layouts, ....
     */ 
    protected $data = array();

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        //
        parent::__construct();
        // This function returns the main CodeIgniter object.
        // Normally, to call any of the available CodeIgniter object or pre defined library classes then you need to declare.
        $CI =& get_instance();

        $this->load->model('M_auth_user');
        // $this->load->model('M_news');
        // $this->load->model('M_gallery');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function register()
    {
        $this->form_validation->set_rules('username','Username','required|is_unique[tb_auth.username]');
        $this->form_validation->set_rules('email','Email','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('konfirma_password','Konfirmasi_password','required|trim|matches[password]');

            if($this->form_validation->run() == FALSE){
                $this->template_user('auth_user/v_register',$this->data, true);
            }else{
                $data = $this->M_auth_user->insert_data_user();
                redirect('login');
            }

    }

}
