<?php
class Unggah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('formulir_unggah', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './unggah/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['max_width']  = '1900';
		$config['max_height']  = '1200';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('formulir_unggah', $error);
		}
		else
		{
			$data = array('unggah_data' => $this->upload->data());

			$this->load->view('sukses_unggah', $data);
		}
	}
}
?>
