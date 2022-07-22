<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_name';
    protected $allowedFields    = [
        'user_id', 'user_name', 'user_email', 'password', 'level_id', 'status'
    ];

    public function generateCode($user_id)
    {
        $code=rand(100000,999999);
        $item=array(
            'user_id'       => $user_id,
            'code'          => $code,
            'is_expire'     => 'no',
            'expire_time'   => date('Y-m-d h:i:s')
        );
        $this->db->table('user_code')->insert($item);
        return $code;
    }

    public function authenticateCode($user_id, $code)
    {
        $code=$this->db->table('user_code')
                    ->where('user_id', $user_id)
                    ->where('code', $code)
                    ->where('is_expire','no')
                    ->get()
                    ->getResultArray();
        if($code)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function expireCode($user_id)
    {
        $this->db->query("update user_code set is_expire='yes' where user_id=".$user_id);
    }
    public function expireCodeByTime()
    {
        $this->db->query("update user_code set is_expire='yes' WHERE expire_time < date_sub(now(), interval 30 minute)");
    }
}
