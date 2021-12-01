@extends('voter.layout')

@section('content')
<div>
<br>
    <h1 class="judul-vote">Voting Kandidat</h1>
<br>
</div>

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
                            <a href="/voter/voting/{{ $kandidats->id }}"><button type="button" class="btn btn-sm btn-ungu float-right size-btn-vt">Voting</button></a>
                        </div>
                    </div>
                </div>    
            </div>
        @endforeach
    </div>        
</div>

<!-- Modal -->
<div class="modal fade" id="modal-visimisi" tabindex="-1" role="dialog" aria-labelledby="modal-visimisi" aria-hidden="true">
  <div class="modal-dialog" role="document">
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

@endsection