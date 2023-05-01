<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UsermanageController extends Controller
{
    public function index()
    {
        $emp= DB::table('users')->get();
        
        return view('admin.user.index',compact('emp'));
    }


    public function create()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employename' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    $data = $request->all();
    $result = new User;
    $result->employename = $data['employename'];
    $result->phone = $data['phone'];
    $result->dob = $data['dob'];
    $result->address = $data['address'];
    $result->isadmin = 1;
    $result->email = $data['email'];
    $result->password =Hash::make($data['password']);
 
     {

     

    }

     $result->save();

        return redirect()->route('use.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $emp=User::get();
        return view('admin.user.index',compact('emp'));
    }



    public function update($id,Request $request)
    {
        $result = User::find($id);
        $data = $request->all();
        $result->employename = $data['employename'];
        $result->phone = $data['phone'];
        $result->dob = $data['dob'];
        $result->address = $data['address'];
        $result->email = $data['email'];
        $result->password = Hash::make($data['password']);
   {


    }

     $result->save();

        return redirect()->route('use.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $emp = User::find($id);
        return view('admin.user.edit',['emp'=> $emp]);
    }
    public function destroy($id)
    {
        $emp=User::find($id);
        $emp->delete();

        return redirect()->route('use.index')
            ->with('success','Deleted successfully');
    }
}