<?php 

class M_Sopir extends Model {
	public function tampil()
	{
		$query = $this->setQuery('SELECT * FROM tbl_sopir');
		$query = $this->execute();
		return $query;
	}

	public function tambah($data){
		$query = $this->insert('tbl_sopir', $data);
		$query = $this->execute();
		return $query;
	}

	public function ubah($data, $id){
		$query = $this->update('tbl_sopir', $data, ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function cek($id){
		$query = $this->get_where('tbl_sopir', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function detail($id){
		$query = $this->setQuery("SELECT * FROM tbl_sopir WHERE id = $id");
		$query = $this->execute();
		return $query;
	}

	public function hapus($id){
		$query = $this->delete('tbl_sopir', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}
}