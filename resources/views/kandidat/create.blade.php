@extends('kandidat.layout')


@section('content')

@if (count($errors) > 0)

    <ul class="alert alert-danger">

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

@endif

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Tambah Data Kandidat</h2>
        </div>
    </div>

</div>


<form action="/" method="POST" enctype="multipart/form-data">

    @csrf

    

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="judul" value="{{ old('nama') }}" class="form-control" placeholder="nama">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

            <strong>Visi:</strong>

            <input type="text" name="penulis" value="{{ old('visi') }}" class="form-control" placeholder="visi">


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

            <strong>Misi:</strong>

            <input type="text" name="harga" value="{{ old('misi') }}" class="form-control" placeholder="misi">


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

            <strong>Foto:</strong>

            <input type="file" name="image" class="form-control" placeholder="image">


            </div>

        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-12 text-right">

                <button type="submit" class="btn btn-primary">Simpan</button>
                
                <a class="btn btn-primary" href="/buku"> Back</a>

</div>

        </div>

    </div>

     

</form>

@endsection
