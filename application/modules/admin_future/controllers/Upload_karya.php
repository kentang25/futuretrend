<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_karya extends BackendController {
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

        $this->load->model('M_karya_galeri');
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
	public function index() {
        $this->data['karya'] = $this->M_karya_galeri->tampil_karya()->result();
		$this->template_admin('v_karya', $this->data, true);
	}

    public function insert()
    {
        $this->M_karya_galeri->insert_data();
        redirect('admin/karya');
    }

    public function delete($id)
    {
        $this->M_karya_galeri->delete_karya($id);
        redirect('admin/karya');
    }

}
