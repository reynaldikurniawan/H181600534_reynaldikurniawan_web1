<?php

namespace App\Http\Controllers;

use App\kategori;

class isikategori extends Controller
{
    public function index(){

      $kategori = kategori::all();

      return view('kategori.kategori',compact('kategori'));
       
    }
}
