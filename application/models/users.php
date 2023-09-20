<?php

defined('BASEPATH') or exit('No direct script access allowed');
//buatkan model
class Users extends CI_Model
{
    //fungsi untuk menampilkan semua data dari tabel database
    public function view()
    {
        return $this->db->get('users')->result();
    }

    //fungsi untuk menampilkan data berdasarkan id nya
    public function view_by($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users')->row();
    }

    //fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); //load library

        //valdasi username
        if ($mode == "save")
            $this->form_validation->set_rules('input_username', 'Username', 'required|alpha_numeric|min_length[4]|is_unique[users.username]');
        else
            $this->form_validation->set_rules('input_username', 'Username', 'required|alpha_numeric|min_length[4]');

        //valdasi password
        $this->form_validation->set_rules('input_password', 'Password', 'required|min_length[4]');

        //valdasi konfirmasi password
        $this->form_validation->set_rules('input_passconf', 'Konfirmasi Password', 'required|matches[input_password]');

        //valdasi level
        $this->form_validation->set_rules('input_level', 'Level', 'required');

        if ($this->form_validation->run()) //jika validasi benar
            return TRUE; //kembalikan hasilnya dengan TRUE
        else //jika validasi salah
            return FALSE; //kembalikan hasilnya dengan FALSE
    }

    //fungsi untuk melakukan simpan data ke tabel database
    public function save()
    {
        $data = array(
            "username" => $this->input->post('input_username'),
            "password" => md5($this->input->post('input_password')),
            "level" => $this->input->post('input_level')
        );

        $this->db->insert('users', $data); //akses ke model dan masukkan ke database
    }
}
