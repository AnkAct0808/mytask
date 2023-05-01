<?php

namespace App\Http\Controllers;
use App\Models\asignpro;
use App\Models\usermanage;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsignprojectController extends Controller
{
    public function index()
    {
        $ap= DB::table('asignpros')->get();
        
        return view('admin.Asigntask.index',compact('ap'));
    }


    public function create()
    {
        $ap = User::all();
        return view('admin.Asigntask.add',compact('ap'));
    }

    public function store(Request $request)
    {
    
    $data = $request->all();
    $result = new asignpro;
    $result->employenames = $data['employenames'];
    $result->projectname = $data['projectname'];
    $result->task = $data['task'];
    $result->assigndate = $data['assigndate'];
    $result->completedate = $data['completedate'];
   

     $result->save();

        return redirect()->route('admintask.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $ap=asignpro::get();
        return view('admin.Asigntask.index',compact('ap'));
    }



    public function update($id,Request $request)
    {
        $result = asignpro::find($id);
        $data = $request->all();
        $result->employenames = $data['employenames'];
        $result->projectname = $data['projectname'];
        $result->task = $data['task'];
        $result->assigndate = $data['assigndate'];
        $result->completedate = $data['completedate'];
       
   {


    }

     $result->save();

        return redirect()->route('admintask.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $ap =asignpro::find($id);
        $ap = usermanage::all();
        return view('admin.Asigntask.edit',['ap'=> $ap]);
    }
    public function destroy($id)
    {
        $ap=asignpro::find($id);
        $ap->delete();

        return redirect()->route('admintask.index')
            ->with('success','Deleted successfully');
    }
}