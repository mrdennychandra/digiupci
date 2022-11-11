<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Base_Controller extends CI_Controller {

    protected $data = [];
    protected $context = null;

    public function __construct(){
        parent::__construct();
        $this->load->model("{$this->context}_model",$this->context);
    }

    public function index(){
        $data['records'] = $this->{$this->context}->find_all();
        $this->load->view("{$this->context}/index",$data);
    }

    //must be implemented
    protected abstract function form();
    //must be implemented
    protected abstract function save();

    //menampilkan detail data
    function detail(){
        $id = $this->uri->segment(3);
        $data = $this->{$this->context}->find_by_id($id);
        $this->load->view("{$this->context}/detail",$data);
    }

    //menghapus data
    function hapus(){
        $id = $this->uri->segment(3);
        $this->{$this->context}->delete($id);
        redirect(base_url($this->context));
    }

}