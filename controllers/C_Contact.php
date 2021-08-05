<?php

class C_Contact extends Controller {

	public function __construct(){
		$this->addFunction('url');

		// $this->mobil = $this->model('M_Mobil');
		// $this->home = $this->model('M_Home');
	}

	public function index()
	{
		$data = [];
		$this->view('frontend/contact', $data);
	}
}