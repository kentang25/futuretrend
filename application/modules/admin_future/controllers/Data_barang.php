<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends BackendController {
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

        $this->load->model('M_data_barang');
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

        $this->data['barang'] = $this->M_data_barang->tampil_data()->result();

		$this->template_admin('v_data_barang', $this->data, true);
	}

    public function insert()
    {
        $this->M_data_barang->insert_data();
        redirect('admin/data-barang');
    }

    public function edit($id)
    {
        $where = array('id_barang' => $id);

        $this->data['edit_data'] = $this->M_data_barang->edit_data('tb_data_barang',$where)->result();
        $this->template_admin('v_edit_data', $this->data,true);
    }

}
