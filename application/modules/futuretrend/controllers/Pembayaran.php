<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends FrontendController {
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

        $this->load->model('M_pembayaran');
        $this->load->model('M_auth_user');
        $this->load->model('M_cart');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function order() {
        $get_id = $this->M_auth_user->get_id_user();

        $cart_item = $this->M_cart->tampil_cart($get_id)->result();

        $subtotal = 0;

        foreach($cart_item as $key => $c_item){
            $subtotal += $c_item->jumlah * $c_item->harga;
        }

        $subtotal;

        $order_data = array(
            'id_user'    => $get_id,
            'subtotal'   => $subtotal,
            'status'     => 'pending',
            'jumlah'     => 1,
            'created_at' => date('Y-m-d H:i:s')
        );

        $order_id = $this->M_pembayaran->created_order($order_data);

        $this->data['order_items'] = $this->M_cart->tampil_cart($get_id)->result();

        $this->template_user('v_pembayaran', $this->data,true);

    }

    public function transaksi($id_order)
    {
        $get_id_order   = $this->M_pembayaran->get_id_order($id_order);

        $get_order      = $this->M_pembayaran->get_order($get_id_order)->result();

            $subtotal = 0;
            foreach($get_order as $key => $o_order){
                $subtotal += $o_order->jumlah * $o_order->subtotal;
            }

            $subtotal;

        $status_pembayaran = 'success';
        

        $data_transaksi = array(
            'id_order'          => $get_id_order->id_order,
            'total_harga'       => $subtotal,
            'status_pembayaran' => $status_pembayaran,
            'metode_pembayaran' => 'paypal',
            'created_at'        => date('Y-m-d H:i:s')
        );

        // var_dump($data_transaksi);
        // exit();

        $transaksi = $this->M_pembayaran->created_transaksi($data_transaksi);
        // var_dump($transaksi);
        // exit();

        if($transaksi){
            $this->M_pembayaran->update_status_order($id_order);

            $id_user = $this->M_auth_user->get_id_user();
            $this->M_pembayaran->clear_cart($id_user);

        }
    }


}