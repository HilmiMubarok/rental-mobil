<?php

class C_Home extends Controller {

    public function __construct(){
		$this->addFunction('url');
		// if(!isset($_SESSION['login'])) {
		// 	$_SESSION['error'] = 'Anda harus masuk dulu!';
		// 	header('Location: ' . base_url());
		// }

		// $this->addFunction('web');
		$this->mobil = $this->model('M_Mobil');
		// $this->pemesan = $this->model('M_Pemesan');
		// $this->pesanan = $this->model('M_Pesanan');
		$this->home = $this->model('M_Home');
	}

    public function index()
    {
        $data = [
            'aktif' => 'mobil',
            'judul' => 'Data Mobil',
            'data_mobil' => $this->mobil->tampil(),
            'no' => 1
        ];
        // var_dump($data); die;
        $this->view('frontend/home', $data);
    }

}

?>