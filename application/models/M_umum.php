<?php

class M_umum extends CI_model
{
function hitung($tabel){
    $query=$this->db->get($tabel);
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else{
      return 0;
    }
  }
    public function update_multiple($data, $ids) {
        // Loop untuk memperbarui setiap item berdasarkan ID
        foreach ($ids as $id) {
            $this->db->where('id_detail_surat_jalan', $id);
            $this->db->update('detail_surat_jalan', $data); // 'items' adalah nama tabel
        }
    }
      public function get_id_transaksi_by_ids($ids) {
        $this->db->select('id_transaksi');  // Hanya memilih field 'email'
        $this->db->where_in('id_transaksi', $ids);  // Ambil data berdasarkan ID yang dipilih
        return $this->db->get('transaksi')->result();  // Gantilah 'data_table' dengan nama tabel Anda
    }

    // Fungsi untuk melakukan insert batch untuk email
    public function insert_multiple_id_transaksi($data) {
        return $this->db->insert_batch('detail_surat_jalan', $data);  // Gantilah 'emails_table' dengan nama tabel Anda
    }
 
  function hitung_data($tabel, $kolom = FALSE, $id = FALSE)
  {
      
    $q = $this->db->get_where($tabel, array($kolom => $id)); //ambil satu baris data dengan $kolom=$id
    
    if($q->num_rows()>0)
    {
      return $q->num_rows();
    }
    else{
      return 0;
    }     //kembalikan
  }
  function get_data($tabel)
  {
    $query = $this->db->get($tabel);
    return $query->result();
  }
 
  function ambil_data($tabel, $kolom = FALSE, $id = FALSE)
  {
    if ($id === FALSE) {
      $q = $this->db->get($tabel);  //ambil seluruh data tabel
      return $q->result();    //kembalikan
    }
    $q = $this->db->get_where($tabel, array($kolom => $id)); //ambil satu baris data dengan $kolom=$id
    return $q->row();       //kembalikan
  }

  function hapus($tabel, $kolom, $id)
  {
    $this->db->delete($tabel, array($kolom => $id));
  }
  function set_data($tabel)
  {
    $data = $this->input->post(null, TRUE);
    array_pop($data);
    return $this->db->insert($tabel, $data);
  }
  function input_data($data, $table)
  {
    $this->db->insert($table, $data);
  }
  function UpdateData($tabelName, $data, $where)
  {
    $res = $this->db->update($tabelName, $data, $where);
    return $res;
  }
  function update_data($tabel)
  {
    $data = $this->input->post(null, TRUE);
    $primary = array_slice($data, 0, 1);
    array_shift($data);
    array_pop($data);
    $this->db->where($primary);
    $this->db->update($tabel, $data);
  }

  function hapus_data($tabel, $kolom, $id)
  {
    $this->db->delete($tabel, array($kolom => $id));
    if (!$this->db->affected_rows())
      return (FALSE);
    else
      return (TRUE);
  }
     function get_detail_pengurusan($id)
  {   
     
    $this->db->select('*');
      $this->db->from('detail_pengurusan a');
    $this->db->join('pengurusan b','a.id_pengurusan=b.id_pengurusan','left');
    $this->db->where('a.id_pengurusan',$id);
      
     $query = $this->db->get();
     return $query->result(); 
    }
    function get_detail_transaksi($id)
  {   
     
    $this->db->select('*');
      $this->db->from('detail_transaksi a');
       $this->db->join('pengurusan b','a.id_pengurusan=b.id_pengurusan','left');
    $this->db->where('a.id_transaksi',$id);
      
     $query = $this->db->get();
     return $query->result(); 
    }
    function get_invoice($id)
  {   
     $tahun=$this->session->userdata('tahun'); 
    $this->db->select('*');
      $this->db->from('transaksi a');
    $this->db->join('pelanggan b','a.id_pelanggan=b.id_pelanggan','left');
  $this->db->where('a.id_transaksi',$id);  
     $query = $this->db->get();
     return $query->row(); 
    }
      function get_pelanggan_baru()
  {   

    $this->db->select('*');
      $this->db->from('pelanggan a');  
      $this->db->limit(6);  
         $this->db->order_by('a.tgl_input desc');
     $query = $this->db->get();
     return $query->result(); 
    }
      function get_transaksi()
  {   
     $tahun=$this->session->userdata('tahun'); 
    $this->db->select('*');
      $this->db->from('transaksi a');
    $this->db->join('pelanggan b','a.id_pelanggan=b.id_pelanggan','left');
  $this->db->where('year(a.tgl_transaksi)',$tahun);   
         $this->db->order_by('a.tgl_input desc');
     $query = $this->db->get();
     return $query->result(); 
    }
      function get_payment()
  {   
     $tahun=$this->session->userdata('tahun'); 
    $this->db->select('*');
      $this->db->from('transaksi a');
    $this->db->join('pelanggan b','a.id_pelanggan=b.id_pelanggan','left');
  $this->db->where('year(a.tgl_transaksi)',$tahun);   
  $this->db->where('a.status_payment',1);   
         $this->db->order_by('a.tgl_input desc');
     $query = $this->db->get();
     return $query->result(); 
    }
     function get_sub_tarif_pengurusan($id_pengurusan){
                $query = $this->db->get_where('detail_pengurusan', array('id_pengurusan' => $id_pengurusan));
                  return $query;
        }
   function get_pelanggan_tetap(){
                 $this->db->select('*');
      $this->db->from('pelanggan a');
    $this->db->where('a.jenis_pelanggan',0);
      $query = $this->db->get();
                  return $query->result();
        }
        function get_pelanggan_umum(){
                 $this->db->select('*');
      $this->db->from('pelanggan a');
    $this->db->where('a.jenis_pelanggan',1);
      $query = $this->db->get();
                  return $query->result();
        }
 
        function get_sub_tarif_pelanggan($id_pelanggan){
                $query = $this->db->get_where('tarif_pelanggan', array('id_pelanggan' => $id_pelanggan));
                  return $query;
        }
 
    function laporan_transaksi_semua($dari,$sampai)
  {   
     $tahun=$this->session->userdata('tahun'); 
    $this->db->select('*');
      $this->db->from('transaksi a');
    $this->db->join('pelanggan b','a.id_pelanggan=b.id_pelanggan','left');
    $this->db->join('penerima c','a.id_penerima=c.id_penerima','left');
      $this->db->where('a.tgl_transaksi between "'.$dari.'" and "'.$sampai.'"');    
         $this->db->order_by('a.tgl_input_transaksi asc');
     $query = $this->db->get();
     return $query->result(); 
    }
    function grafik_transaksi()
  {
  $tgl=$this->session->userdata('tahun');
   $sql= $this->db->query("
   
   select distinct
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=1) and (YEAR(tgl_transaksi)='$tgl'))),0) AS 'Januari',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=2) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Februari',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=3) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Maret',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=4) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'April',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=5) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Mei',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=6) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Juni',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=7) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Juli',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=8) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Agustus',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=9) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'September',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=10) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Oktober',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=11) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'November',
   ifnull((SELECT sum(total) FROM (transaksi)  WHERE((Month(tgl_transaksi)=12) and (YEAR(tgl_transaksi)=$tgl))),0) AS 'Desember'
  from transaksi GROUP BY YEAR(tgl_transaksi) 
   
   ");
   
   return $sql;
   
  }
     
}
