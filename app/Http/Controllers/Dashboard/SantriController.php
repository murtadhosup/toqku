<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Santri;

use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SantriController extends Controller
{
    public function index(){
        $santri = Santri::all();
        return view("dashboard/santri", ["data" => $santri]);
    }

    public function showFormTambah(){
        return view("dashboard/tambahSantri");
    }

    public function showFormUpdate($id){
        $santri = Santri::where('id_santri', $id)->first();
        if($santri == null){
            return redirect("dashboard/santri");
        }
        return view("dashboard/updateSantri", ["data" => $santri]);
    }

    public function hapus($id_santri){
        Santri::find($id_santri)->delete();
        return redirect('/dashboard');
    }

    public function tambah(Request $request){
        $validation = $request->validate([
            "nama_santri" => ["required"],
            "gender" => ["required", "in:Laki-Laki,Perempuan"],
            "tgl_lahir" => ["required", "date"],
            "kota_lahir" => ["required", "min:3"],
            "nama_ortu" => ["required"],
            "alamat_ortu" => ["required"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "password" => ["min:6", "max:16"],
            "tgl_masuk" => ["required", "date"],
            "aktif" => ["required"]
        ]);

        $validation["password"] = "santri123";
        $validation["password"] = Hash::make($validation["password"]);

        DB::beginTransaction();
        try{
            Santri::create($validation);
            DB::commit();

            return redirect("/dashboard");
        }catch(QueryException $err){
            DB::rollback();
            dd($err->errorInfo);
        }
    }


    public function update(Request $request, $id){
        $validation = $request->validate([
            "nama_santri" => ["required"],
            "gender" => ["required", "in:Laki-Laki,Perempuan"],
            "tgl_lahir" => ["required", "date"],
            "kota_lahir" => ["required", "min:3"],
            "nama_ortu" => ["required"],
            "alamat_ortu" => ["required"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "password" => ["min:6", "max:16"],
            "tgl_masuk" => ["required", "date"],
            "aktif" => ["required"]
        ]);

        DB::beginTransaction();
        try{
            $santri = Santri::findOrFail($id);
            $santri->update($validation);
            DB::commit();

            return redirect("/dashboard");
        }catch(QueryException $err){
            DB::rollback();
            dd($err->errorInfo);
        }
    }

}
