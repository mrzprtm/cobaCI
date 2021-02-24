<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function simpan()
	{
		$nobp = $this->input->post('nobp');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');
		$this->db->query("insert into tbl_mahasiswa values('$nobp','$nama','$jurusan','$alamat')");
		redirect('', 'refresh');
	}

	public function tampil()
	{
		$d['data'] = $this->db->query("select* from tbl_mahasiswa");
		$this->load->view('tampil', $d);
	}
}
