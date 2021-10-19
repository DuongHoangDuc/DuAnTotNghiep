<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Policy\Permission;
use App\Http\Controllers\Controller;
use App\Http\Requests\permission\ValidateCreatePermission;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.permissions.add_permission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ValidateCreatePermission $validate)
    {
       $permession = Permission::create([
          'name' => $request->module_parent,
          'display_name' => $request->module_parent,
          'parent_id' => 0
       ]);
       foreach($request->mudule_childrent as $value){
        Permission::create([
            'name' => $value.'_'.$request->module_parent ,
            'display_name' => $value .'_'. $request->display_name ,
            'parent_id' => $permession->id,
            'key_code' => $value.'_'.$request->module_parent 
         ]);
       }
       return redirect()->to('/admin/permission/create-permission');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
