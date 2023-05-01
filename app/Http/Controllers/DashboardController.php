<?php

namespace App\Http\Controllers;
use App\Models\usermanage;
use App\Models\asignpro;
use App\Models\todo;
use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index()
    {
          $usercount = usermanage::count();
          $Asigntaskcount = asignpro::count();
          $todolistcount = todo::count();
        //   $fullcalendercount = events::count();
         return view('dashboard',compact('usercount','Asigntaskcount','todolistcount'));
    }



}
