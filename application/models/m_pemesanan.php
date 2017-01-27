<?php
class M_pemesanan extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	function data($number,$offset){
		
		return $query = $this->db->get('pemesanan',$number,$offset)->result();		
	}
    function get(){
        return $this->db->get("pemesanan");
    }
public function pesan1($cari)
{
$cari=$this->db->query("select * from pemesanan where username like '%$cari%'  ");
return $cari->result();
}

function filterdata($id_pemesanan){
        return $this->db->get_where('pemesanan',
                          array('id_pemesanan'=>$id_pemesanan))->row();
    }
	function filterdata1($username){
        return $this->db->get_where('pemesanan',
                          array('id_pemesanan'=>$username))->row();
    }
function update2($update_data = array(), $where_update = null) {
		$this->db->where('kode_brg', $where_update);
		$this->db->update('barang', $update_data);
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

		function jumlah_pesanan(){
		return $this->db->get('pemesanan')->num_rows();
	}
	
	function updatedata(){
        $kode_kategori = $this->input->post('kode_kategori');
        $nama_kategori = $this->input->post('nama_kategori');
		
		;
		$data = array(
                'kode_kategori'=>$kode_kategori,
				'nama_kategori'=>$nama_kategori,
        
				
				);
        $this->db->where(array('kode_kategori'=>$kode_kategori));
        $this->db->update('kategori_brg',$data);
    }
	
	function edit_dtBarang($id,$arrayData){
        $this->db->where('kd_barang', $id);
        return $this->db->update($this->table, $arrayData); 
    }
    function get_all()
    {
        $this->db->get('pemesanan');       
    }     

}
?>