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

        // $base_url = base_url('admin_future/data_barang/index');
        // $per_page = 3;
        // // for ($i = 1; $i <= 5; $i++) {
        // //     echo "Segment $i: " . $this->uri->segment($i) . "<br>";
        // // }
        
        // $uri_segment = 4;

        // $total_rows = $this->M_data_barang->get_count();
        // // var_dump($total_rows);
        // // exit();
        // $offset     = $this->uri->segment($uri_segment,0);
        // // var_dump($offset);
        // // exit();

        // $this->data['barang'] = $this->M_data_barang->get($per_page,$offset);

        // $pag = $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);
        // var_dump($pag);
        // exit();
		// $this->template_admin('v_data_barang', $this->data, true);

        $this->data['barang'] = $this->M_data_barang->tampil_data()->result();
        $this->template_admin('v_data_barang',$this->data,true);
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

    public function update($id)
    {
        $this->M_data_barang->update_data($id);
        redirect('admin/data-barang');
    }

    public function delete($id)
    {
        $this->M_data_barang->delete_data($id);
        redirect('admin/data-barang');
    }

    public function detail($id)
    {
        $data_detail = $this->M_data_barang->detail_data($id);
        $this->data['detail'] = $data_detail;

            $this->template_admin('v_detail',$this->data,true);
    }

}
