<?php

namespace App\Http\Controllers;
use App\Models\todo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
  
class todoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $td= DB::table('todos')->get();
        
        return view('admin.todolist.index',compact('td'));
    }


    public function create()
    {
        return view('admin.todolist.add');
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
    $result = new todo;
    $result->protask = $data['protask'];
    $result->priority = $data['priority'];
    $result->level = $data['level'];
    $result->assign = $data['assign'];
    $result->cdate = $data['cdate'];
    $result->tname = $data['tname'];
    $result->dline =$data['dline'];
    $result->notes =$data['notes'];
    $result->user_id = Auth::user()->id;
    $result->user_name= Auth::user()->employename;


     

    

     $result->save();

        return redirect()->route('todo.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $td=todo::get();
        return view('admin.todolist.index',compact('td'));
    }



    public function update($id,Request $request)
    {
        $result = todo::find($id);
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

        return redirect()->route('todo.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $td = todo::find($id);
        return view('admin.todolist.edit',['td'=> $td]);
    }
    public function destroy($id)
    {
        $td=todo::find($id);
        $td->delete();

        return redirect()->route('todo.index')
            ->with('success','Deleted successfully');
    }
}