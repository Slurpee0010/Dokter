<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsdokter;

class DokterController extends Controller
{
  public function create()
  {
      return view('Dokter.create');
  }

  public function store(Request $request)
   {
       $dokter = new Rsdokter();
       $dokter->nama = $request->get('nama');
       $dokter->email = $request->get('email');
       $dokter->spesialis = $request->get('spesialis');
       $dokter->alamat = $request->get('alamat');
       $dokter->no_hp = $request->get('no_hp');
       $dokter->no_induk = $request->get('no_induk');
       $dokter->save();
       return redirect('dokter')->with('success', 'Dokter Berhasil Ditambah');
   }

   public function index()
       {
           $dokter=Rsdokter::all();
           return view('Dokter.index',compact('rsdokters'))->with('dokter', $dokter);
       }

       public function edit($id)
           {
             $dokter = Rsdokter::find($id);
         return view('dokter/edit',compact('dokter','id'))->with('dokter', $dokter);
           }

           public function update(Request $request)
               {
                 $dokter= Rsdokter::find($request->id);
                 $dokter->nama_dokter=$request->input('nama_dokter');
                 $dokter->email=$request->input('email');
                 $dokter->spesialis=$request->input('spesialis');
                 $dokter->alamat=$request->input('alamat');
                 $dokter->no_hp=$request->input('no_hp');
                 $dokter->no_induk=$request->input('no_induk');
                 $dokter->save();
                 return redirect('dokter');
               }

          public function destroy($id)
    {
        $dokter = Rsdokter::find($id);
        $dokter->delete();
        return redirect('dokter')->with('success','Dokter berhasil dihapus');
    }

}
