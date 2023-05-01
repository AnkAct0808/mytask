<?php

namespace App\Http\Controllers;
use App\Models\userastask;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsercheackassigntaskController extends Controller
{
    public function index()
    {
        $cap= DB::table('asignpros')->get();
        
        return view('admin.userasigncheack.index',compact('cap'));
    }


    public function create()
    {
        $cap = userastask::all();
        return view('admin.userasigncheack.add',compact('cap'));
    }

    public function store(Request $request)
    {
    
    $data = $request->all();
    $result = new userastask;
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
        $cap=userastask::get();
        return view('admin.userasigncheack.index',compact('cap'));
    }



    public function update($id,Request $request)
    {
        $result = userastask::find($id);
        $data = $request->all();
        $result->employenames = $data['employenames'];
        $result->projectname = $data['projectname'];
        $result->task = $data['task'];
        $result->assigndate = $data['assigndate'];
        $result->completedate = $data['completedate'];
       
   {


    }

     $result->save();

        return redirect()->route('usercheackpro.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $cap =userastask::find($id);
       
        return view('admin.userasigncheack.edit',['cap'=> $cap]);
    }
    public function destroy($id)
    {
        $cap=userastask::find($id);
        $cap->delete();

        return redirect()->route('usercheackpro.index')
            ->with('success','Deleted successfully');
    }
}
