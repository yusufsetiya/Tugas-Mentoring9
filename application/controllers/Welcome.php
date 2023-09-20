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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("users");
	}

	public function index()
	{

		$user = $this->users->view();
		$data = array(
			"user" => $user
		);
		$this->load->view('tugas', $data);
	}

	public function detail($id)
	{
		$user = $this->users->view_by($id);
		$path = base_url('public/' . $user->photo);
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$data = array(
			"image" => $base64,
			"nama" => $user->name,
			"tanggal" => $user->date_birth,
			"tempat" => $user->place_of_birth,
			"alamat" => $user->address,
		);

		$this->load->library('pdf');

		$this->pdf->setPaper(array(0, 0, 640, 382));
		$this->pdf->filename = "Biodata-" . $data['nama'] . ".pdf";
		$this->pdf->load_view('viewCard', $data);
	}

	public function laporan()
	{

		$path = base_url('public/logo.png');
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$data = array(
			"image" => $base64
		);
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('laporan_pdf', $data);
	}
}
