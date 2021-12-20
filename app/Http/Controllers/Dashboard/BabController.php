<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bab;
use Illuminate\Database\QueryException;

class BabController extends Controller
{
    public function index(){
        $bab = DB::table('bab')->get();
        return view('/dashboard/bab',["data"=>$bab]);
    }

   
}
