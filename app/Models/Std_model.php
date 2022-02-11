<?php

namespace App\Models;

use CodeIgniter\Model;

class Std_model extends Model
{
    protected $table = 'std_form';
    protected $allowedFields = ['id', 'std_name', 'dob', 'address', 'mobile_num', 'email',
    'o-level', 'a-level', 'bachlor', 'master', 'doctorate', 'passport', 'cnic', 'ielts_test'];
}

?>