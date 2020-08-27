<?php

class M_mitra extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('mitra');
    }

    public function detail_mitra($nip = null)
    {
        $query = $this->db->get_where('mitra', array('nip' => $nip))->row();
        return $query;
    }

    public function delete_mitra($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_mitra($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
