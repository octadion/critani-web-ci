<?php

class M_materi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('materi');
    }

    public function belajar($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function detail_materi($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function delete_materi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_materi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function kiandongsari()
    {
        $cerita = 'Ki Andong Sari';
        $kelas = 'Cerita Rakyat';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_cerita', $cerita);
        return $this->db->get('materi');
    }



    public function walikidangan()
    {
        $cerita = 'Wali Kidangan';
        $kelas = 'Cerita Rakyat';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_cerita', $cerita);
        return $this->db->get('materi');
    }

  

    public function buayaputihbengawansolo()
    {
        $cerita = 'Buaya Putih Bengawan Solo';
        $kelas = 'Cerita Rakyat';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_cerita', $cerita);
        return $this->db->get('materi');
    }

    

  

    public function radenlancingkusumo()
    {
        $cerita = 'Raden Lancing Kusumo';
        $kelas = 'Cerita Rakyat';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_cerita', $cerita);
        return $this->db->get('materi');
    }

  

   

    public function roro()
    {
        $cerita = 'Roro Jonggrang';
        $kelas = 'Cerita Rakyat';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_cerita', $cerita);
        return $this->db->get('materi');
    }

   

   
}
