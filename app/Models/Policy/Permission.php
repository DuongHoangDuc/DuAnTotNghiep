<?php

namespace App\Models\Policy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];
    public function permissionsChildrent(){
        return $this->hasMany(Permission::class,'parent_id');
      
    }
}
