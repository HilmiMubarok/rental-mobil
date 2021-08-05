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
		var_dump($data);
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

		$data = [
			'id_mobil'     => intval($_POST['id_mobil']),
			'harga'        => intval($_POST['harga']),
			'tgl_pinjam'   => str_replace("T", " ", $_POST['tgl_pinjam']),
			'tgl_kembali'  => str_replace("T", " ", $_POST['tgl_kembali']),
			'lama'         => $lama,
			'denda'        => 0,
			'nama_pemesan' => $_POST['nama_pemesan'],
			'hp_pemesan'   => $_POST['hp_pemesan'],
			'foto_pemesan' => $_FILES['foto_pemesan']['name'],
			'asal'         => $_POST['asal'],
			'tujuan'       => $_POST['tujuan'],
			'jarak'        => intval($_POST['jarak']),
			'jenis_bayar'  => $_POST['jenis_bayar'],
			'dengan_sopir' => $_POST['dengan_sopir'],
		];
		// var_dump($lama); 
		// die;

		$save = $this->pesan->tambah($data);
		if($save){
			// die('sukses');
			$data = [
				'status' => 'Di Booking'
			];
			$this->mobil->ubah($data, intval($_POST['id_mobil']));
			setSession('success', 'Data berhasil ditambahkan!');
			redirect('pemesanan/pesan/'.$_POST['id_mobil']);
		} else {
			// die('gagal');
			setSession('error', 'Data gagal ditambahkan!');
			redirect('pemesanan/pesan/'.$_POST['id_mobil']);
		}


	}
}
