<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends FrontendController {
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

        $this->load->model('M_cart');
        $this->load->model('M_auth_user');
        // $this->load->model('M_gallery');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */


    public function index()
    {
        $id_user = $this->M_auth_user->get_id_user();

        $this->data['cart'] = $this->M_cart->tampil_cart($id_user)->result();
        $this->template_user('v_cart',$this->data,true);
    }

	public function addCart($id_brg)
    {
        $barang = $this->M_cart->find($id_brg);

        // $qty = $this->input->post('qty');
        //     var_dump($qty);
        //     exit();
        // $qty = 1;
        if($qty = $this->input->post('qty')){
            $qty = $this->input->post('qty');
            // var_dump($qty);
            // exit();
        }

        $data = array(
            'id'    => $barang->id_barang,
            'name'  => $barang->nama_brg,
            'price' => $barang->harga,
            'qty'   => $qty
        );

        $this->cart->insert($data);

        $get_user = $this->M_auth_user->get_id_user();

        $data_cart = array(
            'id_user'       => $get_user,
            'id_barang'     => $data['id'],
            'nama_barang'   => $data['name'],
            'harga'         => $data['price'],
            'jumlah'        => $data['qty']
        );

        if($this->M_cart->insert_data_cart($data_cart)){
            redirect('cart');
        }

    }

    public function update_qty()
    {
        $id_barang  = $this->input->post('id_barang');
        $harga      = $this->input->post('harga');
        $jumlah     = $this->input->post('jumlah');

        $this->M_cart->update_cart_qty($id_barang,$jumlah);

            $cart_item = $this->M_cart->get_cart();
            $total = 0;

        foreach($cart_item as $item){
            $total =+ $item->harga * $item->jumlah;
        }

        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'total' => $total
        ]);
    }


}
