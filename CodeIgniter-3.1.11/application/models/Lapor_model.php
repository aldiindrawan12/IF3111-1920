<?php

class Lapor_model extends CI_model
{
	public function getlapor(){
		return $this->db->get('lapor')->result_array(); //ambil seluruh data dari tabel lapor
	}

	public function tambah(){

		//mengambil waktu saat ini
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d H:i:s");

		//mengolah file
		$file = $_FILES['File'];
		if($file = ''){}else{
			$config['upload_path'] = './asset/file';
			$config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('File')){
				echo "gagal";
			}else{
				$file = $this->upload->data('file_name');
			}
		}


		$data = [
			"isi" => $this->input->post('isi'),
			"aspek" => $this->input->post('aspek'),
			"tanggal" => $tanggal,
			"file" => $file
		];

		$this->db->insert('lapor', $data);
	}

	public function detail($id){
		return $this->db->get_where('lapor', array('id'=>$id))->row_array();
	}	

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('lapor');
	}

	public function cari($cari){
		$this->db->like('isi', $cari);
		$this->db->or_like('tanggal', $cari);
		$this->db->or_like('aspek', $cari);

		return $this->db->get('lapor')->result_array();
	}
}