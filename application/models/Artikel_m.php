<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('artikel');
        if($id != null) {
            $this->db->where('artikel_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function gethome($id = null)
    {
        $this->db->from('artikel');
        $this->db->order_by('artikel_id', 'desc');
        $this->db->limit(3);
        if($id != null) {
            $this->db->where('artikel_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul_artikel' => $post['judul_artikel'],
            'keterangan' => $post['keterangan'],
            'penulis_artikel' => $post['penulis_artikel'],
            'isi_artikel' => $post['isi_artikel'],
            'image_artikel' => $post['image_artikel'],
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('artikel', $params);
    }
    
    public function edit($post)
    {
        $params = [
            'judul_artikel' => $post['judul_artikel'],
            'keterangan' => $post['keterangan'],
            'penulis_artikel' => $post['penulis_artikel'],
            'isi_artikel' => $post['isi_artikel'],
        ];
        $this->db->where('artikel_id', $post['id']);
        $this->db->update('artikel', $params);
    }

    public function del($id)
	{
		$this->db->where('artikel_id', $id);
		$this->db->delete('artikel');
    }

}
