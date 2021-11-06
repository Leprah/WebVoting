@extends('kandidat.layout')
@section('content')
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Edit Data Kandidat</h5>
         <h5 class="modal-title" style="display: none;">Edit Data</h5> 
         <button type="button" data-dismiss="modal" aria-label="Close" class="close">
             <span aria-hidden="true">×</span></button>
        </div> 
        <form>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                     <input type="text" name="nama" value="{{$data_kandidat->nama}}" class="form-control">
                     <!---->
                </div> 
                <div class="form-group">
                    <label>Visi</label>
                    <input type="text" name="visi" value="{{$data_kandidat->visi}}" class="form-control"> 
                    <!---->
                </div>
                <div class="form-group">
                    <label>Misi</label> 
                    <input type="text" name="misi" value="{{$data_kandidat->misi}}" class="form-control">
                    <!---->
                </div>
                <div class="form-group">
                    <label>Foto</label> 
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $data_kandidat->image }}" width="300px">
                    <!---->
                </div> 
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button> 
                    <button type="submit" class="btn btn-success" style="display: none;">Update</button> 
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
                                                    
@endsection