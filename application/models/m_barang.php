<?php
class M_barang extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	function data($number,$offset){
		return $query = $this->db->get('barang',$number,$offset)->result();		
	}
    function get(){
        return $this->db->get("barang");
    }
	function update2($data = array(), $where_update = null) {
		$this->db->where('kode_brg', $where_update);
		$this->db->update('barang', $data);
	}
	
	function insert() {
        $insert_ruangan = array(
            'kode_brg' => $this->input->post('kode_brg'),
            'serial' => $this->input->post('serial'),
			'kode_kategori' => $this->input->post('kode_kategori'),
            'detail_brg' => $this->input->post('detail_brg'),
			'harga_jual' => $this->input->post('harga_jual'),
			'harga_beli' => $this->input->post('harga_beli'),			
        );
        $insert = $this->db->insert('barang', $insert_ruangan);
        return $insert;
    }
	function pesan() {
        $pesan_brg = array(
            'nama_pemesan' => $this->input->post('nama_pemesan'),
			'username' => $this->input->post('username'),

            'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
            'no_pemesan' => $this->input->post('no_pemesan'),			
            'kode_brg' => $this->input->post('kode_brg'),			
            'jumlah' => $this->input->post('jumlah'),			

        );
        $insert = $this->db->insert('pemesanan', $pesan_brg);
        return $insert;
    }
	   //fungsi untuk menampilkan semua data dari tabel database
 function get_allimage() {
        $this->db->from($this->tabel);
  $query = $this->db->get();
        return $query->result();
 }

    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
	    var $tabel = 'barang';

 
function filterdata($kode_brg){
        return $this->db->get_where('barang',
                          array('kode_brg'=>$kode_brg))->row();
    }

    function bacadata(){
        $baca = $this->db->get('barang');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	    function bacapesanan(){
        $baca = $this->db->get('pemesanan');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
    function deletedata($kode_brg){ 
        $this->db->where('kode_brg', $kode_brg);
        $this->db->delete('barang'); 
    }
	function jumlah_data(){
		return $this->db->get('barang')->num_rows();
	}
		function jumlah_pesanan(){
		return $this->db->get('pemesanan')->num_rows();
	}
	
	function detail_dtBarang($id){
		return $this->db->where('kd_barang',$id)->get('kd_barang')->result_array();
	}
	
	function edit_dtBarang($id,$arrayData){
        $this->db->where('kd_barang', $id);
        return $this->db->update($this->table, $arrayData); 
    }
    function get_all()
    {
        $this->db->get('barang');       
    }     

}
?>