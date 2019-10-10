@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Tambah Kategori Berita</div>

                <div class="card-body">
                <form method="post"action="{!! route('kategori_berita.store') !!}">
                @include('kategori_berita.from')
                </form>
                
                </div>
             </div>
        </div>
    </div>
@endsection