<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends FrontendController {
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
	public function index(){
        // $this->data['all_produk'] = $this->M_products->all_data_kategori()->result();
        // $this->data['hot_trend'] = $this->M_products->hot_trend()->result();
        // $this->data['best_seller'] = $this->M_products->best_seller()->result();
        $this->data['galeri'] = $this->M_karya_galeri->tampil_galeri()->result();
		$this->template_user('v_galeri', $this->data, true);
	}

    // public function all_kategori()
    // {
    //     $this->M_products->all_data_kategori();
    //     $this->template_user()
    // }

}
