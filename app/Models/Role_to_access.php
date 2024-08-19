<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_to_access extends Model
{
    use HasFactory;
    protected $fillable = [
        'module_id','role_id','module_operation_id',
    ];
}
