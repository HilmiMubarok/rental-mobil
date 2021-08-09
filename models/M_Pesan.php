<?php

class M_Pesan extends Model{

	public function tambah($data){
		// var_dump($data); die;
		$query = $this->insert('tbl_pesan', $data);
		$query = $this->execute();
		// var_dump($query); die;
		return $query;
	}

	public function lihat(){
		$query = $this->setQuery("SELECT tbl_pesanan.id, tbl_pemesan.nama AS nama_pemesan, tbl_mobil.nama AS nama_mobil, tbl_jenis_bayar.jenis_bayar FROM tbl_pesanan INNER JOIN tbl_pemesan ON tbl_pesanan.id_pemesan = tbl_pemesan.id INNER JOIN tbl_mobil ON tbl_pesanan.id_mobil = tbl_mobil.id INNER JOIN tbl_jenis_bayar ON tbl_pesanan.id_jenis_bayar = tbl_jenis_bayar.id");
		$query = $this->execute();
		return $query;
	}

	public function lihat_id($id){
		$query = $this->get_where('tbl_pesan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function ubah($data, $id){
		$query = $this->update('tbl_pesanan', $data, ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function cek($id){
		$query = $this->get_where('tbl_pesanan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function hapus($id){
		$query = $this->delete('tbl_pesanan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function detail($id){
		$query = $this->setQuery("SELECT tbl_pesan.*, tbl_mobil.* FROM tbl_pesan  INNER JOIN tbl_mobil ON tbl_pesan.id_mobil = tbl_mobil.id WHERE tbl_mobil.id = $id");
		$query = $this->execute();
		return $query;
	}
}
