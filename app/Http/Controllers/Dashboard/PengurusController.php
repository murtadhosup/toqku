<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index(){
        $pengurus = Pengurus::all();
        return view('/dashboard/pengurus',["data"=>$pengurus]);
    }

    public function hapus($id_pengurus){
        Pengurus::find($id_pengurus)->delete();
        return redirect('/dashboard/pengurus');
    }

    public function showFormTambah(){
        return view('dashboard.tambahPengurus');
    }

    public function showFormUpdate($id_pengurus){
        $pengurus = Pengurus::where('id_pengurus', $id_pengurus)->first();
        if($pengurus == null){
            return redirect("dashboard/pengurus");
        }
        return view("/dashboard/updatePengurus", ["data" => $pengurus]);

    }

    public function tambah(Request $request){
        $validation = $request->validate([
            "nama_pengurus" => ["required"],
            "gender" => ["required", "in:Laki-Laki,Perempuan"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "password" => ["min:6", "max:16"],
            "aktif" => ["required"]
        ]);

        $validation["password"] = "pengurus123";
        $validation["password"] = Hash::make($validation["password"]);

        DB::beginTransaction();
        try{
            Pengurus::create($validation);
            DB::commit();

            return redirect("/dashboard/pengurus");
        }catch(QueryException $err){
            DB::rollback();
            dd($err->errorInfo);
        }
    }


    public function update(Request $request, $id){
        $validation = $request->validate([
            "nama_pengurus" => ["required"],
            "gender" => ["required", "in:Laki-Laki,Perempuan"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "password" => ["min:6", "max:16"],
            "aktif" => ["required"]
        ]);

        DB::beginTransaction();
        try{
            $pengurus = Pengurus::findOrFail($id);
            $pengurus->update($validation);
            DB::commit();

            return redirect("/dashboard/pengurus");
        }catch(QueryException $err){
            DB::rollback();
            dd($err->errorInfo);
        }
    }


}
