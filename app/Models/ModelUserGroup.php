<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUserGroup extends Model
{
    protected $table            = 'levels';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'id', 'level_name', 'id_user'
    ];

}
