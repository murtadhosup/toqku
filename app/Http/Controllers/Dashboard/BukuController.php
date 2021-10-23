<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Database\QueryException;

class BukuController extends Controller
{
    public function index(){
        $buku = Buku::all();
        return view('/dashboard/buku',["data"=>$buku]);
    }

    public function hapus($id_buku){
        Buku::find($id_buku)->delete();
        return redirect('/dashboard/buku');
    }

    public function showFormTambah(){
        return view('/dashboard/tambahBuku');
    }

    public function showFormUpdate($id_buku){
        $buku = Buku::where('id_buku', $id_buku)->first();
        if($buku == null){
            return redirect("dashboard/buku");
        }
        return view("/dashboard/updateBuku", ["data" => $buku]);

    }

    public function tambah(Request $request){
        $validation = $request->validate([
            "buku" => ["required"],
            "keterangan" => ["required"],
            "penulis" => ["required"],
            "tahun_terbit" => ["required"],
        ]);


        DB::beginTransaction();
        try{
            Buku::create($validation);
            DB::commit();

            return redirect("/dashboard/buku");
        }catch(QueryException $err){
            DB::rollback();
            dd($err->errorInfo);
        }
    }

    public function update(Request $request, $id){
        $validation = $request->validate([
            "buku" => ["required"],
            "keterangan" => ["required"],
            "penulis" => ["required"],
            "tahun_terbit" => ["required"],
        ]);

        DB::beginTransaction();
        try{
            $buku = Buku::findOrFail($id);
            $buku->update($validation);
            DB::commit();

            return redirect("/dashboard/buku");
        }catch(QueryException $err){
            DB::rollback();
            dd($err->errorInfo);
        }
    }
}
