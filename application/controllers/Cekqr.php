 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekqr extends CI_Controller {
 function view($id)
    {

        $data = array(
            'judul' => 'Detail Pengurusan',
            'id' => $id,
            'a' => $this->m_umum->get_invoice($id),
            'dt_detail_transaksi' => $this->m_umum->get_detail_transaksi($id),
            'c' => $this->m_umum->ambil_data('profil','id_profil',1),
        );
        $this->load->view('admin/invoice_print', $data);
    }
}