<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module_operation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'module_id','operation','route',
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
