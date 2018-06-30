<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Website;
use App\User;
use Auth,Redirect,Response;


class UserController extends DashboardController
{
    public function index()
    {
        $loggedin = Auth::user()->website['id'];
        $users = Website::find($loggedin)->users_all;
        return view('admin/users/users', compact('users'));
    }

    public function show(){
        
        
        $item = Auth::user();
        return view('admin/users/user-edit', compact('item'));
        
    }

    public function edit($id)
    {
        $item = User::find($id);
        $websitesall = Website::get();
        return view('admin/users/users-edit', compact('item','websitesall'));
    }

    public function addwebsite(Request $request, $id){
        
        $item = User::find($id);
        
        if ($item->websites()->get()->contains($request->websites))
            {
            
            return Redirect::back()->with('error-message', 'User allready added to this website.');
          
            } else {

            $item->websites()->attach($request->websites);

            return Redirect::back()->with('success-message', 'User added to website successfully.');

            }

        
    }

    public function deletewebsite($user_id, $website_id){
        $user = User::find($user_id);
        $user->websites()->detach($website_id);
       

        return Response::json(array('status' => 'success'));
    }

    public function swichwebsite(Request $request, $id){
        $user = Auth::user();
        $user->website_id = $id;
        $user->save();
        return Redirect::back()->with('success-message', 'Swiched website.');
    }

}
