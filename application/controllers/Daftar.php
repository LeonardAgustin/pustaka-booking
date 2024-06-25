<?php
class daftar extends CI_Controller
{
public function index()
{
$this->load->view('view-form-daftar');
}
public function cetak()
{
    $this->form_validation->set_rules('NIM', 'NIM daftar',
'required|min_length[3]', [
'required' => 'NIM daftar Harus diisi',
'min_lenght' => 'NIM terlalu pendek'
]);

$this->form_validation->set_rules('Nama', 'Nama daftar',
'required|min_length[3]', [
'required' => 'Nama Daftar Harus diisi',
'min_lenght' => 'Nama terlalu pendek'
]);

$this->form_validation->set_rules('Tanggal Lahir', 'Tanggal Lahir daftar',
'required|min_length[3]', [
'required' => 'Tanggal Lahir daftar Harus diisi',
'min_lenght' => 'Tanggal Lahir terlalu pendek'
]);

$this->form_validation->set_rules('Tempat Lahir', 'Tempat Lahir daftar',
'required|min_length[3]', [
'required' => 'Tempat Lahir daftar Harus diisi',
'min_lenght' => 'Tempat Lahir terlalu pendek'
]);

$this->form_validation->set_rules('Alamat', 'Alamat daftar',
'required|min_length[3]', [
'required' => 'Alamat daftar Harus diisi',
'min_lenght' => 'Alamat terlalu pendek'
]);

if ($this->form_validation->run() != true) {
$this->load->view('view-form-daftar');
} else {
$data = [
'NIM' => $this->input->post('NIM'),
'Nama' => $this->input->post('Nama'),
'Tanggal Lahir' => $this->input->post('Tanggal Lahir'),
'Tempat Lahir' => $this->input->post('Tempat Lahir'),
'Alamat' => $this->input->post('Alamat')
];
$this->load->view('view-data-daftar', $data);
}
}
}