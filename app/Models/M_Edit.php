<?php 

namespace App\Models;

class M_Edit extends \CodeIgniter\Model
{
    
    protected $table = 'menu';
    public $image = "/images/faces/face28.jpg";

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllMenu()
    {
        return $this->db->table('user')->get()->getResultArray();
        
    }

    public function getDataById($id)
    {
        $this->db->table('user')->where('user_id', $id);
        return $this->db->table('user')->get()->getRowArray();
    }

    public function add($data)
    {
        return $this->db->table('user')->insert($data);
    }

    public function hapus($id)
    {
        $this->db->table('user')->where('user_id', $id);
        return $this->db->table('user')->delete('user_id');
    }

    public function ubah($data, $id)
    {
        return $this->db->table('user')->update($data, ['user_id' => $id]);
    }
    
}
?>