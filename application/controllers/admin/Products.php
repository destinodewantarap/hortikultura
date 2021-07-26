<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_product");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["products"] = $this->m_product->getAll();
        $this->load->view("admin/_partials/head");
        $this->load->view("admin/product/list", $data);
    }

    // public function add()
    // {
    //     $product = $this->m_product; //objek model
    //     $validation = $this->form_validation; //objek form validasi
    //     $validation->set_rules($product->rules()); //terapkan rules

    //     if ($validation->run()) { //melakukan validasi
    //         $product->save(); //simpan data ke database
    //         $this->session->set_flashdata('success', 'Berhasil disimpan'); //tampilkan pesan berhasil
    //     }

    //     $this->load->view("admin/product/new_form"); //tampilkan form ada
    // }

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('admin/products');
       
    //     $product = $this->m_product;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($product->rules());

    //     if ($validation->run()) { //melakukan validasi
    //         $product->update(); //menyimpan data
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["product"] = $product->getById($id); //mengambil data untuk di tampilkan pada form
    //     if (!$data["product"]) show_404(); //jika jika tidak ada data, tampilkan eror 404
        
    //     $this->load->view("admin/product/edit_form", $data); //menampikan form edit
    // }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();
        
    //     if ($this->m_product->delete($id)) {
    //         redirect(site_url('admin/products'));
    //     }
    // }
}