<?php

namespace App\Http\Controllers;
use App\Models\cheacktodo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cheacktodoController extends Controller
{
    public function index()
    {
        $ctd= DB::table('todos')->get();
        
        return view('admin.admintodocheck',compact('ctd'));
    }


    public function create()
    {
        return view('admin.cheacktodo.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'protask' => 'required',
            'priority' => 'required',
            'level' => 'required',
            'assign' => 'required',
            'cdate' => 'required',
            'tname' => 'required',
            'dline' => 'required',
            'notes' => 'required',
        ]);
    $data = $request->all();
    $result = new cheacktodo;
    $result->protask = $data['protask'];
    $result->priority = $data['priority'];
    $result->level = $data['level'];
    $result->assign = $data['assign'];
    $result->cdate = $data['cdate'];
    $result->tname = $data['tname'];
    $result->dline =$data['dline'];
    $result->notes =$data['notes'];
    $result->user_id = Auth::user()->id;
    $result->user_name= Auth::user()->name;


     

    

     $result->save();

        return redirect()->route('admintodo.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $ctd=cheacktodo::get();
        return view('admin.todolist.index',compact('ctd'));
    }



    public function update($id,Request $request)
    {
        $result = cheacktodo::find($id);
        $data = $request->all();
        $result->protask = $data['protask'];
        $result->priority = $data['priority'];
        $result->level = $data['level'];
        $result->assign = $data['assign'];
        $result->cdate = $data['cdate'];
        $result->tname = $data['tname'];
        $result->dline =$data['dline'];
        $result->notes =$data['notes'];
   
{

}
     $result->save();

        return redirect()->route('admintodo.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $ctd = cheacktodo::find($id);
        return view('admin.cheacktodo.edit',['td'=> $ctd]);
    }
    public function destroy($id)
    {
        $ctd=cheacktodo::find($id);
        $ctd->delete();

        return redirect()->route('admintodo.index')
            ->with('success','Deleted successfully');
    }
}