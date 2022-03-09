<?php 
namespace App\Models;
use CodeIgniter\Model;

class ModelMenu extends Model{
    protected $table = "menu";
    protected $primaryKey = 'id_menu';

    protected $allowedFields = ['nama_menu', 'deskripsi_menu', 'foto'];
}
?>