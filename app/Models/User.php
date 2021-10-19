<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;
use App\Models\Policy\Role;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles(){
        return $this->belongsTomany(Role::class,'role_user','user_id','role_id');
    }
    public function checkPermissionAccess($permissionCheck){
        // user login co quyền thêm sửa , xóa danh mục và xem menu
        $roles = auth()->user()->roles;
        foreach($roles as $role){
            $permissions = $role->permissions;
            if( $permissions->contains('key_code',$permissionCheck)){
                return true;
            }
          
        }
        return false;
    }
}
