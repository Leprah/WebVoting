@extends('voter.layout')

@section('content')
<div>
<br>
    <h1 class="judul-vote">Voting Kandidat</h1>
<br>
</div>

<div class="container-fluid mg-vote">
    <div class="row">
        @foreach ($data_kandidat as $kandidat)
            <div class="col-xl-3 order-xl-2 mg-vote">
                <div class="card-vote card-profile">
                    <h2 class="no-urut lingkaran">{{ ++$no}}</h2>
                    <img src="{{asset('thumb/'.$kandidat->foto) }}" height="230" width="70" alt="Image placeholder" class="card-img-top">
                    <div class="card-header-vote text-center">
                        <div class="text-center">
                            <h5 class="h3">
                            {{ $kandidat->nama }}
                            </h5>
                            <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>TRPL'20
                            </div>
                        </div>
                    
<<<<<<< HEAD
                    <div class="d-flex justify-content-between pd-top-btn-vt">
                        <button type="button" class="btn btn-sm btn-info  mr-4 size-btn-vt" data-toggle="modal" data-target="#exampleModal">Info</button>
                        <button type="button" class="btn btn-sm btn-default float-right size-btn-vt" data-toggle="modal" data-target="#exampleModal">Vote</button>
                        <button type="button" class="btn btn-sm btn-default float-right size-btn-vt" href="{{ }}">Test voting</button>
                    </div>
            </div>
        </div>    
    </div>
        <div class="col-xl-3 order-xl-2 mg-vote">
        <div class="card-vote card-profile">
        <h2 class="no-urut lingkaran">2</h2>
            <img src="../assets/img/theme/img-1-1000x600.jpg" height="250" width="80" alt="Image placeholder" class="card-img-top">
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="text-center">
                        <h5 class="h3">
                        Jessica Jones
                        </h5>
                        <div class="h5 font-weight-300">
                        <i class="ni location_pin mr-2"></i>TRPL'20
=======
                        <div class="d-flex justify-content-between pd-top-btn-vt">
                            <button type="button" class="btn btn-sm btn-ungu  mr-4 size-btn-vt" data-toggle="modal" data-target="#exampleModal">Info</button>
                            <button type="button" class="btn btn-sm btn-bdr-u float-right size-btn-vt" data-toggle="modal" data-target="#exampleModal">Vote</button>
>>>>>>> a7fb44b1eee59719a230c5572b938598911f6f74
                        </div>
                    </div>
                </div>    
            </div>
        @endforeach
    </div>        
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="center" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection