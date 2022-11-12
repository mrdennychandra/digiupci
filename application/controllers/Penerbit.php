<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Base_Controller.php';

class Penerbit extends Base_Controller {

    //field tabel
    var $data = [
        'nama' => '',
        'alamat' => '',
        'telpon' => '',
        'email' => ''
    ];

    //nama model
    var $context = 'penerbit';

    function form(){
        $id = $this->uri->segment(3);
        if($id){
            $this->data = $this->penerbit->find_by_id($id);
        }
        $this->load->view('penerbit/form',$this->data);
    }

    function save(){
        $id = $this->input->post('id');
        $this->form_validation->set_rules('nama','nama penerbit','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->data = [
            'nama' =>  $this->input->post('nama'),
            'alamat' =>  $this->input->post('alamat'),
            'telpon' =>  $this->input->post('telpon'),
            'email' =>  $this->input->post('email')
        ];
        if($this->form_validation->run() == FALSE){
            $this->load->view('penerbit/form',$this->data);
        }else{
            if($id == ''){
                $this->penerbit->insert($this->data);
            }else{
                $this->penerbit->update($id,$this->data);
            }
            redirect(base_url('penerbit'));
        }
    }

}