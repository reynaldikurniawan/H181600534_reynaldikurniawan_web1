<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        //Elequent
        $listKategoriPengumuman=KategoriPengumuman::all();

        return view('kategori_pengumuman.index',compact('listKategoriPengumuman'));
    }

    public function show($id){
        
        $KategoriArtikel=KategoriArtikel::find($id);

        return view('kategori_pengumuman.show',compact('KategoriPengumuman'));
    }

    public function create(){
        return view('kategori_pengumuman.create');
    }
    public function store(Request $request){
        $input= $request->all();
        KategoriArtikel::create($input);
            
        return redirect(route('kategori_pengumuman.index'));
    
        
    }
}
