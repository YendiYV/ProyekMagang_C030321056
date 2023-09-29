<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Cuti extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_cuti');
		$this->load->model('m_user');
		$this->load->model('m_jenis_kelamin');
	}
	
	public function view_operator()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['operator_data'] = $this->m_user->get_operator_by_id($this->session->userdata('id_user'))->result_array();
			$data['operator'] = $this->m_user->get_operator_by_id($this->session->userdata('id_user'))->row_array();
			$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();
			$this->load->view('operator/form_pengajuan_cuti', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}

	}
	
	public function proses_cuti()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$id_user = $this->input->post("id_user");
			$alasan = $this->input->post("alasan");
			$perihal_cuti = $this->input->post("perihal_cuti");
			$mulai = $this->input->post("mulai");
			$berakhir = $this->input->post("berakhir");


			$tahun = date("Y");

			$nomor_urut = mt_rand(1, 9999);
			$nomor_urut_cuti = $nomor_urut."-SP-Cuti-" . $tahun;


			$id_status_cuti1 = 1;
			$id_status_cuti2 = 1;
			$id_status_cuti3 = 1;

			$hasil = $this->m_cuti->insert_data_cuti($nomor_urut_cuti, $id_user, $alasan, $mulai, $berakhir, $id_status_cuti1, $id_status_cuti2, $id_status_cuti3, $perihal_cuti);

			if ($hasil == false) {
				$this->session->set_flashdata('eror_input', 'eror_input');
			} else {
				$this->session->set_flashdata('input', 'input');
			}
			redirect('Form_Cuti/view_operator');
		} else {
			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}

}