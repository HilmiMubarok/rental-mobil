<?php 

class C_Sopir extends Controller{

	public function __construct(){

		$this->addFunction('url');
		if(!isset($_SESSION['login'])) {
			$_SESSION['error'] = 'Anda harus masuk dulu!';
			header('Location: ' . base_url());
		}
		
		$this->addFunction('web');
		$this->addFunction('session');
		$this->req   = $this->library('Request');
		$this->sopir = $this->model('M_Sopir');
	}

	public function index(){
		$data = [
			'aktif' => 'sopir',
			'judul' => 'Data Sopir',
			'data_sopir' => $this->sopir->tampil(),
			'no' => 1
		];
		$this->view('sopir/index', $data);
	}

	public function tambah(){
		if(!isset($_POST['tambah'])) redirect('sopir');

		// proses upload
		$upload_dir = BASEPATH . DS . 'uploads' . DS;
		$asal       = $_FILES['foto']['tmp_name'];
		$ekstensi   = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
		$error      = $_FILES['foto']['error'];
		$img_name   = $this->req->post('nama_sopir');
		$img_name   = $this->req->post('nama_sopir');
		$img_name   = strtolower($img_name);
		$img_name   = str_replace(' ', '-', $img_name);
		$img_name   = $img_name . '-' . time();

		if($error == 0){
			if(file_exists($upload_dir . $img_name . '.' . $ekstensi)) unlink($upload_dir . $img_name . '.' . $ekstensi);
			
			if(move_uploaded_file($asal, $upload_dir . $img_name . '.' . $ekstensi)){
				$data = [
					'nama'     => $this->req->post('nama_sopir'),
					'nomor_hp' => $this->req->post('nomor_hp'),
					'foto'     => $img_name . '.' . $ekstensi,
					'alamat'   => $this->req->post('alamat')
				];

				if($this->sopir->tambah($data)){
					setSession('success', 'Data berhasil ditambahkan!');
					redirect('sopir');
				} else {
					setSession('error', 'Data gagal ditambahkan!');
					redirect('sopir');
				}
			} else die('gagal upload gambar');
		} else die('gambar error');
	}

	public function detail($id){
		if(!isset($id) || $this->sopir->cek($id)->num_rows == 0) redirect('sopir');

		$data = [
			'aktif' => 'sopir',
			'judul' => 'Detail Sopir',
			'sopir' => $this->sopir->detail($id)->fetch_object(),
		];

		$this->view('sopir/detail', $data);
	}

	public function ubah($id){
		if(!isset($id) || $this->sopir->cek($id)->num_rows == 0) redirect('sopir');

		$data = [
			'aktif' => 'sopir',
			'judul' => 'Ubah sopir',
			'sopir' => $this->sopir->detail($id)->fetch_object(),
		];
		$this->view('sopir/ubah', $data);
	}

	public function proses_ubah($id){
		if(!isset($id) || $this->sopir->cek($id)->num_rows == 0 ||!isset($_POST['ubah'])) redirect('sopir');


		$upload_dir        = BASEPATH . DS . 'uploads' . DS;

		$asal              = $_FILES['foto']['tmp_name'];
		$ekstensi          = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
		$error             = $_FILES['foto']['error'];
		
		$img_name          = $this->req->post('nama_sopir');
		$img_name          = $this->req->post('nama_sopir');
		$img_name          = strtolower($img_name);
		$img_name          = str_replace(' ', '-', $img_name);
		$img_name          = $img_name . '-' . time();

		$gambar_sebelumnya = $this->sopir->detail($id)->fetch_object()->foto;

		if ($_FILES['foto']['error'] == 0 ) {
			// Update Foto
			$data = [
				'nama'     => $this->req->post('nama_sopir'),
				'nomor_hp' => $this->req->post('nomor_hp'),
				'foto'     => $img_name . '.' . $ekstensi,
				'alamat'   => $this->req->post('alamat')
			];
		} else {
			$data = [
				'nama'     => $this->req->post('nama_sopir'),
				'nomor_hp' => $this->req->post('nomor_hp'),
				'foto'     => $gambar_sebelumnya,
				'alamat'   => $this->req->post('alamat')
			];
		}


		if($this->sopir->ubah($data, $id)){
			
			if($error == 0){
				if(file_exists($upload_dir . $img_name . '.' . $ekstensi)) unlink($upload_dir . $img_name . '.' . $ekstensi);
			
				if(move_uploaded_file($asal, $upload_dir . $img_name . '.' . $ekstensi)){
					setSession('success', 'Data berhasil diubah!');
					redirect('sopir');
				} else die('gagal upload gambar');
			} else {
				setSession('success', 'Data berhasil diubah!');
				redirect('sopir');
			}
		} else {
			setSession('error', 'Data gagal diubah!');
			redirect('sopir');
		}
	}

	public function hapus($id = null){
		if(!isset($id) || $this->sopir->cek($id)->num_rows == 0) redirect('sopir');

		$gambar	= $this->sopir->detail($id)->fetch_object()->foto;
		if(file_exists(BASEPATH . DS . 'uploads' . DS . $gambar)) unlink(BASEPATH . DS . 'uploads' . DS . $gambar);
		if($this->sopir->hapus($id)){
			setSession('success', 'Data berhasil dihapus!');
			redirect('sopir');
		} else {
			setSession('error', 'Data gagal dihapus!');
			redirect('sopir');
		}
	}
}