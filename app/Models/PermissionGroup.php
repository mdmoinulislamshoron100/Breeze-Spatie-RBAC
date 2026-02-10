<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    protected $fillable = [
        'name'
    ];
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower(trim($value));
    }
}
