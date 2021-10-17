<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy\Role;
use App\Models\Policy\Permission;
use DB;
use App\Http\Requests\Role\ValidateCreateRole;
use App\Http\Requests\Role\ValidateUpdateRole;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $role;
    private $permission;
    public function __construct(Role $role ,Permission $permission ){
        $this->role = $role;
        $this->permission = $permission;
    }
    public function index()
    {
        $roles = $this->role->paginate(10);
        return view('Backend.Role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissionsParent = $this->permission->where('parent_id',0)->get();
        return view('Backend.Role.add_role',compact('permissionsParent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ValidateCreateRole $validate)
    {
        $role = Role::create([
            'name' =>$request->name,
            'display_name' => $request->display_name,

        ]);

        $role->permissions()->attach($request->permission_id);
        return redirect()->to('/admin/roles');
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
        $permissionsParent = $this->permission->where('parent_id',0)->get();
        $role = Role::find($id);
        $permissionChecked = $role->permissions;
        
        return view('Backend.Role.edit_role',compact('permissionsParent','role','permissionChecked'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,ValidateUpdateRole $validate)
    {
        $role = $this->role->find($id);
        $role->update([
            'name' =>$request->name,
            'display_name' => $request->display_name,

        ]);

        $role->permissions()->sync($request->permission_id);
        return redirect()->to('/admin/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role_id = DB::table('permission_role')->where('role_id',$id)->delete();

        $this->role->find($id)->delete();

        return redirect()->to('/admin/roles');
    }

   
}
