<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model
{
    private $_table = "user";

    public $id;
    public $username;
    public $password;
    public $nama;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],
            
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post(); //ambil data dari form
        $this->id = uniqid(); //membuat id unik
        $this->username = $post["username"]; //isi field username
        $this->password = $post["password"]; //isi field password
        $this->nama = $post["nama"]; //isi field nama
        return $this->db->insert($this->_table, $this); //simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}