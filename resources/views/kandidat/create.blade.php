@extends('kandidat.layout')

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Tambah Data
</button>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Kandidat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                     <input type="text" name="name" class="form-control">
                     <!---->
                </div> 
                <div class="form-group">
                    <label>Visi</label>
                    <input type="text" name="description" class="form-control"> 
                    <!---->
                </div>
                <div class="form-group">
                    <label>Misi</label> 
                    <input type="text" name="price" class="form-control">
                    <!---->
                </div>
                <div class="form-group">
                    <label>Foto</label> 
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <!---->
                </div>
            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
                                                    
@endsection