<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'registration';
    protected $allowedFields = ['id', 'firstname', 'lastname', 'email', 'password', 'contact',
                                'createdon', 'updatedon', 'status', 'rstatus'];
}

?>