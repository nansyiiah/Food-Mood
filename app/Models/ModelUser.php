<?php 
namespace App\Models;
use CodeIgniter\Model;

class ModelUser extends Model{
    protected $table = "user";
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['firstname', 'lastname' ,'username', 'password', 'role'];
}
?>