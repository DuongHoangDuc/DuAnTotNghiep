<?php

namespace App\Models\Policy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    public function permissions(){
        return $this->belongsTomany(Permission::class,'permission_role' ,'role_id','permission_id');
    }
}
