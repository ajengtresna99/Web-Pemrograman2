<?php
class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_formMatkul');
    }
    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks'  => $this->input->post('sks')
            ];
    
            $this->load->view('view_data_matakuliah',$data);
        
    }
}
