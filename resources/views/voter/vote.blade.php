@extends('voter.layout')

@section('judul')
  <div>
      <br>
      @if($pengaturan)
      <h1 class="judul-vote">{{ $pengaturan->nama_kegiatan }}</h1>
      @else
      <h1 class="judul-vote"></h1>
      @endif
      <br>
  </div>
@endsection

@section('content')

<<<<<<< HEAD
          <div class="container-vote">
              <div class="row">
                  @foreach ($kandidat as $kandidats)
                      <div class="col-xl-3 order-xl-2 mg-vote">
                          <div class="card-vote card-profile">
                              <h2 class="no-urut lingkaran">{{ $kandidats->no_urut }}</h2>
                              <img src="{{asset('thumb/'.$kandidats->foto) }}" alt="Image placeholder" class="card-img-top">
                              <div class="card-header-vote text-center">
                                  <div class="text-center">
                                      <h5 class="h3">
                                      {{ $kandidats->nama }}
                                      </h5>
                                      <div class="h5 font-weight-300">
                                      <i class="ni location_pin mr-2"></i>{{ $kandidats->jurusan }}'{{ $kandidats->angkatan }}
                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-between pd-top-btn-vt">
                                      <button id="visi_misi" class="btn btn-sm btn-bdr-u mr-4 size-btn-vt btn-visi" data-toggle="modal" data-target="#modal-visimisi" data-visi="{!! $kandidats->visi !!}" data-misi="{!! $kandidats->misi !!}">Info</button>
                                      <a href="/voter/voting/{{ $kandidats->id }}"><button data-toggle="modal" data-target="#modal-voting" type="button" class="btn btn-sm btn-ungu float-right size-btn-vt">Vote</button></a>
                                  </div>
                              </div>
                          </div>    
                      </div>
                  @endforeach
              </div>        
          </div>


    <!-- Modal Visi Misi-->
    <div class="modal fade" id="modal-visimisi" tabindex="-1" role="dialog" aria-labelledby="modal-visimisi" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <h1 class="modal-title" id="modal-visimisi">Visi</h1>
          <span id="visi"></span>
          <h1 class="modal-title" id="modal-visimisi">Misi</h1>
          <span id="misi"></span>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
=======
@if($pengaturan)


@if($voting)
<div class="container-fluid">
<div class="container-voter">
  <h2 class="text-vote">Pengumuman kandidat terpilih dapat dilihat pada</h2>
  <br>
  <h2 class="text-vote">{{ $pengaturan->pg_mulai }}</h2>
</div>
</div>

@else
<div class="container-vote">
    <div class="row">
      @if($kandidat == NULL)
        <h3>Kandidat belum di input</h3>
      @else
        @foreach ($kandidat as $kandidats)
          <div class="col-xl-3 order-xl-2 mg-vote">
              <div class="card-vote card-profile">
                  <h2 class="no-urut lingkaran">{{ $kandidats->no_urut }}</h2>
                  <img src="{{asset('thumb/'.$kandidats->foto) }}" alt="Image placeholder" class="card-img-top">
                  <div class="card-header-vote text-center">
                      <div class="text-center">
                          <h5 class="h3">
                          {{ $kandidats->nama }}
                          </h5>
                          <div class="h5 font-weight-300">
                          <i class="ni location_pin mr-2"></i>{{ $kandidats->jurusan }}'{{ $kandidats->angkatan }}
                          </div>
                      </div>
                      <div class="d-flex justify-content-between pd-top-btn-vt">
                          <button id="visi_misi" class="btn btn-sm btn-bdr-u mr-4 size-btn-vt btn-visi" data-toggle="modal" data-target="#modal-visimisi" data-visi="{!! $kandidats->visi !!}" data-misi="{!! $kandidats->misi !!}">Info</button>
                          <a href="/voter/voting/{{ $kandidats->id }}"><button type="button" class="btn btn-sm btn-ungu float-right size-btn-vt">Voting</button></a>
                      </div>
                  </div>
              </div>    
          </div>
        @endforeach
      @endif
    </div>        
</div>


@endif


@else
<div class="container-fluid">
<div class="container-voter">
  <h2 class="text-vote">Tidak ada pemilihan yang sedang berlangsung</h2>
</div>
</div>

@endif
>>>>>>> a9489ac8068e9f405f43f6acef299b15e9a176a6

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
<script>
$(document).ready(function() {
  $(document).on('click', '#visi_misi', function() {
    var visi = $(this).data('visi');
    var misi = $(this).data('misi');

    $('#visi').text(visi).html(visi);
    $('#misi').text(misi).html(misi);
  })
})

</script>

<script type="text/javascript">
            $(document).ready(function(){
              $(document).on('click', '#exampleModal', function() {
        $("#exampleModal").modal('show');

       });
            });
        </script>

@endsection