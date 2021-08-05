<?php 

class M_Pesanan extends Model{
	public function tambah($data){
		$query = $this->insert('tbl_pesanan', $data);
		$query = $this->execute();
		return $query;
	}

	public function lihat(){
		//$query = $this->setQuery("SELECT tbl_pesanan.id, tbl_pemesan.nama AS nama_pemesan, tbl_mobil.nama AS nama_mobil, tbl_jenis_bayar.jenis_bayar FROM tbl_pesanan INNER JOIN tbl_pemesan ON tbl_pesanan.id_pemesan = tbl_pemesan.id INNER JOIN tbl_mobil ON tbl_pesanan.id_mobil = tbl_mobil.id INNER JOIN tbl_jenis_bayar ON tbl_pesanan.id_jenis_bayar = tbl_jenis_bayar.id");
		$query = $this->setQuery("SELECT tbl_pesan.id, tbl_pesan.id_mobil, tbl_pesan.nama_pemesan, tbl_pesan.jenis_bayar, tbl_pesan.dengan_sopir, tbl_mobil.nama AS nama_mobil FROM tbl_pesan INNER JOIN tbl_mobil ON tbl_pesan.id_mobil = tbl_mobil.id");
		$query = $this->execute();
		return $query;
	}

	public function lihat_id($id){
		$query = $this->get_where('tbl_pesanan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function ubah($data, $id){
		$query = $this->update('tbl_pesanan', $data, ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function cek($id){
		$query = $this->get_where('tbl_pesan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function hapus($id){
		$query = $this->delete('tbl_pesanan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function detail($id){
		$query = $this->setQuery("SELECT tbl_pesan.id, tbl_pesan.id_mobil, tbl_pesan.harga, tbl_pesan.tgl_pinjam, tbl_pesan.tgl_kembali, tbl_pesan.lama, tbl_pesan.denda, tbl_pesan.nama_pemesan, tbl_pesan.hp_pemesan, tbl_pesan.foto_pemesan, tbl_pesan.asal, tbl_pesan.tujuan, tbl_pesan.jarak, tbl_pesan.jenis_bayar, tbl_pesan.dengan_sopir, tbl_mobil.nama AS nama_mobil FROM tbl_pesan INNER JOIN tbl_mobil ON tbl_pesan.id_mobil = tbl_mobil.id WHERE tbl_pesan.id = $id");
		$query = $this->execute();
		return $query;
	}
}