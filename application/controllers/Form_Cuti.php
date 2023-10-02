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
		if ($this->session->userdata('logged_in') == true && $this->session->userdata('id_user_level') == 1) {
			// Menggunakan ID pengguna dari sesi saat ini
			$id_user = $this->session->userdata('id_user');
			
			// Hitung total cuti dalam setahun
			$total_hari_cuti = $this->m_cuti->hitung_total_hari_cuti_dalam_setahun($id_user);

			if ($total_hari_cuti >= 12) {
				// Total cuti dalam setahun lebih dari atau sama dengan 12, Anda dapat mengarahkan pengguna ke tampilan lain
				redirect('operator/dashboard');
			} else {
				// Total cuti dalam setahun kurang dari 12, muat tampilan pengajuan cuti
				$data['operator_data'] = $this->m_user->get_operator_by_id($this->session->userdata('id_user'))->result_array();
				$data['operator'] = $this->m_user->get_operator_by_id($this->session->userdata('id_user'))->row_array();
				$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();
				$this->load->view('operator/form_pengajuan_cuti', $data);
			}
		} else {
			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}


	
	public function proses_cuti()
	{
		if ($this->session->userdata('logged_in') == true && $this->session->userdata('id_user_level') == 1) {
			// Menggunakan ID pengguna dari sesi saat ini
			$id_user = $this->input->post("id_user");
			$alasan = $this->input->post("alasan");
			$perihal_cuti = $this->input->post("perihal_cuti");
			$mulai = $this->input->post("mulai");
			$berakhir = $this->input->post("berakhir");

			// Hitung total cuti sebelumnya
			$total_cuti_sebelumnya = $this->m_cuti->hitung_total_hari_cuti_dalam_setahun($id_user);

			// Hitung total cuti yang diajukan
			$total_cuti_diajukan = $this->hitung_total_cuti($mulai, $berakhir);

			// Hitung total cuti dalam setahun (total cuti sebelumnya + total cuti yang diajukan)
			$total_hari_cuti = $total_cuti_sebelumnya + $total_cuti_diajukan;

			if ($total_hari_cuti > 12) {
				// Total cuti dalam setahun lebih dari atau sama dengan 12, Anda tidak dapat mengajukan cuti
				$this->session->set_flashdata('cuti_limit_exceeded', 'cuti_limit_exceeded');
				redirect('Form_Cuti/view_operator');
			}

			$tahun = date("Y");

			$nomor_urut = mt_rand(1, 9999);
			$nomor_urut_cuti = $nomor_urut . "-SP-Cuti-" . $tahun;

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

	// Fungsi untuk menghitung total cuti berdasarkan tanggal mulai dan berakhir
	private function hitung_total_cuti($mulai, $berakhir)
	{
		$mulai_timestamp = strtotime($mulai);
		$berakhir_timestamp = strtotime($berakhir);
		
		$total_cuti = 0;

		while ($mulai_timestamp <= $berakhir_timestamp) {
			// Memeriksa apakah hari ini bukan Sabtu (6) atau Minggu (0)
			if (date("N", $mulai_timestamp) != 6 && date("N", $mulai_timestamp) != 7) {
				$total_cuti++;
			}
			$mulai_timestamp = strtotime("+1 day", $mulai_timestamp);
		}

		return $total_cuti;
	}



}