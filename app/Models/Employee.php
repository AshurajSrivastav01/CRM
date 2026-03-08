<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillables = [
        'user_id',
        'company_id',
        'role_id',
        'warehouse_id',
        'first_name', 
        'last_name',
        'email',
        'phone',
        'password',
        'status',
        'created_at',
        'updated_at'
    ];
}
