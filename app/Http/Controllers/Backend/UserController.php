<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Policy\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\User\ValidateCreateUser;
use App\Http\Requests\User\ValidateUpdateeUser;
use PHPUnit\Exception;
// use DB;

class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    private $user;
    private $role;
    
    
    public function __construct(User $user , Role $role)
    {
        $this->user = $user;
        $this->role = $role;
       
    }
    public function index()
    {
        
        $users  = $this->user->paginate(10);
        
        return view('Backend.users.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $roles = $this->role->all();
        return view('Backend.users.add_user')->with(compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ValidateCreateUser $validate)
    {
        try{
            
        DB::beginTransaction();
            
        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> hash::make($request->password),
        ]);
        
        $user->roles()->attach($request->role_id);
        DB::commit();
        return redirect()->to('admin/user');
        }catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message'.$exception->getMessage().' ' .$exception->getLine());
        }

      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
        $rolesUser = $user->roles;
      
        return view('Backend.users.edit_user',compact('roles','user','rolesUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, ValidateUpdateeUser $validate)
    {
        try{
            
            DB::beginTransaction();
                
            $this->user->find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password'=> hash::make($request->password),
            ]);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->to('admin/user');
            }catch(\Exception $exception){
                DB::rollBack();
                Log::error('Message'.$exception->getMessage().' ' .$exception->getLine());
            }
    
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $roles = Role::all();
        $user = User::find($id);
        $roleId = DB::table('role_user')->where('user_id',$id)->delete();
        
        $this->user->find($id)->delete();
        
        return redirect()->to('admin/user');
    }
}
