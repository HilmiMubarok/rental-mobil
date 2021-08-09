<?php

class C_Pemesanan extends Controller {

	public function __construct(){
		$this->addFunction('url');
		$this->addFunction('session');
		$this->mobil = $this->model('M_Mobil');
		$this->pesan = $this->model('M_Pesan');
		$this->req   = $this->library('Request');
		// $this->mobil = $this->model('M_Mobil');
		// $this->home = $this->model('M_Home');
	}

	public function index()
	{
		$data = [
            'aktif' => 'mobil',
            'judul' => 'Data Mobil',
            'data_mobil' => $this->mobil->tampil(),
            'no' => 1
        ];
		$this->view('frontend/pemesanan', $data);
	}

	public function pesan($id)
	{
		$data = [
			'data_mobil' => $this->mobil->cek($id)->fetch_object()
		];

		$this->view('frontend/proses_pesan', $data);
	}

	public function detail($id)
	{
		$data = [
			'data_mobil' => $this->pesan->detail($id)->fetch_object()
		];
		$this->view('frontend/detail_pesan', $data);
	}

	public function proses_pesan()
	{
		if (isset($_POST['dengan_sopir'])) {
			$_POST['harga']+= 100000;
			$_POST['dengan_sopir'] = "ya";
		} else {
			$_POST['dengan_sopir'] = "tidak";
		}

		$tglp = strtok($_POST['tgl_pinjam'], "T");
		$tglk = strtok($_POST['tgl_kembali'], "T");
		$lama = (new DateTime($tglp))->diff(new DateTime($tglk))->days;

		$upload_dir = BASEPATH . DS . 'uploads' . DS;
		$asal       = $_FILES['foto_pemesan']['tmp_name'];
		$ekstensi   = pathinfo($_FILES['foto_pemesan']['name'], PATHINFO_EXTENSION);
		$error      = $_FILES['foto_pemesan']['error'];
		$img_name   = $this->req->post('nama_pemesan');
		$img_name   = $this->req->post('nama_pemesan');
		$img_name   = strtolower($img_name);
		$img_name   = str_replace(' ', '-', $img_name);
		$img_name   = $img_name . '-' . time();
		if($error == 0){
			if(file_exists($upload_dir . $img_name . '.' . $ekstensi)) unlink($upload_dir . $img_name . '.' . $ekstensi);
			
			if(move_uploaded_file($asal, $upload_dir . $img_name . '.' . $ekstensi)){
				$data = [
					'id_mobil'     => intval($_POST['id_mobil']),
					'harga'        => intval($_POST['harga']),
					'tgl_pinjam'   => str_replace("T", " ", $_POST['tgl_pinjam']),
					'tgl_kembali'  => str_replace("T", " ", $_POST['tgl_kembali']),
					'lama'         => $lama,
					'denda'        => 0,
					'nama_pemesan' => $_POST['nama_pemesan'],
					'hp_pemesan'   => $_POST['hp_pemesan'],
					'foto_pemesan' => $img_name . '.' . $ekstensi,
					'asal'         => $_POST['asal'],
					'tujuan'       => $_POST['tujuan'],
					'jarak'        => intval($_POST['jarak']),
					'jenis_bayar'  => $_POST['jenis_bayar'],
					'dengan_sopir' => $_POST['dengan_sopir'],
				];

				$save = $this->pesan->tambah($data);
				if($save){
					// die('sukses');
					$data = [
						'status' => 'Di Booking'
					];
					$this->mobil->ubah($data, intval($_POST['id_mobil']));
					setSession('success', 'Data berhasil ditambahkan!');
					redirect('pemesanan/detail/'.$_POST['id_mobil']);
				} else {
					// die('gagal');
					setSession('error', 'Data gagal ditambahkan!');
					redirect('pemesanan/detail/'.$_POST['id_mobil']);
				}

			} else die('gagal upload gambar');
		} else die('gambar error');
		
		// var_dump($lama); 
		// die;

		


	}
}
