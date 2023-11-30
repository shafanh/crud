<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['karyawan'] = $this->db->get('karyawan')->result();
        //var_dump($data['karyawan']);
		$this->load->view('master/header');
        $this->load->view('home', $data);
        $this->load->view('master/footer');
	}

    public function create()
	{
        if($this->input->server('REQUEST_METHOD') === 'POST'){
            $data = $this->input->post();
            $data['nohp'] = preg_replace("/[^0-9]/", "", $data['nohp']);
            $data['tgllahir']=date('Y-m-d', strtotime($data['tgllahir']));
            $this->db->insert('karyawan', $data);

            redirect('home');
        } else {
		$this->load->view('master/header');
        $this->load->view('create');
        $this->load->view('master/footer');
        }
	}

    public function update($id)
    {
        if($this->input->server('REQUEST_METHOD') === 'POST'){
            $data = $this->input->post();

            $this->db->where('id', $id);
            $this->db->update('karyawan', $data);

            redirect('home');
        } else {  
        $data['item'] = $this->db->get_where('karyawan', ['id'=>$id])->row();  
        $this->load->view('master/header');
        $this->load->view('update', $data);
        $this->load->view('master/footer');
        }
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('karyawan');

        redirect('home');
    }
}
