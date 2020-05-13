<?php

include 'model_pegawai.php';
include 'view_pegawai.php';

class controllerPegawai {

	function index() {
		$data['nama'] = modelPegawai->getNama();
		$data['nik'] = modelPegawai->getNik();
		viewPegawai->index($data);
	}
}