<?php 
namespace App\Models;
use CodeIgniter\Model;

class M_Menu extends Model{
    protected $table = 'menu';

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllMenu()
    {
        return $this->db->table('menu')->get()->getResultArray();
        
    }

    public function getDataById($id)
    {
        $this->db->table('menu')->where('id_menu', $id);
        return $this->db->table('menu')->get()->getRowArray();
    }

    public function add($data)
    {
        return $this->db->table('menu')->insert($data);
    }

    public function hapus($id)
    {
        return $this->db->table('menu')->delete(['id_menu' => $id]);
    }

    public function ubah($data, $id)
    {
        return $this->db->table('menu')->update($data, ['id_menu' => $id]);
    }

    // public function getMenu($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     }

    //     $this->db->table('menu')->where('id_menu', $id);
    //     return $this->db->table('menu')->get()->getRowArray();
    // }
}
?>