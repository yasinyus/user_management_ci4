<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'user_id', 'account_name', 'user_name', 'user_email', 'password', 'level_id', 'status', 'photo_profile', 'user_owner'
    ];

    public function getUsers()
    {             
        $query =  $this->db->table('users')
         ->join('level', 'users.level_id = level.level_id')
         ->get();  
        return $query;
    }

    public function getLevelsers($id_user)
    {             
        $query =  $this->db->table('levels')->where('id_user', $id_user)->get()->getResultArray();  
        return $query;
    }

    public function verify(string $email) {
        $this->builder = $this->db->table('users'); 
        $this->builder->set('status', '1')
                       ->where('user_email', $email)
                       ->update();
      }

}
