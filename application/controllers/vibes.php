<?php
class vibes extends CI_Controller
{
function __construct(){
        parent::__construct();
        $this->load->helper('url');}

 public function index()
 {
 $this->load->view('crite');
 }
 public function cetak()
 {

$this->form_validation->set_rules('nama', 'nama',
'required|min_length[3]', [
 'required' => 'nama Harus diisi',
 'min_lenght' => 'nama terlalu pendek'
 ]);
 $this->form_validation->set_rules('nis', 'nis',
'required|min_length[3]', [
 'required' => 'nis Harus diisi',
 'min_lenght' => 'nis terlalu pendek'
 ]);


 $this->form_validation->set_rules('kelas', 'kelas',
'required|min_length[3]', [
 'required' => 'kelas Harus diisi',
 'min_lenght' => 'kelas terlalu pendek'
 ]);


 $this->form_validation->set_rules('tempat', 'tempat',
'required|min_length[3]', [
 'required' => 'tempat lahir Harus diisi',
 'min_lenght' => 'tempat lahir terlalu pendek'
 ]);


 $this->form_validation->set_rules('alamat', 'alamat',
'required|min_length[3]', [
 'required' => 'alamat Harus diisi',
 'min_lenght' => 'alamat terlalu pendek'
 ]);


 if ($this->form_validation->run() != true) {
 $this->load->view('crite');
 } else {
 $data = [
 'nama' => $this->input->post('nama'),
 'nis' => $this->input->post('nis'),
 'kelas' => $this->input->post('kelas'),
 'tanggal' => $this->input->post('tanggal'),
 'tempat' => $this->input->post('tempat'),
 'alamat' => $this->input->post('alamat'),
 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
 'agama' => $this->input->post('agama'),

 ];
 $this->load->view('clover', $data);
 }

 }
}