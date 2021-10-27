<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;
class AdminController extends Controller
{
    

    public function getLogin()
    {
        if(Auth::user()) {
            return redirect()->route('admin.index');
        }
        return view('backend.login');
    }
    public function login(Request $request){

        $remember = $request->has('remember') ? true  : false;
        if(auth()->attempt([
            'email' => $request->email,
            'password' =>$request->password
        ], $remember)){
            return redirect()->to('/admin/dashboard');
        }
    }
    
    public function getRegis(){
        return view('backend.register');
    }
    public function register(){
        try{
            
            DB::beginTransaction();
                
            $user =  User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password'=> hash::make($request->password),
            ]);
            
            $user->roles()->attach($request->role_id);
            DB::commit();
          
            }catch(\Exception $exception){
                DB::rollBack();
                Log::error('Message'.$exception->getMessage().' ' .$exception->getLine());
            }
            
            return redirect()->to('/admin');
    
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('/admin');//ddawng nhaajp laji a xem thuwr
    }
}
